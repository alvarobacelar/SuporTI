<?php

/* 
 * esse arquivo exclui as respostas
 * 
 */
require_once ("../../smarty/config/config.php");
require_once ("../models/ManipulateDataDAO.php");

session_start();
$id = mysql_real_escape_string($_GET["id"]);
$idChamadoExcluir = mysql_real_escape_string($_GET["idChamado"]);
$secao = $_SESSION['secao'];

$deletaResposta = new ManipulateData();
$deletaResposta->setTable("resposta");
$deletaResposta->setCampoTable("id_resposta");
$deletaResposta->setValueId($id);
$deletaResposta->setSecao($secao);

// verificando de o usuario poderar excluir a resposta
$deletaResposta->query("SELECT * FROM resposta WHERE id_resposta = '$id'");
$resposta = $deletaResposta->fetch_object();
$secaoExcluir = $resposta->resposta_secao;

$deletaResposta->delete();

if ($secao == $secaoExcluir){
    $_SESSION["apagado"] = "OK";
    
    header("Location: ../../allChamados.php?id=$idChamadoExcluir");
} else {
    $_SESSION["apagado"] = "NAO";
    header("Location: ../../allChamados.php?id=$idChamadoExcluir");

}
