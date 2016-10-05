<?php
require_once ("../../smarty/config/config.php");
require_once ("../models/ManipulateDataDAO.php");

$id_visualizacao = addslashes($_GET["id"]);

$visualiza = new ManipulateData();
$secao = $_SESSION["secao"];

$visualiza->setValueId($id_visualizacao);
$visualiza->setSecao($secao);



?>
