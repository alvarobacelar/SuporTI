<?php

/*
 * ESSE ARQUIVO PHP MUDA A SENHA DO USUARIO
 *
 */
//require_once ("../../smarty/config/config.php");
require_once ("../models/ManipulateDataDAO.php");

session_start();
$senhaAtual = addslashes($_POST["senhaAtual"]);
$novaSenha = addslashes($_POST["novaSenha"]);
$novaSenha2 = addslashes($_POST["novaSenha2"]);

$usuario = $_SESSION["login"];
$senhaAtual = md5($senhaAtual);

$mudarSenha = new ManipulateData();
$mudarSenha->mudarSenhaSelect($usuario, $senhaAtual);
$retorno = $mudarSenha->fetch_object();
$valor = $retorno->usuario;

if ($valor != 0 && $novaSenha == $novaSenha2) {
    $senha = md5($novaSenha); // criptografando a nova senha
    $updateSenha = new ManipulateData();
    $updateSenha->setTable("usuarios");
    $updateSenha->setCamposBanco("senha = '$senha'"); // setando os valores a serem modificados no bando de dados
    $updateSenha->setFieldId("login");
    $updateSenha->setValueId($usuario); // setando o valor a ser procurado no bando de dados
    $updateSenha->update(); // depois de setar todos os atributos do metodo update chamamos para que seja feita a mudança da senha

    $_SESSION["mudarSenha"] = "SIM";
    header("Location: ../funcoes/logOut.php");
    exit ();

// se não encontrar nenhuma senha, é retornado uma session dizendo que a senha passado pelo o usuario não confere
} else {
    $_SESSION["mudarSenha"] = "NAO";
    header("Location: ../../mudarSenha.php");
    exit ();
}
?>
