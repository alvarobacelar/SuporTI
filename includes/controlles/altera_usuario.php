<?php

require_once '../models/ManipulateDataDAO.php';
session_start();

$id = addslashes($_POST["id"]);
$nome = addslashes($_POST["nome"]);
$login = addslashes($_POST["login"]);
$secao = addslashes($_POST["secao"]);
$nivel = addslashes($_POST["nivel"]);

$altera = new ManipulateData();

$altera->setTable("usuarios");
$altera->setCamposBanco("nome = '$nome', login = '$login', secao = '$secao', nivel = '$nivel'");
$altera->setFieldId("id_usuario");
$altera->setValueId($id);

if ($id != "") {
    $altera->update();
    $_SESSION["cadastro"] = "alterado";
    header("location: ../../cadastrarNovo.php");
} else {
    $_SESSION["cadastro"] = "NAO";
    header("location: ../../cadastrarNovo.php");
}