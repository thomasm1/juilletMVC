// Code bloquant
var content = fs.readFileSync('monFichier.txt');
console.log('Mon Fichier : ', content);

// Code non bloquant
fs.readFile('MonFichier.txt', (err, content) => {
	if (err) {
		throw err:
	}
	console.log('Mon Fichier : ', content);
});

