<?php

require_once "MysqlConectaDAO.php";

/*
 * Classe de manipulação de dados do bando
 * Data de Modificação: 20/09/2013
 * @version 1.12
 */

/**
 * Usada para fazer manipulação no bando
 *
 * @author Ralny
 * Modificado por: Álvaro
 */
class ManipulateData extends MysqlConectaDAO {

    private $sql, $table, $camposBanco, $dados, $status, $campoTable, $valueId, $login, $senha, $fieldId, $secao;

    //ENVIA O NOME DA TABELA A SER USADA NA CLASSE
    public function setTable($t) {
        $this->table = $t;
    }

    //ENVIA OS CAMPOS A SEREM USADOS NA CLASSE
    public function setCamposBanco($f) {
        $this->camposBanco = $f;
    }

    //ENVIA OS DADOS A SEREM USADOS NA CLASSE
    public function setDados($d) {
        $this->dados = $d;
    }

    //ENVIA O CAMPO DE PESQUISA, NORMALMENTE O CAMPO CODIGO
    public function setCampoTable($fi) {
        $this->campoTable = $fi;
    }

    //ENVIA OS DADOS A SEREM CADASTRADOS OU PESQUISADOS
    public function setValueId($vi) {
        $this->valueId = $vi;
    }

    public function setFieldId($id) {
        $this->fieldId = $id;
    }

    public function setSecao($secao) {
        $this->secao = $secao;
    }

    //RECEBE O STATUS ATUAL,ERROS OU ACERTOS
    public function getStatus() {
        return $this->status;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    //METODO QUE EFETUA CADASTROS DE DADOS NO BANCO
    public function insert() {
        $this->sql = "INSERT INTO $this->table($this->camposBanco)VALUES($this->dados)";
        self::execSql($this->sql);
    }

    //METODO QUE EFETUA A EXCLUSAO DE DADOS NO BANCO
    public function delete() {
        $this->sql = $this->query("DELETE FROM $this->table WHERE $this->campoTable = '$this->valueId' AND resposta_secao = '$this->secao'");
    }

    //METODO QUE EFETUA A EXCLUSAO DE DADOS NO BANCO
    public function deleteInforme() {
        $this->sql = $this->query("DELETE FROM $this->table WHERE $this->campoTable = '$this->valueId'");
    }

    //METODO QUE FAZ A ALTERACAO DE DADOS NO BANCO
    public function update() {
        $this->sql = "UPDATE $this->table SET $this->camposBanco WHERE $this->fieldId = '$this->valueId'";
        self::execSQL($this->sql);
        $this->status = "Alterado com Sucesso";
    }

    public function countTotal($table, $secao) {
        $this->sql = $this->query("SELECT count(*) as total FROM $table WHERE secao_chamado = '$secao'");
        $total = $this->fetch_object();
        $cont = $total->total;
        return $cont;
    }
    
    public function updateResposta($id) {
        $this->sql = $this->query("UPDATE resposta SET status = 0 WHERE id_chamado = '$id' AND resposta_secao != '$this->secao'");
    }

    public function updateRespostaAdm($id, $secao) {
        $this->sql = $this->query("UPDATE resposta SET status = 0 WHERE id_chamado = '$id' AND resposta_secao != '$secao'");
    }

    public function mudarSenhaSelect($usuario, $senha) {
        $this->sql = $this->query("SELECT count(*) as usuario FROM usuarios WHERE login = '$usuario' AND senha = '$senha' AND status = 1");
    }

    // METODO QUE SELECIONA TODA A TABELA
    public function select() {
        $this->sql = $this->query("SELECT * FROM $this->table WHERE status = 1");
    }
    
    public function selectUsuarioAltera() {
        $this->sql = $this->query("SELECT * FROM $this->table WHERE $this->valueId = $this->fieldId");
    }

    // METODO QUE SELECIONA TODA A TABELA
    public function selectGeral() {
        $this->sql = $this->query("SELECT * FROM $this->table");
    }

    // METODO QUE SELECIONA TODA A TABELA E ORDENA POR ORDEM NO NOME
    public function selectOrder() {
        $this->sql = $this->query("SELECT * FROM $this->table WHERE status = 1 ORDER BY nome");
    }

    // FUNÇÃO QUE CONTA QUANTAS RESPOSTA TEM EM UM DETERMINADO CHAMADO
    public function count($id, $secao) {
        $this->sql = $this->query("SELECT count(*) AS cont FROM resposta WHERE status = 1 AND id_chamado = '$id' AND resposta_secao = '$secao'");
    }

    public function count2() {
        $this->sql = $this->query("SELECT count(*) AS total FROM $this->table");
    }

    // FUNÇÃO QUE CONTA QUANTAS RESPOSTA TEM EM UM DETERMINADO CHAMADO
    public function countAdm($id, $secao) {
        $this->sql = $this->query("SELECT count(*) AS cont FROM resposta WHERE status = 1 AND id_chamado = '$id' AND resposta_secao != '$secao'");
    }

    public function countTodas($id) {
        $this->sql = $this->query("SELECT count(*) AS conta FROM resposta WHERE id_chamado = '$id'");
    }

    // SELCIONA TODOS OS CHAMADOS 
    public function selectChamado($nivel) {
        $this->sql = $this->query("SELECT chamado.id_chamado, chamado.tipo, chamado.servico, chamado.assunto, chamado.militar_chamado, chamado.chamado_secao, chamado.data, chamado.hora, chamado.texto, chamado.secao_chamado, usuarios.secao 
                                    FROM chamado, ordem_de_servico, usuarios
                                    WHERE chamado.id_chamado = ordem_de_servico.id_ordem_servico
                                    AND ordem_de_servico.id_usuario = usuarios.id_usuario
                                    AND chamado.secao_chamado = '$nivel'
                                    AND chamado.status = 1 ORDER BY chamado.id_chamado");
    }

    // FUNÇÃO DE BUSCA DE CHAMADO COM DATA INICIAL E DATA FINAL
    public function gerarRelatorio($dataInicial, $dataFinal, $secao) {
        $this->sql = $this->query("SELECT * FROM chamado, ordem_de_servico, usuarios
                                    WHERE chamado.id_chamado = ordem_de_servico.id_ordem_servico
                                    AND ordem_de_servico.id_usuario = usuarios.id_usuario
                                    AND parecer != ''
                                    AND chamado.secao_chamado = '$secao'
                                    AND chamado.data BETWEEN ('$dataInicial') AND ('$dataFinal')
                                    ORDER BY chamado.id_chamado");
    }
    
    // FUNÇÃO DE BUSCA DE CHAMADO COM DATA INICIAL E DATA FINAL
    public function countRelatorio($dataInicial, $dataFinal, $secao) {
        $this->sql = $this->query("SELECT count(*) AS total FROM chamado, ordem_de_servico, usuarios
                                    WHERE chamado.id_chamado = ordem_de_servico.id_ordem_servico
                                    AND ordem_de_servico.id_usuario = usuarios.id_usuario
                                    AND parecer != ''
                                    AND chamado.secao_chamado = '$secao'
                                    AND chamado.data BETWEEN ('$dataInicial') AND ('$dataFinal')");
    }

    public function selectTodosChamado($secao, $pg, $total ) {
        $this->sql = $this->query("SELECT chamado.id_chamado, chamado.tipo, chamado.servico, chamado.assunto, chamado.militar_chamado, chamado.chamado_secao, chamado.data, chamado.hora, chamado.texto, chamado.status, usuarios.secao FROM chamado, ordem_de_servico, usuarios
                                    WHERE chamado.id_chamado = ordem_de_servico.id_ordem_servico
                                    AND ordem_de_servico.id_usuario = usuarios.id_usuario
                                    AND chamado.secao_chamado = '$secao'
                                    ORDER BY chamado.id_chamado DESC LIMIT $pg, $total");
    }

    // SELECIONA TODOS OS CHAMADOS DE UMA SEÇÃO
    public function selectTodosChamadoSecao($pg, $total) {
        $this->sql = $this->query("SELECT chamado.id_chamado, chamado.tipo, chamado.servico, chamado.assunto, chamado.data, chamado.hora, chamado.texto, chamado.parecer, chamado.status, usuarios.secao FROM chamado, ordem_de_servico, usuarios
                                    WHERE chamado.id_chamado = ordem_de_servico.id_ordem_servico
                                    AND ordem_de_servico.id_usuario = usuarios.id_usuario
                                    AND chamado.chamado_secao = '$this->secao'
                                    ORDER BY chamado.id_chamado DESC LIMIT $pg, $total");
    }

    // SELECIONA AS RESPOSTA COM O STATUS
    public function selectResposta() {
        $this->sql = $this->query("SELECT resposta.id_resposta, resposta.id_chamado, resposta.resposta, resposta.resposta_secao, resposta.data, resposta.hora
                                FROM chamado, resposta
                                WHERE chamado.id_chamado = resposta.id_chamado
                                AND resposta.id_chamado = '$this->valueId'
                                ORDER BY resposta.id_resposta DESC");
    }

    // METODO QUE SELECIONA UM CHAMADO ESPECIFICO
    public function selectChamEsp() {
        $this->sql = $this->query("SELECT * FROM chamado, ordem_de_servico, usuarios
                                WHERE chamado.id_chamado = ordem_de_servico.id_ordem_servico
                                AND ordem_de_servico.id_usuario = usuarios.id_usuario
                                AND chamado.chamado_secao = '$this->secao' AND chamado.status = '1'
                                ORDER BY chamado.id_chamado");
    }

    // SELECIONA CHAMADO UNICO
    public function selectChamadoUnico() {
        $this->sql = $this->query("SELECT chamado.id_chamado, chamado.tipo, chamado.servico, chamado.assunto, chamado.data, chamado.hora, chamado.texto, chamado.parecer, chamado.status, usuarios.secao FROM chamado, ordem_de_servico, usuarios
                                WHERE chamado.id_chamado = ordem_de_servico.id_ordem_servico
                                AND ordem_de_servico.id_usuario = usuarios.id_usuario
                                AND chamado.id_chamado = '$this->valueId'
                                AND usuarios.secao = '$this->secao'
                                ORDER BY chamado.id_chamado");
    }

    // SELECIONA TODOS OS CHAMADOS COM O ID PASSADO
    public function selectChamadoUnicoTodos() {
        $this->sql = $this->query("SELECT * FROM chamado, ordem_de_servico, usuarios
                                WHERE chamado.id_chamado = ordem_de_servico.id_ordem_servico
                                AND ordem_de_servico.id_usuario = usuarios.id_usuario
                                AND chamado.id_chamado = '$this->valueId'
                                ORDER BY chamado.id_chamado");
    }

    public function selectLogin() {
        $this->sql = $this->query("SELECT * FROM $this->table WHERE login = '$this->login' AND senha = '$this->senha' AND status = 1");
    }

    //METODO QUE BUSCA O ULTIMO CODIGO CADASTRADO NA TABELA
    public function getLastId() {
        $this->sql = "SELECT $this->campoTable FROM $this->table ORDER BY $this->campoTable DESC LIMIT 1";
        $this->qr = $this->query($this->sql);
        $this->data = $this->listQr($this->qr);
        return $this->data["$this->campoTable"];
    }

    //METODO QUE VERIFICA SE EXISTEM VALORES DUPLICADOS, RETORNA 1 EXISTE - RETORNA 0 NAO EXISTE
    public function getDadosDuplicados($valorPesquisado) {
        $this->sql = "SELECT $this->campoTable FROM $this->table WHERE $this->campoTable = '$valorPesquisado'";
        $this->qr = self::execSql($this->sql);
        return self::countData($this->qr);
    }

    //METODO QUE BUSCA O TOTAL DE DADOS CADASTRADO EM UMA QUERY
    public function getTotalData() {
        $this->sql = "SELECT $this->campoTable FROM $this->table ORDER BY $this->campoTable";
        $this->qr = self::execSql($this->sql);
        return self::countData($this->qr);
    }

    //METODO UTILIZADO PARA LISTAR REGISTROS DO BANCO DE DADOS
    public function listQr($sql) {
        $this->data = @mysql_fetch_assoc($sql);
        return $this->data;
    }

    function formataData($data) {
        list($ano, $mes, $dia) = explode("-", $data);
        return $dia . "/" . $mes . "/" . $ano;
    }

    function formata_data_db($data) {
        if (($data[4] != '-') || ($data[7] != '-')) {
            list($dia, $mes, $ano) = explode("/", $data);
            return $ano . "-" . $mes . "-" . $dia;
        } else {
            return $data;
        }
    }

    function fetch_object() {
        return @mysql_fetch_object($this->result);
    }

    function registros_retornados() {
        $quantLinhas = @mysql_num_rows($this->result);
        return $quantLinhas;
    }

    function registrosAfetados() {
        $quantLinhas = @mysql_affected_rows($this->result);
        return $quantLinhas;
    }

    // TIRA TODOS OS CARACTERES QUE NÃO SEJA NUMEROS
    function somenteNumeros($str) {
        return preg_replace("/[^0-9]/", "", $str);
    }

    function fetch_array() {
        return @mysql_fetch_array($this->result);
    }

    function buscaOM() {
        $busca = new ManipulateData();

        $busca->setTable("om");
        $busca->selectGeral();

        $resultado = $busca->fetch_object();
        $om = $resultado->nome_om;
        $cidade = $resultado->cidade;
        $secao = $resultado->secao;
        
        $obj = array("om" => $om
            , "cidade" => $cidade
            , "secao" => $secao);

        return $obj;
    }

}

?>
