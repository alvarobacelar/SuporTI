<?php

require_once ("smarty/config/config.php");
require_once ("includes/funcoes/verifica.php");

// SOMENTE USUARIO LOGADO ACESSA A ESSA PAGINA
if ($estaLogado == "SIM") {

    // APENAS ADMINISTRADOR TEM ACESSO A ESSA PAGINA
    if ($_SESSION['nivel'] == "Administrador" && $_SESSION["nivelSupervisor"] == "NAO") {

        // VEIRIFICAÇÃO DE CADASTRO DE USUARIO PARA UM POSSIVEL FREDBECK
        if (isset($_SESSION['cadastro'])) {
            $cadastra = $_SESSION['cadastro'];
            if ($cadastra == "OK") {
                $smarty->assign("sucesso", "<div class='text-success'><strong>Usuário cadastrado com sucesso!</strong></div>");
            } else
            if ($cadastra == "alterado") {
                $smarty->assign("sucesso", "<div class='text-success'><strong>Usuário alterado com sucesso!</strong></div>");
            } else {

                $smarty->assign("sucesso", "<div class='text-error'><strong>Usuário não cadastrado</strong></div>");
            }
        } else {
            $smarty->assign("sucesso", "&nbsp;");
        }
        unset($_SESSION["cadastro"]);

        $smarty->assign("titulo", TITULO . " - Cadastrar Novo");
        $smarty->assign("local", "<a class='localizacao' href='index.php'>Home</a> > Cadastrar usuários");
        $smarty->assign("nivel", $nivel);
        $smarty->assign("usuario", $_SESSION['nome']);
        $smarty->assign("nivelUsuario", $_SESSION["nivelSupervisor"]);
        $smarty->assign("conteudo", "paginas/cadastra_novo.tpl");
        $smarty->display("HTML.tpl");
    } else {
        header("location: index.php");
    }
}
?>
