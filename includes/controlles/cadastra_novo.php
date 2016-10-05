<?php
require_once ("../models/ManipulateDataDAO.php");

/*
 * CADASTAR NOVO USUARIO
 * DATA CRIAÇÃO: 30/06/2013
 */

$nome = addslashes($_POST['nome']);
$login = addslashes($_POST['login']);
$nivel = addslashes($_POST['nivel']);
$senha = addslashes($_POST['senha']);
$senha2 = addslashes($_POST['senha2']);
$secao = addslashes($_POST['secao']);
$status = 1; // STATUS USUARIO ATIVO
$data = date("Y-m-d");
$hora = date("H:i:s");
$ip = $_SERVER["REMOTE_ADDR"];

$cadastra = new ManipulateData();
session_start();

if ($senha == $senha2 && $nome != "" && login != "" && $senha != "" && $secao != ""){
    $senha = md5($senha); // criptografando a senha

    $cadastra->setTable("usuarios");
    $cadastra->setCamposBanco("nome, login, senha, secao, data, hora, ip, status, nivel");
    // RECEBENDO OS PARÂMETROS DO FORMULARIO E PASSANDO PARA O BANCO DE DADOS
    $cadastra->setDados("'$nome', '$login', '$senha', '$secao', '$data', '$hora', '$ip', '$status', '$nivel'");

    $cadastra->insert(); // inserindo os dados no banco de dados
    $_SESSION['cadastro'] = "OK";
    header("Location: ../../cadastrarNovo.php");
    exit();
} else {
    $_SESSION['cadastro'] = "NAO";
    header("Location: ../../cadastrarNovo.php");
    exit();
}

?>
