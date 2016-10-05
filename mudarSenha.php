<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once ("smarty/config/config.php");
require_once ("includes/funcoes/verifica.php");
require_once ("includes/models/ManipulateDataDAO.php");

if ($estaLogado == "SIM") {


    $nome = $_SESSION["nome"];

    if (isset ($_SESSION["mudarSenha"])){
        $session = $_SESSION["mudarSenha"];
        if ($session != "SIM"){
            $smarty->assign("senha", "Erro ao mudar a senha, senha atual não confere");
        } else {
            $smarty->assign("senha", "Senha alterada");
        }
    } else {
        $smarty->assign("senha", "");
    }
    unset ($_SESSION["mudarSenha"]);

    $smarty->assign("titulo", TITULO." - Mudar Senha");
    $smarty->assign("local", "<a class='localizacao' href='index.php'>Home</a> > Mudar senha");
    $smarty->assign("nivel", $nivel);
    $smarty->assign("usuario", $nome);
    $smarty->assign("nivelUsuario", $_SESSION["nivelSupervisor"]);
    $smarty->assign("conteudo", 'paginas/mudar_senha.tpl');
    $smarty->display("HTML.tpl");
}
?>
