var http = require('http')

http.createServer(function (req, res) {
	fs.readFile('/var/www/demo/log.txt', function (err, data) {
		if (err) {
			res.writeHead(500, err.message)
			res.end()
		} else { 
			res.writeHead(200,  {
				'Content-Type' : 'text/plain'
			});
			res.end(data)
		}
	});
}).listen(80)


// corresponds to app.php
var fs = require('fs')
var file = '/var/www/site/demo.txt'
fs.stat(file, function (err, stats) {
	if (err) return 
	if (stats.isFile()) {
		fs.reaadFile(file, function (err, data) {
			if (err) throw err
			console.log(data)
		})
	}
});

