var express = require('express');
var router = express.Router();
var User = require('../user/userSchema');
var MongoClient = require('mongodb').MongoClient;
var DB_CONN_STR = 'mongodb://localhost:27017/testForAuth';
var path = require('path');

/*
// GET route for reading data
router.get('/', function (req, res, next) {
  return res.sendFile(path.join(__dirname + '/login.php'));
});

*/



//POST route for updating data
router.post('/', function (req, res, next) {




  // confirm that user typed same password twice

  if (req.body.password !== req.body.passwordConf) {
    var err = new Error('Passwords do not match.');
    err.status = 400;
    res.send("passwords dont match");
    return next(err);
  }


  if (
    //req.body.email &&

    req.body.username && req.body.password && req.body.passwordConf)

    {


      var userData = {
      //email: req.body.email,
      username: req.body.username,
      password: req.body.password,
      passwordConf: req.body.passwordConf,
    }

    User.create(userData, function (error, user) {
      if (error) {
        console.log('create user error');
        return next(error);
      } else {
        req.session.userId = user._id;
       return res.redirect('/profile');
      }
    });






  }



  else  if (req.body.userName && req.body.logpassword) {
    User.authenticate(req.body.userName, req.body.logpassword, function (error, user) {
      if (error || !user) {
        var err = new Error('Wrong username or password.');
        err.status = 401;
        return next(err);
      }
      else {
        req.session.userId = user._id;
        //return res.redirect('/profile');
        res.sendFile(path.join(__dirname+ '/../profile.html'));
        console.log('ok');
      //  return res.send('<h1>Name: </h1>' + user.username + '<h2>Mail: </h2>' + user.email + '<br><a type="button" href="/logout">Logout</a>')

          }
    });
  }else {
    var err = new Error('All fields required.');
    err.status = 400;
    return next(err);
  }

})


// GET route after registering
// /profile
router.get('/', function (req, res, next) {
  User.findById(req.session.userId)
    .exec(function (error, user) {
      if (error) {
        return next(error);
      } else {
        if (user === null) {
          var err = new Error('Not authorized! Go back!');
          err.status = 400;
          return next(err);
        } else {
          return res.send('<h1>Name: </h1>' + user.username + '<h2>Mail: </h2>' + user.email + '<br><a type="button" href="/logout">Logout</a>')
        }
      }
    });
});

// GET for logout logout
router.get('/logout', function (req, res, next) {
  if (req.session) {
    // delete session object
    req.session.destroy(function (err) {
      if (err) {
        return next(err);
      } else {
        return res.redirect('/');
      }
    });
  }
});

module.exports = router;
