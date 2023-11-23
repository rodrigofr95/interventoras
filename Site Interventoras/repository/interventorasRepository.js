const db = require('./db');

async function criarcadastro(nome, email, senha) {

    try {
        const con = await db.conectarMysql();
        let sql = `INSERT INTO pmc.interventoras ( nome, email, senha) VALUES ('${nome}', ${email}, ${senha})`
        await con.execute(sql);
        con.destroy();
        console.log("inseriu");
        return true;        
    } catch (error) {
        con.destroy();
        console.log("error");
        return false;
    }
}


async function updateinter(id, nome, email, senha) {

    try {
        const con = await db.conectarMysql();
        let sql = `UPDATE pmc.laboratorios set nome='${nome}', email=${email}, senha=${senha} where id=${id}`
        await con.execute(sql);
        con.destroy();
        console.log("atualizou");
        return true;        
    } catch (error) {
        console.log(error)
        con.destroy();
        console.log("error");
        return false;
    }
}

async function consultarLab(){

    try {
        const con = await db.conectarMysql();
        const consulta = 'SELECT * FROM interventoras';
        const resultado = await con.query(consulta);
        const listaLabs = resultado[0];
        console.log(listaLabs)
        return listaLabs;
        
    } catch (error) {
        console.log(error);
        return false;
    }

}



async function getLab(id){

    try {
        const con = await db.conectarMysql();
        const consulta = `SELECT * FROM interventoras where id = ${id}`;
        const resultado = await con.query(consulta);
        const lab = resultado[0][0];
        console.log(lab)
        return lab;
        
    } catch (error) {
        console.log(error);
        return false;
    }

}

async function apagarLab(id){

    try {
        const con = await db.conectarMysql();
        const consulta = `delete from laboratorios where id = ${id}`
        await con.execute(consulta);
        return true;
        
    } catch (error) {
        console.log(error);
        return false;
    }

}


module.exports = { criarLab, consultarLab, apagarLab, getLab, updateLab };