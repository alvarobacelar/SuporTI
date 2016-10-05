<?php

/*
 * Classe de conexão com o banco de dados
 * Data Modificação: 26/06/2013
 * Versão 1.0
 */

/**
 * Classe usada somente como herança
 *
 * @author Ralny
 * Modificado por: Álvaro
 */
class MysqlConectaDAO {

    private $host, $usuario, $senha, $db, $qr, $data, $totalFields;
    protected $conexao;
    var $result;
    private $senhaBanco = "258276"; // pega a senha do banco de dados do servidor


    //CONTRUTOR PARA INICIALIZAR AUTOMATICAMENTE AS VARIAVEIS DE CONEXAO
    public function __construct() {

        $this->host = "127.0.0.1";
        $this->usuario = "root";
        $this->senha = $this->senhaBanco;
        $this->db = "supoinfor";
        self::conectar();
    }

    //METODO UTILIZADO PARA EFETUAR A CONEXAO COM A BASE DE DADOS
    protected function conectar() {
        //ESTABELE CONEXAO COM A BASE DE DADOS
        $this->conexao = @mysql_connect($this->host, $this->usuario, $this->senha) or die
                        ("<b><cente> ERRO AO CONECTAR COM BANCO DE DADOS</center></b> " . mysql_error());
        //SELECIONANDO O BANCO DE DADOS
        $this->db = @mysql_select_db($this->db) or die
                        ("<b><cente> ERRO AO ACESSAR O BANCO DE DADOS</center></b> " . mysql_error());
    }

    //METODO UTILIZADO PARA EXECUTAR COMANDOS SQL
    public function execSQL($sql){
        $this->result = @mysql_query($sql, $this->conexao) or die
                        ("<b><cente>ERRO AO EXECUTAR QUERY: $sql - </center></b>" . mysql_error());
        return ($this->result);
    }

    //METODOS UTILIZADO PARA RETORNAR O TOTAL DE REGIsTROS NA QUERY
    protected function countData($query) {
        $this->totalFields = @mysql_num_rows($query);
        return $this->totalFields;
    }

    public function query($sql) {

        $this->result = @mysql_query($sql, $this->conexao);

        return ($this->result);
    }


}

?>
