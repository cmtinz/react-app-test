const { Pool } = require('pg')

const pool = new Pool({
  host: "localhost",
  port: "5432",
  database: process.env.POSTGRES_DB,
  user: process.env.POSTGRES_USER,
  password: process.env.POSTGRES_PASSWORD
})

console.log(pool);

module.exports = {
  query: (text, params, callback) => {
    return pool.query(text, params, callback)
  }
}
