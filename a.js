var express = require('express');
var app = express();
var bodyParser = require('body-parser');

var urlencodedParser = bodyParser.urlencoded({ extended: false })
app.post('/checkpass',urlencodedParser, function(req, res){
  var response = {
      "username":req.body.userName,
      "password":req.body.password
  };
  console.log(response);
  res.end(JSON.stringify(response));
  //console.log(request.body.data);
});
