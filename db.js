const { Pool } = require('pg')

const pool = new Pool({
  user: "tcitdb",
  host: "127.0.0.1",
  database: "tcitdb",
  password: "evaristo78",
  port: "5432"
})

module.exports = {
  query: (text, params, callback) => {
    return pool.query(text, params, callback)
  }
}
