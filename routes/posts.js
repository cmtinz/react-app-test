var express = require('express');
var router = express.Router();
var db = require('../db')
var bodyParser = require('body-parser')

router.use(bodyParser.json())

function caseSensitiveRows(row) {
  return row.map(row => {return {postId: row.postid, postName: row.postname, postDescription: row.postdescription}})
}

/* Filtrar posts por nombre localmente */
router.post('/search', async (req, res, next) => {
  try {
    const queryName = req.body.queryName
    const rows = await db.query(`select * from post where postName ilike '%${req.body.queryName}%'`)
    res.statusCode = 200;
    res.setHeader('Content-Type', 'application/json')
    res.json(caseSensitiveRows(rows.rows))
  } catch (err) {
    return next(err)
  }
});

/* Listar posts */

router.get('/', async (req, res, next) => {
  try {
    const rows = await db.query('SELECT * FROM posts')
    res.statusCode = 200;
    res.setHeader('Content-Type', 'application/json')
    res.json(caseSensitiveRows(rows.rows))
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
    const rows = await db.query(`insert into posts (postId, postName, postDescription) values (default, '${postName}', '${postDescription}') RETURNING *`)
    res.statusCode = 200;
    res.setHeader('Content-Type', 'application/json')
    res.json({
      "postId": rows.rows[0].postid,
      "postName": rows.rows[0].postname,
      "postDescription": rows.rows[0].description
    })
  } catch(err) {
    return next(err)
  }
})

/* Eliminar posts */
router.delete('/:id', async (req, res, next) => {
  try {
    const rows = await db.query(`delete from posts where postId = ${req.params.id} RETURNING *`)
    res.statusCode = 200;
    res.setHeader('Content-Type', 'application/json')
    res.json({"postId": rows.rows[0].postid})
  } catch(err) {
    return next(err)
  }
});

module.exports = router;
