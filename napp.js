var http = require('http'),
querystring = require('querystring'),
fs = require('fs'),
MongoClient = require('mongodb').MongoClient,
ObjectID = require('mongodb').ObjectID,
assert = require('assert');

var MongoURL = "mongodb://localhost:27017/TestForAuth";

function Getuser(usn, callback){
    MongoClient.connect(MongoURL, function(err, db){
        assert.equal(null, err);
        var collection = db.collection('users');
        collection.findOne({username: usn},function(err, items){
            db.close();
            callback(err, items);
        });
    });
}

function InsertObject(coll,object){
    MongoClient.connect(MongoURL, function(err, db){
        assert.equal(null, err);
        console.log("Connect successfully to server");
        db.collection(coll,null ,function(err, collection){
            assert.equal(null, err);
            collection.insertOne(object, function(err, result){
                assert.equal(null, err);
                console.log("Inserted 1 documents into the collection");
                db.close();
            });
        });
    });
}

function GetAll(callback){ 
    MongoClient.connect(MongoURL, function(err, db){
        var collection = db.collection('confirmation');
        collection.find().sort({_id:-1}).toArray(function(err, items){
            db.close();
            callback(err, items);
        });
    });
}


function onRequest(req, res){
    console.log("Resquest received.");
    var jsonData = "";
    req.on('data', function(chunk){
        jsonData += chunk;
    });
    req.on('end', function(){
        var reqObj = JSON.parse(jsonData);
        console.log(reqObj);
        res.setHeader("Access-Control-Allow-Origin","*");
        if(Object.keys(reqObj).length === 2){
            //authentic password
            Getuser(reqObj.username, function(err, items){
                console.log(items);
                if(!err){
                    if(items.username === reqObj.username && items.password === reqObj.password){
                        // authen success
                        res.writeHead(200);
                        res.end(JSON.stringify({username:reqObj.username, status:"success"}));
                    } else{
                        res.writeHead(200);
                        res.end(JSON.stringify({status:"fail"}));
                    }
                }else{
                    res.writeHead(200);
                    res.end(JSON.stringify({status:"fail"}));
                }
            })

        } else if(Object.keys(reqObj).length === 6){
            //add shopping order
            InsertObject("confirmation", reqObj);
            res.end(JSON.stringify({status:"success"}));
            
        } else if(Object.keys(reqObj).length === 1){
            GetAll(function(err, items){
                if(!err){
                    res.writeHead(200);
                    res.end(JSON.stringify(items));
                }
            });
        } else if(Object.keys(reqObj).length === 3){
            delete(reqObj.cate);
            console.log(reqObj);
            InsertObject("users", reqObj);
        }
    });
}



http.createServer(onRequest).listen(8889);