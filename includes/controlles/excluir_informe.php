<?php

require_once ("../models/ManipulateDataDAO.php");
session_start();

$id = addslashes($_GET["id"]);
$confirm = addslashes($_GET["confirm"]);

$deletaInfor = new ManipulateData();

// so deleta se passar pelo a funcao java script
if ($confirm == "ok") {
    $deletaInfor->setTable("informacao");
    $deletaInfor->setCampoTable("id_informacao");
    $deletaInfor->setValueId($id);
    $deletaInfor->deleteInforme();

    $_SESSION["informe"] = "APAGADO";
    header("location: ../../informativo.php");
    exit();
} else {
    $_SESSION["informe"] = "NAOAPAGADO";
    header("Location: ../../informativo.php");
    exit();
}


