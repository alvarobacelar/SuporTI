<?php

require_once ("smarty/config/config.php");
require_once ("includes/funcoes/verifica.php");
require_once ("includes/models/ManipulateDataDAO.php");

if ($estaLogado == "SIM") {

    $nome = $_SESSION["nome"];
    if (!isset($_GET["idUnico"])) { // SE NENHUM ID FOR PASSADO MOSTRARÁ TODOS OS CHAMADOS
        $secao = $_SESSION["secao"];
        $meusChamados = new ManipulateData();
        $meusChamados->setSecao($secao);
        $contaResposta = new ManipulateData();
        $teste = $meusChamados->selectChamEsp();

        while ($banco = $meusChamados->fetch_object()) {
            $idChama[] = $banco->id_chamado;
            $tipo[] = $banco->tipo;
            $servico[] = $banco->servico;
            $assunto[] = $banco->assunto;
            $data[] = $meusChamados->formataData($banco->data);
            $hora[] = $banco->hora;
            $texto[] = $banco->texto;
            $status[] = $banco->status;
            $parecer[] = $banco->parecer;

            $smarty->assign("idChama", $idChama);
            $smarty->assign("tipo", $tipo);
            $smarty->assign("servico", $servico);
            $smarty->assign("assunto", $assunto);
            $smarty->assign("data", $data);
            $smarty->assign("hora", $hora);
            $smarty->assign("texto", $texto);
            $smarty->assign("secao", $secao);
            $smarty->assign("status", $status);
            $smarty->assign("parecer", $parecer);
            
            
            // CONTAGEM DAS REPOSTAS - NÃO CONCLUIDO  //
            $contaResposta->count($banco->id_chamado, $banco->secao_chamado);

            $recebeContagem = $contaResposta->fetch_object();
            $contagem[] = $recebeContagem->cont;
            $smarty->assign("contagem", $contagem);
            // FIM DA REPETIÇÃO DE CONTAGEM DE RESPOSTA //
            
        }

        $smarty->assign("titulo", TITULO." - Meus Chamados");
        $smarty->assign("local", "<a class='localizacao' href='index.php'>Home</a> > Meus chamados");
        $smarty->assign("nivel", $nivel);
        $smarty->assign("usuario", $nome);
        $smarty->assign("nivelUsuario", $_SESSION["nivelSupervisor"]);
        $smarty->assign("conteudo", 'paginas/meus_chamados.tpl');
        $smarty->display("HTML.tpl");
    } else {

        $id_visualizacao = addslashes($_GET["idUnico"]);

        $visualiza = new ManipulateData();
        $secao = $_SESSION["secao"];
        // QUANDO O USUARIO CLICA PARA VER UMA UNICA MENSAGEM, ESSA FUNCAO MUDA O STATUS PARA '0'
        $visualiza->setSecao($secao);
        $visualiza->updateResposta($id_visualizacao);

        $visualiza->setValueId($id_visualizacao);
        $visualiza->setSecao($secao);
        $visualiza->selectChamadoUnico();
        // loop de repetição de busca do chamado unico
        while ($busca = $visualiza->fetch_object()) {
            $idChama[] = $busca->id_chamado;
            $tipo[] = $busca->tipo;
            $servico[] = $busca->servico;
            $assunto[] = $busca->assunto;
            $data[] = $visualiza->formataData($busca->data);
            $hora[] = $busca->hora;
            $texto[] = $busca->texto;
            $status[] = $banco->status;
            $parecer[] = $banco->parecer;

            $smarty->assign("idChama", $idChama);
            $smarty->assign("tipo", $tipo);
            $smarty->assign("servico", $servico);
            $smarty->assign("assunto", $assunto);
            $smarty->assign("data", $data);
            $smarty->assign("hora", $hora);
            $smarty->assign("texto", $texto);
            $smarty->assign("secao", $secao);
            $smarty->assign("status", $status);
            $smarty->assign("parecer", $parecer);
        }

        // verificando se existe uma session de resposta apagada, para mostrar um freadbeck para o usuario
        if (isset($_SESSION["apagado"])) {
            if ($_SESSION["apagado"] == "OK") {
                $smarty->assign("apagado", "Resposta apagada com sucesso!");
            } else {
                $smarty->assign("apagado", "Erro ao apagar a resposta");
            }
        } else {
            $smarty->assign("apagado", "");
        }
        unset($_SESSION["apagado"]); // destruindo a session, caso o usuario atualize a pagina
        // loop de repeticao da resposta
        
        $resposta = new ManipulateData();
        $resposta->setValueId($id_visualizacao);
        $resposta->selectResposta();

        while ($db = $resposta->fetch_object()) {
            $idResposta[] = $db->id_resposta;
            $respostaTexto[] = $db->resposta;
            $respostaSecao[] = $db->resposta_secao;
            $data[] = $resposta->formataData($db->data);
            $horaResposta[] = $db->hora;

            $smarty->assign("idResposta", $idResposta);
            $smarty->assign("respostaTexto", $respostaTexto);
            $smarty->assign("respostaSecao", $respostaSecao);
            $smarty->assign("data", $data);
            $smarty->assign("horaResposta", $horaResposta);
        }

        $smarty->assign("titulo", TITULO." - Meus Chamados");
        $smarty->assign("local", "<a class='localizacao' href='index.php'>Home</a> > <a class='localizacao' href='meusChamados.php'>Meus Chamados</a> > Visualizar Chamado");
        $smarty->assign("nivel", $nivel);
        $smarty->assign("usuario", $nome);
        $smarty->assign("nivelUsuario", $_SESSION["nivelSupervisor"]);
        $smarty->assign("conteudo", 'paginas/chamado_unico.tpl');
        $smarty->display("HTML.tpl");
    }
}
?>
