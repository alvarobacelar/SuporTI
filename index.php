<?php

require_once ("smarty/config/config.php");
require_once ("includes/funcoes/verifica.php");
require_once ("./includes/models/ManipulateDataDAO.php");

if ($estaLogado == "SIM") {

    $nome = $_SESSION['nome'];
    // VERIFICAÇÃO DO TIPO DE USUARIO, AQUI MOSTRARÁ A HOME PARA O ADMINISTRADOR
    if ($_SESSION['nivel'] == "Administrador" || $_SESSION['nivel'] == "Supervisor") {


        // se o supervisor estive logado mostrá o informativo, caso contrario não mostrará
        if ($_SESSION["nivel"] == "Supervisor") {
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
        }

        $chamado = new ManipulateData();
        $chamado->setSecao($_SESSION["secao"]);
        $chamado->selectChamado($_SESSION["nivel"]);
        $resposta = new ManipulateData();
        $respostaNova = new ManipulateData();

        while ($banco = $chamado->fetch_object()) {
            $idCham[] = $banco->id_chamado;
            $tipo[] = $banco->tipo;
            $servico[] = $banco->servico;
            $assunto[] = $banco->assunto;
            $militar[] = $banco->militar_chamado;
            $data[] = $chamado->formataData($banco->data);
            $hora[] = $banco->hora;
            $texto[] = $banco->texto;
            $secao[] = $banco->secao;
            $chamadoSecao[] = $banco->chamado_secao;

            $smarty->assign("idCham", $idCham);
            $smarty->assign("tipo", $tipo);
            $smarty->assign("servico", $servico);
            $smarty->assign("assunto", $assunto);
            $smarty->assign("militar", $militar);
            $smarty->assign("data", $data);
            $smarty->assign("hora", $hora);
            $smarty->assign("texto", $texto);
            $smarty->assign("secao", $secao);
            $smarty->assign("chamadoSecao", $chamadoSecao);

            $resposta->countTodas($banco->id_chamado);
            $resAdmin = $resposta->fetch_object();
            $respostaAdmin[] = $resAdmin->conta;
            $smarty->assign("contagemResposta", $respostaAdmin);

            $respostaNova->countAdm($banco->id_chamado, $_SESSION["secao"]);
            $respAdminNova = $respostaNova->fetch_object();
            $respostaNovaAdmin[] = $respAdminNova->cont;
            $smarty->assign("respostaNova", $respostaNovaAdmin);
        }
        // VERIFICA SE EXISTE A SESSION DE RETORNO DA RESPOSTA
        if (isset($_SESSION["resposta"])) {
            if ($_SESSION["resposta"] == "OK") {
                $smarty->assign("avisoResposta", "<div class='alert alert-success' role='alert'>Resposta enviada com sucesso</div>");
            } else {
                $smarty->assign("avisoResposta", "<div class='alert alert-danger' role='alert'>Erro ao responder esse chamdo. Talvez nenhum parâmetro foi passado!</div>");
            }
        } else {
            $smarty->assign("avisoResposta", "");
        }
        unset($_SESSION["resposta"]);


        // VERIFICANDO SE O CHAMADO FOI FECHADO PARA MOSTRAR O FREADBACK
        if (isset($_SESSION["fecharChamado"])) {
            $fecha = $_SESSION["fecharChamado"];
            if ($fecha == "OK") {
                $smarty->assign("fredBackChamado", "<div class='alert alert-success' role='alert'>Chamado fechado com sucesso!</div>");
            } else {
                $smarty->assign("fredBackChamado", "<div class='alert alert-danger' role='alert'>Erro ao fechar chamado</div>");
            }
        } else {
            $smarty->assign("fredBackChamado", "");
        }
        unset($_SESSION["fecharChamado"]);

        $page = $_SERVER['PHP_SELF'];
        $sec = "10";
        header("Refresh: $sec; url=$page");

        $smarty->assign("titulo", TITULO . " - Administração - $nome");
        $smarty->assign("reload", "<meta HTTP-EQUIV='refresh' CONTENT='10'>");
        $smarty->assign("local", "Home - $nome");
        $smarty->assign("nivel", $nivel);
        $smarty->assign("usuario", $nome);
        $smarty->assign("nivelUsuario", $_SESSION["nivelSupervisor"]);
        $smarty->assign("conteudo", 'paginas/home_admin.tpl');
        $smarty->display("HTML.tpl");

        // AQUI VISUALIZARÁ A HOME PARA O USUARIO COMUM
    } else {

        $secao = $_SESSION["secao"];

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

        // realizando a pesquisa para buscar os chamados dos usuarios
        $meusChamados = new ManipulateData();
        $meusChamados->setSecao($secao);
        $meusChamados->selectChamEsp();
        $contaResposta = new ManipulateData();

        while ($banco = $meusChamados->fetch_object()) {
            $id[] = $banco->id_chamado;
            $tipo[] = $banco->tipo;
            $servico[] = $banco->servico;
            $assunto[] = $banco->assunto;
            $militar[] = $banco->militar_chamado;
            //$data[] = $chamado->formataData($banco->data);
            $hora[] = $banco->hora;
            $texto[] = $banco->texto;
            $secaoResp[] = $banco->secao_chamado;
            $parecer[] = $banco->parecer;
            $chamadoSecao[] = $banco->chamado_secao;
            $status[] = $banco->status;

            $smarty->assign("id", $id);
            $smarty->assign("tipo", $tipo);
            $smarty->assign("servico", $servico);
            $smarty->assign("assunto", $assunto);
            //$smarty->assign("militar", $militar);
            $smarty->assign("data", $data);
            $smarty->assign("hora", $hora);
            $smarty->assign("texto", $texto);
            $smarty->assign("secao", $secao);
            $smarty->assign("secaoResp", $secaoResp);
            $smarty->assign("status", $status);
            $smarty->assign("parecer", $parecer);
            // CONTAGEM DAS REPOSTAS
            $contaResposta->count($banco->id_chamado, "Sec Infor");

            $recebeContagem = $contaResposta->fetch_object();
            $contagem[] = $recebeContagem->cont;
            $smarty->assign("contagem", $contagem);
            // FIM DA REPETIÇÃO DE CONTAGEM DE RESPOSTA //
        }
        // fim da pesquisa no banco de dados para mostragem de todos os chamados
        // VERIFICANDO SE O CHAMADO FOI FECHADO PARA MOSTRAR O FREADBACK PARA O USUARIO
        if (isset($_SESSION["fecharChamado"])) {
            $fecha = $_SESSION["fecharChamado"];
            if ($fecha == "OK") {
                $smarty->assign("fredBackChamado", "Chamado fechado com sucesso!");
            } else {
                $smarty->assign("fredBackChamado", "Erro ao fechar chamado");
            }
        } else {
            $smarty->assign("fredBackChamado", "");
        }
        unset($_SESSION["fecharChamado"]);


//        // se existir resposta ele mostrará quantas respostas tem o usuario no titulo
//        if (isset($contagem)) {
//            $mostra = "(" . $conta . ")";
//        } else {
//            $mostra = "";
//        }

        $smarty->assign("titulo", TITULO);
        $smarty->assign("local", "Home - $nome");
        $smarty->assign("nivel", $nivel);
        $smarty->assign("usuario", $nome);
        $smarty->assign("conteudo", 'paginas/home_usuario.tpl');
        $smarty->display("HTML.tpl");
    }
}
?>
