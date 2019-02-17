var express = require('express');
var router = express.Router();
var db = require('../db')
var bodyParser = require('body-parser')

router.use(bodyParser.json())

/* Filtrar posts por nombre localmente */
router.post('/search', async (req, res, next) => {
  try {
    const queryName = req.body.queryName
    const rows = await db.query(`select * from post where postName ilike '%${req.body.queryName}%'`)
    res.statusCode = 200;
    res.setHeader('Content-Type', 'application/json')
    res.json(rows.rows)
  } catch (err) {
    return next(err)
  }
});

/* Listar posts */

router.get('/', async (req, res, next) => {
  try {
    const rows = await db.query('SELECT * FROM posts')
    console.log(rows)
    res.statusCode = 200;
    res.setHeader('Content-Type', 'application/json')
    res.json(rows.rows)
  } catch(err) {
    return next(err)
  }
})


/* Insertar posts */
// insert into posts (postId, postName, postdescription) values (default, 'Post 2', 'Descripción');
router.post('/', async (req, res, next) => {
  try {
    const postName = req.body.postName
    const postDescription = req.body.postDescription
    const rows = await db.query(`insert into posts (postId, postName, postDescription) values (default, '${postName}', '${postDescription}')`)
    res.statusCode = 200;
    res.setHeader('Content-Type', 'application/json')
    res.json(rows)
    console.log(rows)
  } catch(err) {
    return next(err)
  }
})

/* Eliminar posts */
router.delete('/:id', async (req, res, next) => {
  try {
    const rows = await db.query(`delete from posts where postId = ${req.params.id}`)
    res.statusCode = 200;
    res.setHeader('Content-Type', 'application/json')
    res.json(rows)
    console.log(rows)
  } catch(err) {
    return next(err)
  }
});

module.exports = router;
