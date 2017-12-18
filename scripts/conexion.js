var mysql = require('mysql');

var con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "monopolio"
});

var text = [];

con.connect(function(err) {
    con.query("SELECT nombre FROM locaciones", function (err, result) {
        for (i = 0; i < result.length; i++) {
            text[i] = result[i].nombre;
        }
    });
});
