<?php
require_once '../models/ManipulateDataDAO.php';
require_once '../models/LoginIn.php';

/**************************************************
 * CONTROLE DE LOGIN, RECEBE OS DADOS DO FORMULARIO
 * E ENVIA PARA A CLASSE FAZER A AUTENTICAÇÃo
 **************************************************/

$logar = new LoginIn();

$login = trim(addslashes($_POST['login']));
$senha = trim(addslashes($_POST['senha']));
$senha = md5($senha); // criptografando a senha de login

session_start();
$logar->autentica($login, $senha);
?>