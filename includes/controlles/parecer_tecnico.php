<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once ("../models/ManipulateDataDAO.php");

$id = addslashes($_POST["id"]);
$parecerTexto = addslashes($_POST["tecnico"]);
$solucao = addslashes($_POST["situacao"]);

session_start();

$parecerTecnico = new ManipulateData();
if ($parecerTecnico != "" && $id != "") {

    $parecerTecnico->setTable("chamado");
    $parecerTecnico->setCamposBanco("parecer = '$parecerTexto', situacao = '$solucao', status = 0");
    $parecerTecnico->setFieldId("id_chamado");
    $parecerTecnico->setValueId($id);
    $parecerTecnico->update();

    $_SESSION['fecharChamado'] = "OK";
    header("Location: ../../index.php");
    exit ();

} else {
    $_SESSION["fecharChamado"] = "NAO";
    header("Location: ../../erro404.php");
    exit ();
}
?>
