<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once ("smarty/config/config.php");
require_once ("includes/funcoes/verifica.php");

if ($estaLogado == "SIM") {

    if ($_SESSION["nivel"] != "Administrador" ) {

        $nome = $_SESSION["nome"];

        // VERIFICA SE O CADASTRO FOI REALIZADO PARA MOSTRAR O AVISO
        if (isset($_SESSION["chamado"])) {
            $chamado = $_SESSION["chamado"];
            if ($chamado == "OK") {
                $smarty->assign("aviso", "<div class='alert alert-success' role='alert'><strong>Chamado realizado com sucesso, aguarde o retorno da seção responsável</strong></div>");
            } else {
                $smarty->assign("aviso", "<div class='alert alert-danger' role='alert'><strong>Chamado não realizado. Algum parâmetro não foi passado </strong></div>");
            }
        } else {
            $smarty->assign("aviso", "&nbsp;");
        }
        unset($_SESSION["chamado"]);

        $smarty->assign("titulo", TITULO . " - Novo Chamado");
        $smarty->assign("local", "<a class='localizacao' href='index.php'>Home</a> > Novo chamado");
        $smarty->assign("nivel", $nivel);
        $smarty->assign("usuario", $nome);
        $smarty->assign("nivelUsuario", $_SESSION["nivelSupervisor"]);
        $smarty->assign("secaoUser", $_SESSION["secao"]);
        $smarty->assign("conteudo", 'paginas/novo_chamado.tpl');
        $smarty->display("HTML.tpl");
    } else {
        header("location: novoChamadoTelefonia.php");
    }
}

