<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
require_once ("smarty/config/config.php");

// VERIFICA SE O CADASTRO FOI REALIZADO PARA MOSTRAR O AVISO
if (isset($_SESSION["chamado"])) {
    $chamado = $_SESSION["chamado"];
    if ($chamado == "OK") {
        $smarty->assign("aviso", "<div class='text-success'><strong>Chamado realizado com sucesso, aguarde o retorno </strong></div>");
    } else {
        $smarty->assign("aviso", "<div class='text-error'><strong>Chamado não realizado. Algum parâmetro não foi passado </strong></div>");
    }
} else {
    $smarty->assign("aviso", "&nbsp;");
}
unset($_SESSION["chamado"]);

$smarty->assign("local", "<a class='localizacao' href='index.php'>Home</a> > Novo chamado Pel Com");
$smarty->assign("titulo", TITULO . " - Novo Chamado Pel Com");
$smarty->assign("conteudo", 'paginas/novaSolicitacaoPelCom.tpl');
$smarty->display("HTML.tpl");


