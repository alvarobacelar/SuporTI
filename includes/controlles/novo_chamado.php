<?php
/* 
 * ARQUIVO CONTROLLE PARA RECEBEBENDO DE DADOS DO FORMULARIO novo chamado
 * CRIADO EM 17-09-13
 * AUTOR ALVARO BACELAR
 */
session_start();
//require_once ("../../smarty/config/config.php");
require_once ("../models/ManipulateDataDAO.php");

$tipo = addslashes($_POST["tipo"]);
$servico = addslashes($_POST["servico"]);
$assunto = addslashes($_POST["assunto"]);
$militar = addslashes($_POST["militar"]);
$texto = addslashes($_POST["texto"]);
$secao = addslashes($_POST["secao"]);
$chamadoSecao = addslashes($_POST["chamadoSecao"]);
$status = 1; // STATUS ABERTO
$data = date("Y-m-d");
$hora = date("H:i:s");
$ip = $_SERVER["REMOTE_ADDR"];

$chamado = new ManipulateData();
$ordemServico = new ManipulateData();

if ($tipo != "" && $servico != "" && $assunto != "" && $militar != "" && $texto != "<br>"){ // SE O FORMULARIO NÃO ESTIVER VAZIO FAZ A INSERÇÃO NO BANCO DE DADOS

    $chamado->setTable("chamado"); // SETANDO A TABELA
    // SETANDO OS VALORES CORRESPONDENTE AO BANCO DE DADOS
    $chamado->setCamposBanco("tipo, servico, assunto, militar_chamado, chamado_secao, texto, data, hora, ip, status, secao_chamado");
    // SETANDO AS VARIAVEIS COM OS PARÂMETROS RECEBEIDOS DO FORMULARIO
    $chamado->setDados("'$tipo', '$servico', '$assunto', '$militar', '$chamadoSecao', '$texto', '$data', '$hora', '$ip', '$status', '$secao'");
    // CHAMANDO A FUNCAO DE INSERÇÃO DEPOIS DE JA TER RECEBIDO TODOS OS PAREMETROS NECESSARIOS
    $chamado->insert();

    // fazendo busca do ultimo chamado cadastrado para inserir uma ordem de servico
    $chamado->query("SELECT id_chamado FROM chamado ORDER BY id_chamado DESC LIMIT 1");
    $chamado->setCampoTable("id_chamado");
    $assos = $chamado->getLastId();
    $id_chamado = $assos;
    $id_usuario = $_SESSION["usuarioID"];
    if (!isset($$_SESSION["usuarioID"])){
        $id_usuario = 41;
    }

    // fazendo a inserção de uma ordem de servico
    $ordemServico->setTable("ordem_de_servico");
    $ordemServico->setCamposBanco("id_usuario, id_chamado");
    $ordemServico->setDados("'$id_usuario', '$id_chamado'");
    $ordemServico->insert();
    
    $_SESSION["chamado"] = "OK";
    header("Location: ../../novoChamado.php");
    exit ();
} else { // caso não seja passado nenhum paremetro aparecerá uma mensagem de erro
    $_SESSION["chamado"] = "NAO";
    header("Location: ../../novoChamado.php");
    exit ();
}

?>


