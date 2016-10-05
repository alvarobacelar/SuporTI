<?php
//require_once ("../../smarty/config/config.php");
require_once ("../models/ManipulateDataDAO.php");
session_start();

$id = addslashes($_GET["idUsuario"]);

$reseta = new ManipulateData(); // instanciando o objeto

// setando os valores correspondentes para mudar a senha no banco de dados
$reseta->setTable("usuarios");
$reseta->setFieldId("id_usuario");
$reseta->setValueId($id);

// seleciona o usuario escolhido pelo usuario para pegar seu login e resetar a senha.
$reseta->query("SELECT * FROM usuarios WHERE id_usuario = '$id'");
$usuario = $reseta->fetch_object();
$senha = $usuario->login;
$senhaCrip = md5($senha);

$reseta->setCamposBanco("senha = '$senhaCrip'"); 
$reseta->update(); // função que faz o update no banco de dados

if ($reseta->getStatus() == "Alterado com Sucesso"){
    $_SESSION["reseta"] = "OK";
    $_SESSION["senhaResetada"] = $id;
    header("Location: ../../usuariosCadastrados.php");
    exit();
} else {
    $_SESSION["reseta"] = "NAO";
    header("Location: ../../usuariosCadastrados.php");
    exit();
}
