var express = require('express');
var router = express.Router();

/* Filtrar posts por nombre localmente */
router.get('/:name', function(req, res, next) {
  res.send('named resource');
});

/* Listar posts */
router.get('/', function(req, res, next) {
  res.send('all posts');
});

/* Insertar posts */
router.post('/', function(req, res, next) {
  res.send('insert posts');
});

/* Eliminar posts */
router.delete('/:id', function(req, res, next) {
  res.send('deleting posts');
});

module.exports = router;
