var express = require('express');
var bodyParser = require('body-parser');
var path = require('path');
var app = express();
/* var logger = function(req, res, next){
    console.log('Tom's logging...');
    next();
}
app.use(logger);
*/
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended: false}));

app.get('/', function(req, res){
    res.send('Hello from Tom!');
});
app.listen(3000, function(){
    console.log('Server started on Port 3000...');
})
