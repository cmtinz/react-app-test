const Pool = require('pg').Pool;

const pool = new Pool({
  host: "localhost",
  port: "5432",
  database: "npr-db",
  user: "npr-db-usr",
  password: "npr-db-password"
});

module.exports = {
  query: (text, params) => {
    return pool.query(text, params)
  }
}
