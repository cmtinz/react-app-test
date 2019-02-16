const { Pool } = require('pg')

const pool = new Pool({
  user: "app_npr",
  host: "localhost",
  database: "app_database",
  password: "app_password",
  port: "5432"
})

module.exports = {
  query: (text, params, callback) => {
    return pool.query(text, params, callback)
  }
}
