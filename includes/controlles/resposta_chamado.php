<?php

/*
 * cadastra resposta do chamado no banco da dados
 * @author: Alvaro Bacelar
 * Data criação: 22-09-13
 */
//require_once ("../../smarty/config/config.php");
require_once ("../models/ManipulateDataDAO.php");
session_start();
// SETANDO OS VALORES PARA SEREM CADASTRADOS NO BANCO DE DADOS
$id_chamado = addslashes($_GET["id"]);
$texto = addslashes($_POST["texto"]);
$secao = $_SESSION["secao"];
$status = 1; // STATUS USUARIO ATIVO
$data = date("Y-m-d");
$hora = date("H:i:s");
$ip = $_SERVER["REMOTE_ADDR"];
$status = 1;

$resposta = new ManipulateData();
$resposta->setTable("resposta");
$resposta->setCamposBanco("id_chamado, resposta, resposta_secao, data, hora, ip, status");
$resposta->setDados("'$id_chamado', '$texto', '$secao', '$data', '$hora', '$ip', '$status'");

// abrindo o chamado ao responder 
$chamadoAtivar = new ManipulateData();
$chamadoAtivar->setTable("chamado");
$chamadoAtivar->setCamposBanco("status='1'");
$chamadoAtivar->setFieldId("id_chamado");
$chamadoAtivar->setValueId("$id_chamado");
$chamadoAtivar->update();


if ($texto != "<br>") {
    $resposta->insert(); // SÓ INSERE OS DADOS SE FOR PASSADO ALGUM VALOR
    $_SESSION["resposta"] = "OK";
    header("Location: ../../allChamados.php?id=$id_chamado");
    exit ();
} else {
    $_SESSION["resposta"] = "NAO";
    header("Location: ../../index.php");
    exit ();
}


