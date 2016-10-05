<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once ("../../smarty/config/config.php");
require_once ("../models/ManipulateDataDAO.php");

$id = addslashes($_GET["id"]);
$parecerTexto = addslashes($_POST["tecnico"]);
$situacao = addslashes($_POST["situacao"]);

if ($situacao != 0) {

    session_start();

    $parecerTecnico = new ManipulateData();
    if ($parecerTecnico != "") {

        $parecerTecnico->setTable("chamado");
        $parecerTecnico->setCamposBanco("parecer = '$parecerTexto', situacao = '$situacao', status = 0");
        $parecerTecnico->setFieldId("id_chamado");
        $parecerTecnico->setValueId($id);
        $parecerTecnico->update();

        $_SESSION['fecharChamado'] = "OK";
        header("Location: /");
        exit ();
    } else {
        $_SESSION["fecharChamado"] = "NAO";
        header("Location: /erro404.php");
        exit ();
    }
} else {
    $fecharChamado = new ManipulateData();
    session_start();

    if ($id != "") {

        $fecharChamado->setTable("chamado");
        $fecharChamado->setCamposBanco("parecer = '', situacao = '$solucao', status = 0");
        $fecharChamado->setFieldId("id_chamado");
        $fecharChamado->setValueId($id);
        $fecharChamado->update();

        $_SESSION['fecharChamado'] = "OK";
        header("Location: index.php");
        exit ();
    } else {

        $_SESSION["fecharChamado"] = "NAO";
        header("Location: index.php");
        exit ();
    }
}
?>
