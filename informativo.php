<?php

require_once ("smarty/config/config.php");
require_once ("includes/funcoes/verifica.php");
require_once ("includes/models/ManipulateDataDAO.php");

if ($_SESSION['nivel'] == "Administrador" && $_SESSION["nivelSupervisor"] == "NAO") {

    $nome = $_SESSION["nome"];

    $informe = new ManipulateData();
    $informe->setTable("informacao");
    $informe->select();

    // busca no banco de dados para informações 
    while ($busca = $informe->fetch_object()) {
        $idInforme[] = $busca->id_informacao;
        $informacao[] = $busca->informe;
        $data[] = $informe->formataData($busca->data);

        $smarty->assign("idInforme", $idInforme);
        $smarty->assign("informacao", $informacao);
        $smarty->assign("data", $data);
    }

    // verifica se existe uma session de freead back para o usuario que enviou o informe
    if (isset($_SESSION["informe"])) {
        $sessInforme = $_SESSION["informe"];
        if ($sessInforme == "OK") {
            $smarty->assign("avisoEnvio", "<div class='text-success'><strong>Informe foi enviado com sucesso!</strong></div>");
        } else
        if ($sessInforme == "APAGADO") {
            $smarty->assign("avisoEnvio", "<div class='text-success'><strong>Informe excluido com sucesso!</strong></div>");
        } else
        if ($sessInforme == "NAOAPAGADO") {
            $smarty->assign("avisoEnvio", "<div class='text-error'><strong>Erro ao apagar informe! Tente novamente</strong></div>");
        } else {
            $smarty->assign("avisoEnvio", "<div class='text-error'><strong>Não foi possível enviar seu informe, nenhum parametro passado</strong></div>");
        }
    } else {
        $smarty->assign("avisoEnvio", "");
    }
    unset($_SESSION["informe"]); // destoroi a session


    $smarty->assign("titulo", TITULO." - Meus Chamados");
    $smarty->assign("local", "<a class='localizacao' href='index.php'>Home</a> > Informativo");
    $smarty->assign("nivel", $nivel);
    $smarty->assign("usuario", $nome);
    $smarty->assign("nivelUsuario", $_SESSION["nivelSupervisor"]);
    $smarty->assign("conteudo", 'paginas/informativo.tpl');
    $smarty->display("HTML.tpl");
} else {
    header("Location: index.php");
}