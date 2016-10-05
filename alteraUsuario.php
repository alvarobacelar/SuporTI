<?php

require_once ("smarty/config/config.php");
require_once ("includes/funcoes/verifica.php");
require_once './includes/models/ManipulateDataDAO.php';

// SOMENTE USUARIO LOGADO ACESSA A ESSA PAGINA
if ($estaLogado == "SIM") {

    // APENAS ADMINISTRADOR TEM ACESSO A ESSA PAGINA
    if ($_SESSION['nivel'] == "Administrador" && $_SESSION["nivelSupervisor"] == "NAO") {

        if (isset($_GET["id"])) { // se existir a variável no GET, executa a pagina de alteração
            $id = $_GET["id"];

            $alterar = new ManipulateData();
            $alterar->setTable("usuarios");
            $alterar->setValueId("id_usuario");
            $alterar->setFieldId($id);
            $alterar->selectUsuarioAltera(); // fazendo a busca

            $resultado = $alterar->fetch_object();

            $smarty->assign("alter", $resultado); // colocando em uma variavel para o template

            $smarty->assign("titulo", TITULO . " - Alterar Usuario");
            $smarty->assign("local", "<a class='localizacao' href='index.php'>Home</a> > Alterar usuário");
            $smarty->assign("nivel", $nivel);
            $smarty->assign("nivelUsuario", $_SESSION["nivelSupervisor"]);
            $smarty->assign("usuario", $_SESSION['nome']);
            $smarty->assign("conteudo", "paginas/alterar_usuario.tpl");
            $smarty->display("HTML.tpl");
        } else { // se não existir a variavel no get, executa a pagina de erro!
            header("location: erro404.php");
            exit();
        }
    }
}
