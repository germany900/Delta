'use strict'


const mongoose = require('mongoose');
const app = require('./app');
const config = require('./config');


mongoose.connect(config.db, (err, res) => {
	if(err) {
		return console.log(`Error al conectar la base de datos: ${err}`);

	}
		console.log('conexion a la base de datos establecida...')
			app.listen(config.port, () => {
				console.log(`Api Rest corriendo en el localhost:${config.port}`);
		
	});
});


