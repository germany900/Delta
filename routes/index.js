'use strict'

const express = require('express');
const productCtrl = require('../controllers/product');
const auth = require('../middlewares/auth');
const api = express.Router();


api.get('/product', productCtrl.getProducts);
api.get('/product/:productId', productCtrl.getProduct);
api.post('/product/registro', productCtrl.saveProduct);
api.put('/product/actualizar/:productId', productCtrl.updateProduct);
api.delete('/product/eliminar/:productId', productCtrl.deleteProduct);
api.get('/private', auth, (req, res) => {
	res.status(200).send({ message: 'Tienes acceso' })
});


module.exports = api;