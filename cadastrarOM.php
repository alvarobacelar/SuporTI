<?php

require_once ("smarty/config/config.php");
require_once ("includes/funcoes/verifica.php");
require_once './includes/models/ManipulateDataDAO.php';

// SOMENTE USUARIO LOGADO ACESSA A ESSA PAGINA
if ($estaLogado == "SIM") {

// APENAS ADMINISTRADOR TEM ACESSO A ESSA PAGINA
    if ($_SESSION['nivel'] == "Administrador" && $_SESSION["nivelSupervisor"] == "NAO") {
        
        $busca = new ManipulateData();

        $busca->setTable("om");
        $busca->selectGeral();

        $resultado = $busca->fetch_object();
        $smarty->assign("om", $resultado);
        
//        $om = $resultado->nome_om;
//        $cidade = $resultado->cidade;
//        $secao = $resultado->secao;

        $smarty->assign("titulo", TITULO . " - Cadastrar OM");
        $smarty->assign("local", "<a class='localizacao' href='index.php'>Home</a> > Cadastrar OM");
        $smarty->assign("nivel", $nivel);
        $smarty->assign("usuario", $_SESSION['nome']);
        $smarty->assign("nivelUsuario", $_SESSION["nivelSupervisor"]);
        $smarty->assign("conteudo", "paginas/cadastrar_om.tpl");
        $smarty->display("HTML.tpl");
    } else {
        header("location: index.php");
    }
}

