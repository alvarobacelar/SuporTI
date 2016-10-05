<?php

/*
 * Chamados de serviço de telefonia
 * Data Criação: 25/11/2013
 */

require_once ("smarty/config/config.php");
require_once ("includes/funcoes/verifica.php");

if ($estaLogado == "SIM") {
    
    if ($_SESSION["nivel"] != "Supervisor"){

    $nome = $_SESSION["nome"];

    // VERIFICA SE O CADASTRO FOI REALIZADO PARA MOSTRAR O AVISO
    if (isset($_SESSION["chamado"])){
        $chamado = $_SESSION["chamado"];
        if ($chamado == "OK"){
            $smarty->assign("aviso", "<div class='text-success'><strong>Chamado realizado com sucesso, aguarde o retorno </strong></div>");
        } else {
            $smarty->assign("aviso", "<div class='text-error'><strong>Chamado não realizado. Algum parâmetro não foi passado </strong></div>");
        }
    } else {
        $smarty->assign("aviso", "&nbsp;");
    }
    unset ($_SESSION["chamado"]);

    $smarty->assign("titulo", TITULO." - Novo Chamado - $nome");
    $smarty->assign("local", "<a class='localizacao' href='index.php'>Home</a> > Novo chamado");
    $smarty->assign("nivel", $nivel);
    $smarty->assign("usuario", $nome);
    $smarty->assign("nivelUsuario", $_SESSION["nivelSupervisor"]);
    $smarty->assign("secaoUser", $_SESSION["secao"]);
    $smarty->assign("conteudo", 'paginas/novo_chamado_telefonia.tpl');
    $smarty->display("HTML.tpl");
    
    } else {
        header("Location: novoChamado.php");
    }
}
?>
