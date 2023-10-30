
const db = require("mssql");

function conectarMsSQL(){}

function conectar(){
    db.createConnection({
        host: 'localhost',
        user: 'root',
        password: '1234'
    })

}

function fazerLogin(login, senha){
        if(login =='admin' && senha == '1234'){
            return true;
        }
        return false;
   }
module.exports = { fazerLogin }