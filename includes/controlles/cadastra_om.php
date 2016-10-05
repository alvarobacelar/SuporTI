<?php

require_once ("../../smarty/config/config.php");
require_once ("../models/ManipulateDataDAO.php");

session_start();

$nomeOM = addslashes($_POST["om"]);
$cidade = addslashes($_POST["cidade"]);
$secao = addslashes($_POST["secao"]);

$foto = $_FILES['imagem']['name'];

$foto = str_replace(" ", "_", $foto);
$foto = str_replace("á", "a", $foto);
$foto = str_replace("à", "a", $foto);
$foto = str_replace("ã", "a", $foto);
$foto = str_replace("â", "a", $foto);
$foto = str_replace("é", "e", $foto);
$foto = str_replace("è", "e", $foto);
$foto = str_replace("ê", "e", $foto);
$foto = str_replace("í", "i", $foto);
$foto = str_replace("ì", "i", $foto);
$foto = str_replace("ó", "o", $foto);
$foto = str_replace("ò", "o", $foto);
$foto = str_replace("õ", "o", $foto);
$foto = str_replace("ô", "o", $foto);
$foto = str_replace("ç", "c", $foto);
$foto = str_replace("Ã", "a", $foto);
$foto = str_replace("Â", "a", $foto);
$foto = str_replace("À", "a", $foto);
$foto = str_replace("Á", "a", $foto);
$foto = str_replace("É", "e", $foto);
$foto = str_replace("È", "e", $foto);
$foto = str_replace("Ê", "e", $foto);
$foto = str_replace("Í", "i", $foto);
$foto = str_replace("Ì", "i", $foto);
$foto = str_replace("Ô", "o", $foto);
$foto = str_replace("Ó", "o", $foto);
$foto = str_replace("Ò", "o", $foto);
$foto = str_replace("Õ", "o", $foto);
$foto = str_replace("Ç", "c", $foto);
$foto = str_replace("%", "-", $foto);

$foto = strtolower($foto);
move_uploaded_file($_FILES['imagem']['tmp_name'], "imagens/".$foto);

$foto = "imagens/".$foto;

$cadOM = new ManipulateData();

$cadOM->setTable("om");
$cadOM->count2(); // verifica se há OM cadastra
$total = $cadOM->fetch_object();
$totalCont = $total->total;

// se não exixtir OM cadastrada, realiza o cadastro
if ($totalCont != 1) {
    if ($nomeOM != "" && $cidade != "" && $secao != "") {
        $cadOM->setCamposBanco("nome_om, cidade, secao_res, foto");
        $cadOM->setDados("'$nomeOM', '$cidade', '$secao', '$foto'");

        $cadOM->insert();
        $_SESSION["cadOM"] = "OK";
        header("location: ../../cadastrarOM.php");
        exit();
    } else {
        $_SESSION["cadOM"] = "NAO";
        header("location: ../../cadastrarOM.php");
        exit();
    }
} else { // se houver OM já cadastrada, ele altera no banco de dados
    $cadOM->setCamposBanco("nome_om = '$nomeOM', cidade = '$cidade', secao_res = '$secao', foto = '$foto'");
    $cadOM->setFieldId("id");
    $cadOM->setValueId('1');
    $cadOM->update();

    $_SESSION["cadOM"] = "OK";
    header("location: ../../cadastrarOM.php");
}

