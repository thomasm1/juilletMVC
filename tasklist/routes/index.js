var express = require('express');
var router = express.Router();

router.get('/', function(req, res, next){
res.render('index.html'); //	res.send('TMJuliet INDEX PAGE');
});

module.exports = router; 
