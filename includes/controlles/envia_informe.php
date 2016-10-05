<?php

require_once ("../models/ManipulateDataDAO.php");

/*
 * ENVIAR INFORME PARA TODOS OS USUARIOS
 * DATA CRIAÇÃO: 26/11/2013
 */
session_start();

$informacao = addslashes($_POST["informe"]);
$data = date("Y-m-d");
$hora = date("H:i:s");
$ip = $_SERVER["REMOTE_ADDR"];
$status = 1;

$informe = new ManipulateData();

// so realiza o cadastro no banco de dados se receber algum parametro
if ($informacao != "") {
    $informe->setTable("informacao");
    $informe->setCamposBanco("informe, data, hora, ip, status");
    $informe->setDados("'$informacao', '$data', '$hora', '$ip', '$status'");

    $informe->insert();
    $_SESSION["informe"] = "OK";
    header("Location: ../../informativo.php");
    exit();
} else {
    $_SESSION["informe"] = "NAO";
    header("Location: ../../informativo.php");
    exit();
}
