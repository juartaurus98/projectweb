var expess = require('express');
var bodyParser = require('body-parser');
var morgan = require('morgan');
var mongoose = require('mongoose');

var app = expess();
var port = process.env.PORT || 3000;

app.use("/assets",expess.static(__dirname+"/public"));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended : true}));

app.use(morgan("dev"));

app.set("view engine","ejs");

app.get("/",function(req,res){
	res.render("index");
});
app.get("/registered",function(req,res){
	res.render("registrate");
});
app.get("/home",function(req,res){
	res.render("home");
})

app.listen(port, function() {
	console.log("app listening on port:" + port);
});
