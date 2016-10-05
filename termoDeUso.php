<?php

require_once ("smarty/config/config.php");


$smarty->assign("titulo", TITULO." - Termo de Uso");
$smarty->assign("local", "<a class='localizacao' href='index.php'>Home</a> > Termo de Uso");
$smarty->assign("conteudo", 'paginas/termo_de_uso.tpl');
$smarty->assign("nivelUsuario", $_SESSION["nivelSupervisor"]);
$smarty->display("HTML.tpl");
?>
