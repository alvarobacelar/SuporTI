<?php

/*
 * controlle para marcar o chamado como lida
 * criado em: 19-09-13
 */
require_once ("../../smarty/config/config.php");
require_once ("../models/ManipulateDataDAO.php");

$id = addslashes($_GET["id"]);

$fecharChamado = new ManipulateData();
session_start();

if ($id != "") {

    $fecharChamado->setTable("chamado");
    $fecharChamado->setCamposBanco("status = 0");
    $fecharChamado->setFieldId("id_chamado");
    $fecharChamado->setValueId($id);
    $fecharChamado->update();

    $_SESSION['fecharChamado'] = "OK";
    header("location: ../../index.php");
    exit ();
} else {

    $_SESSION["fecharChamado"] = "NAO";
    header("location: ../../index.php");
    exit ();
}
?>
