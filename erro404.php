<?php

require_once ("smarty/config/config.php");
require_once ("includes/funcoes/verifica.php");

if ($estaLogado == "SIM") {

    $nome = $_SESSION["nome"];

    $smarty->assign("titulo", TITULO." - ERRO 404");
    $smarty->assign("local", "<a class='localizacao' href='/'>Home</a> > ERRO!");
    $smarty->assign("nivel", $nivel);
    $smarty->assign("usuario", $nome);
    $smarty->assign("nivelUsuario", $_SESSION["nivelSupervisor"]);
    $smarty->assign("conteudo", 'paginas/erro404.tpl');
    $smarty->display("HTML.tpl");
}

?>
