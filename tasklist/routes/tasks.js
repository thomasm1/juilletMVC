var express = require('express');
var router = express.Router();
// var mongojs = require('mongojs');
// var db = mongojs('mongodb://thomasm1:Tmiltonm15%@ds147882.mlab.com:47882/tmjuillet', ['tasks']);

router.get('/tasks', function(req, res, next){
//     db.tasks.find(function(err, tasks){
//               if(err){
  //                      res.send(err);
     //            }
    res.send('TMTASK API');  //     res.json(tasks);   //      //  res.send('TMTASK API'); 
 });
// });

module.exports = router;
