var express = require('express');
var router = express.Router();
var db = require('../db')
var bodyParser = require('body-parser')

router.use(bodyParser.json())

/* Filtrar posts por nombre localmente */
router.post('/search', async (req, res, next) => {
  const queryName = req.body.queryName
  const rows = await db.query(`select * from posts where post_name ilike '%${req.body.queryName}%'`)
  res.statusCode = 200;
  res.setHeader('Content-Type', 'application/json')
  res.json(rows.rows)
});

/* Listar posts */

router.get('/', async (req, res) => {
  const rows = await db.query('SELECT * FROM posts')
  res.statusCode = 200;
  res.setHeader('Content-Type', 'application/json')
  res.json(rows.rows)
})


/* Insertar posts */
// insert into posts (post_id, post_name, post_description) values (default, 'Post 2', 'Descripción');
router.post('/', async (req, res, next) => {
  const postName = req.body.postName
  const postDescription = req.body.postDescription
  const rows = await db.query(`insert into posts (post_id, post_name, post_description) values (default, '${postName}', '${postDescription}')`)
  res.statusCode = 200;
  res.setHeader('Content-Type', 'application/json')
  res.json(rows)
  console.log(rows)
})

/* Eliminar posts */
router.delete('/:id', async (req, res, next) => {
  const rows = await db.query(`delete from posts where post_id = ${req.params.id}`)
  res.statusCode = 200;
  res.setHeader('Content-Type', 'application/json')
  res.json(rows)
  console.log(rows)
});

module.exports = router;
