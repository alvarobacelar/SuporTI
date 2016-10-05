<?php

require_once ("smarty/config/config.php");
require_once ("includes/funcoes/verifica.php");

// SOMENTE USUARIO LOGADO ACESSA A ESSA PAGINA
if ($estaLogado == "SIM") {

    // APENAS ADMINISTRADOR E SUPERVISOR TEM ACESSO A ESSA PAGINA
    if ($_SESSION['nivel'] == "Administrador" || $_SESSION['nivel'] == "Supervisor") {

        if (isset($_GET["id"])) { // se não existir o a variavel, mostrará a pagina de erro

            $idTecnico = addslashes($_GET['id']);

            $smarty->assign("id", $idTecnico);
            $smarty->assign("titulo", TITULO . "Cadastrar Novo");
            $smarty->assign("local", "<a class='localizacao' href='index.php'>Home</a> > Parecer Técnico");
            $smarty->assign("nivel", $nivel);
            $smarty->assign("usuario", $_SESSION['nome']);
            $smarty->assign("nivelUsuario", $_SESSION["nivelSupervisor"]);
            $smarty->assign("conteudo", "paginas/parecer-tecnico.tpl");
            $smarty->display("HTML.tpl");
        } else {
            header("location: erro404.php");
        }
    } else {

        header("location: index.php");
    }
}
?>
