<?php
require_once ("../../smarty/config/config.php");
require_once ("../models/ManipulateDataDAO.php");


$dataInicial = addslashes($_POST["data1"]);
$dataFinal = addslashes($_POST["data2"]);

$relatorio = new ManipulateData();
$relatorio->gerarRelatorio($dataInicial, $dataFinal);
$rel[] = null;
while ($rel = $relatorio->fetch_object()) {
     $codificado = serialize($rel); //serializo
     $codificado = urlencode($codificado); // após serializado, passo a variavel por dentro de um urlencode
}
session_start();
$_SESSION["relatorio"] = "OK";
header("Location: ../../gerarRelatorio.php?codificado=$codificado");
exit ();
?>
