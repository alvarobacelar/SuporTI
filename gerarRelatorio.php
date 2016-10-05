<?php

require_once ("smarty/config/config.php");
require_once ("includes/funcoes/verifica.php");

// SOMENTE USUARIO LOGADO ACESSA A ESSA PAGINA
if ($estaLogado == "SIM") {

    // APENAS ADMINISTRADOR TEM ACESSO A ESSA PAGINA
    if ($_SESSION['nivel'] == "Administrador" && $_SESSION["nivelSupervisor"] == "NAO" || $_SESSION['nivel'] == "Supervisor") {

        $smarty->assign("titulo", TITULO." - Gerar Relatorio");
        $smarty->assign("local", "<a class='localizacao' href='index.php'>Home</a> > Gerar relatório");
        $smarty->assign("nivel", $nivel);
        $smarty->assign("usuario", $_SESSION["nome"]);
        $smarty->assign("nivelUsuario", $_SESSION["nivelSupervisor"]);
        $smarty->assign("conteudo", 'paginas/gerar_relatorio.tpl');
        $smarty->display("HTML.tpl");
    } else {
        header("Location: index.php");
    }
}
?>
