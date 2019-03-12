'use strict'

const express = require('express');
const productCtrl = require('../controllers/product');
const api = express.Router();


api.get('/product', productCtrl.getProducts);
api.get('/product/:productId', productCtrl.getProduct);
api.post('/product/registro', productCtrl.saveProduct);
api.put('/product/actualizar/:productId', productCtrl.updateProduct);
api.delete('/product/eliminar/:productId', productCtrl.deleteProduct);


module.exports = api;