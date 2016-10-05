<?php

require_once ("smarty/config/config.php");
require_once ("includes/funcoes/verifica.php");
require_once ("includes/models/ManipulateDataDAO.php");
require_once ("includes/models/Pagination.php");

if ($estaLogado == "SIM") {

    $nome = $_SESSION["nome"];
    // VERIFICANDO O NIVEL DO USUARIO
    if ($_SESSION['nivel'] == "Administrador" || $_SESSION['nivel'] == "Supervisor") {
        // VERIFICANDO SE EXISTE UMA ID PASSADO PELO GET PARA MOSTRAR UM CHAMADO UNICO
        /* @var $_GET type */
        if (!isset($_GET["id"])) {

            $meusChamados = new ManipulateData();
            $manipula = new ManipulateData();

            // ########### PAGINAÇÃO #############//
            if (isset($_GET["pg"])) { // se exitir uma variavel na URL é setado para a paginação
                $pg = $_GET["pg"];
            } else {
                $pg = 1;
            }
            $quantVisitado = 15; // Quantidade de chamado por pagina
            $inicio = ($pg * $quantVisitado) - $quantVisitado; // Definindo o inicio da paginação
            $pagina = new Pagination($pg, $quantVisitado, $manipula->countTotal("chamado", $_SESSION["nivel"]));
            // ########### FIM PAGINAÇÃO #############//

            $teste = $meusChamados->selectTodosChamado($_SESSION["nivel"],$inicio, $quantVisitado);

            while ($banco = $meusChamados->fetch_object()) {
                $idChama[] = $banco->id_chamado;
                $tipo[] = $banco->tipo;
                $secao[] = $banco->secao;
                $servico[] = $banco->servico;
                $assunto[] = $banco->assunto;
                $data[] = $meusChamados->formataData($banco->data);
                $hora[] = $banco->hora;
                $texto[] = $banco->texto;
                $status[] = $banco->status;
                $militarChamado[] = $banco->militar_chamado;
                $chamadoSecao[] = $banco->chamado_secao;
                
                $smarty->assign("idChama", $idChama);
                $smarty->assign("tipo", $tipo);
                $smarty->assign("servico", $servico);
                $smarty->assign("assunto", $assunto);
                $smarty->assign("data", $data);
                $smarty->assign("hora", $hora);
                $smarty->assign("texto", $texto);
                $smarty->assign("secao", $secao);
                $smarty->assign("status", $status);
                $smarty->assign("militarChamado", $militarChamado);
                $smarty->assign("chamadoSecao", $chamadoSecao);
            }


            $smarty->assign("titulo", TITULO . " - Todos os Chamados");
            $smarty->assign("local", "<a class='localizacao' href='index.php'>Home</a> > Meus chamados");
            $smarty->assign("nivel", $nivel);
            $smarty->assign("nivelUsuario", $_SESSION["nivelSupervisor"]);
            $smarty->assign("usuario", $nome);
            $smarty->assign("paginacao", $pagina->paginacao());
            $smarty->assign("conteudo", 'paginas/all_chamados.tpl');
            $smarty->display("HTML.tpl");
        } else { // SE EXISTIR UM ID ELE MOSTRA UM CHAMADO ÚNICO
            $id = addslashes($_GET["id"]);
            $smarty->assign("idRetorno", $id);
            $visualiza = new ManipulateData();

            $secao = $_SESSION["secao"];
            // QUANDO O USUARIO CLICA PARA VER UMA UNICA MENSAGEM, ESSA FUNCAO MUDA O STATUS PARA '0'
            $visualiza->updateRespostaAdm($id, $_SESSION["secao"]);

            $visualizaUnico = new ManipulateData();
            $visualizaUnico->setValueId($id);
            $visualizaUnico->setSecao($secao);
            $visualizaUnico->selectChamadoUnicoTodos();

            while ($vis = $visualizaUnico->fetch_object()) {
                $idChamado = $vis->id_chamado;
                $tipo = $vis->tipo;
                $servico = $vis->servico;
                $assunto = $vis->assunto;
                $horaChamado = $vis->hora;
                $dataChamado = $visualizaUnico->formataData($vis->data);
                $texto = $vis->texto;
                $status2 = $vis->status;
                $secaoA = $vis->secao;
                $parecer = $vis->parecer;
                $situacao = $vis->situacao;
                $chamadoSecao = $vis->chamado_secao;

                $smarty->assign("idChama", $idChamado);
                $smarty->assign("tipo", $tipo);
                $smarty->assign("servico", $servico);
                $smarty->assign("assunto", $assunto);
                $smarty->assign("horaChamado", $horaChamado);
                $smarty->assign("dataChamado", $dataChamado);
                $smarty->assign("texto", $texto);
                $smarty->assign("secao", $secao);
                $smarty->assign("status2", $status2);
                $smarty->assign("secaoA", $secaoA);
                $smarty->assign("parecer", $parecer);
                $smarty->assign("situacao", $situacao);
                $smarty->assign("chamadoSecao", $chamadoSecao);
            }

            // verificando se existe uma session de resposta apagada, para mostrar um freadbeck para o usuario
            if (isset($_SESSION["apagado"])) {
                if ($_SESSION["apagado"] == "OK") {
                    $smarty->assign("apagado", "<div class='text-success'><strong>Resposta apagada com sucesso!</strong></div>");
                } else {
                    $smarty->assign("apagado", "<div class='text-error'><strong>Erro ao apagar a resposta, você não tem permissão para exclui-la</strong></div>");
                }
            } else {
                $smarty->assign("apagado", "");
            }
            unset($_SESSION["apagado"]); // destruindo a session, caso o usuario atualize a pagina
            // VERIFICA SE EXISTE A SESSION DE RETORNO DA RESPOSTA
            if (isset($_SESSION["resposta"])) {
                if ($_SESSION["resposta"] == "OK") {
                    $smarty->assign("avisoResposta", "<div class='text-success'><strong>Resposta enviada com sucesso!</strong></div>");
                } else {
                    $smarty->assign("avisoResposta", "<div class='text-error'><strong>Erro ao enviar a mensagem!</strong></div>");
                }
            } else {
                $smarty->assign("avisoResposta", "");
            }
            unset($_SESSION["resposta"]);

            // loop de repeticao da resposta
            $respostaAdmin = new ManipulateData();
            $respostaAdmin->setValueId($id);
            $respostaAdmin->selectResposta();

            while ($db = $respostaAdmin->fetch_object()) {
                $idResposta[] = $db->id_resposta;
                $respostaTexto[] = $db->resposta;
                $respostaSecao[] = $db->resposta_secao;
                $data2[] = $respostaAdmin->formataData($db->data);
                $horaResposta[] = $db->hora;

                $smarty->assign("idResposta", $idResposta);
                $smarty->assign("respostaTexto", $respostaTexto);
                $smarty->assign("respostaSecao", $respostaSecao);
                $smarty->assign("dataResposta", $data2);
                $smarty->assign("horaResposta", $horaResposta);
            }


            $smarty->assign("titulo", TITULO . " - Todos os Chamados");
            $smarty->assign("local", "<a class='localizacao' href='index.php'>Home</a> > <a class='localizacao' href='allChamados.php'>Todos os Chamados</a> > Visualiza Chamado");
            $smarty->assign("nivel", $nivel);
            $smarty->assign("usuario", $nome);
            $smarty->assign("nivelUsuario", $_SESSION["nivelSupervisor"]);
            $smarty->assign("conteudo", 'paginas/visualiza_chamado_admin.tpl');
            $smarty->display("HTML.tpl");
        }
        // CASO O USUARIO COMUM ESTEJA LOGADO MOSTRARÁ APENAS SEUS CHAMADOS
    } else {
        // MOSTRA TODOS OS CHAMADOS (FECHADOS E ABERTOS)
        if (!isset($_GET["id"])) {

            $secao = $_SESSION["secao"];
            $chamadoSecao = new ManipulateData();
            $manipula = new ManipulateData();
            
            // ########### PAGINAÇÃO #############//
            if (isset($_GET["pg"])) { // se exitir uma variavel na URL é setado para a paginação
                $pg = $_GET["pg"];
            } else {
                $pg = 1;
            }
            $quantVisitado = 15; // Quantidade de chamado por pagina
            $inicio = ($pg * $quantVisitado) - $quantVisitado; // Definindo o inicio da paginação
            $pagina = new Pagination($pg, $quantVisitado, $manipula->countTotal("chamado",$_SESSION["nivel"]));
            // ########### FIM PAGINAÇÃO #############//
            
            $chamadoSecao->setSecao($secao);
            $teste = $chamadoSecao->selectTodosChamadoSecao($inicio, $quantVisitado);

            while ($banco = $chamadoSecao->fetch_object()) {
                $idChama[] = $banco->id_chamado;
                $tipo[] = $banco->tipo;
                $secao2[] = $banco->secao;
                $servico[] = $banco->servico;
                $assunto[] = $banco->assunto;
                $data[] = $chamadoSecao->formataData($banco->data);
                $hora[] = $banco->hora;
                $texto[] = $banco->texto;
                $parecer[] = $banco->parecer;
                $status[] = $banco->status;

                $smarty->assign("idChama", $idChama);
                $smarty->assign("tipo", $tipo);
                $smarty->assign("servico", $servico);
                $smarty->assign("assunto", $assunto);
                $smarty->assign("data", $data);
                $smarty->assign("hora", $hora);
                $smarty->assign("texto", $texto);
                $smarty->assign("status", $status);
                $smarty->assign("secao", $secao2);
                $smarty->assign("parecer", $parecer);
            }

            $smarty->assign("titulo", TITULO . " - Meus Chamados");
            $smarty->assign("local", "<a class='localizacao' href='index.php'>Home</a> > Meus chamados");
            $smarty->assign("nivel", $nivel);
            $smarty->assign("usuario", $nome);
            $smarty->assign("nivelUsuario", $_SESSION["nivelSupervisor"]);
            $smarty->assign("conteudo", 'paginas/all_chamados_usuario.tpl');
            $smarty->display("HTML.tpl");

            // CASO O USUARIO CLIQUE PARA VISUALIZAR O CHAMADO O SISTEMA IRÁ FAZER A BUSCA DE UM UNICO CHAMADO
        } else {
            $id = addslashes($_GET["id"]);
            $smarty->assign("idRetorno", $id); // variavel para retornar para a pagina de chamado
            $visualizaUnico = new ManipulateData();
            $secao = $_SESSION["secao"];
            $visualizaUnico->setValueId($id);
            $visualizaUnico->setSecao($secao);
            $visualizaUnico->selectChamadoUnicoTodos();

            // QUANDO O USUARIO CLICA PARA VER UMA UNICA MENSAGEM, ESSA FUNCAO MUDA O STATUS PARA '0',
            // FAZENDO COM QUE O SUMA A NOTIFICAÇÃO DE NOVA MENSAGEM
            $visualiza = new ManipulateData();
            $secao = $_SESSION["secao"];
            $visualiza->setSecao($secao);
            $visualiza->updateResposta($id);

            while ($vis = $visualizaUnico->fetch_object()) {
                $idChamado = $vis->id_chamado;
                $tipo = $vis->tipo;
                $servico = $vis->servico;
                $assunto = $vis->assunto;
                $horaChamado = $vis->hora;
                $texto = $vis->texto;
                $status2 = $vis->status;
                $dataChamado = $visualiza->formataData($vis->data);
                $parecer = $vis->parecer;
                $situacao = $vis->situacao;

                $smarty->assign("idChama", $idChamado);
                $smarty->assign("tipo", $tipo);
                $smarty->assign("servico", $servico);
                $smarty->assign("assunto", $assunto);
                $smarty->assign("horaChamado", $horaChamado);
                $smarty->assign("texto", $texto);
                $smarty->assign("dataChamado", $dataChamado);
                $smarty->assign("secao", $secao);
                $smarty->assign("status2", $status2);
                $smarty->assign("parecer", $parecer);
                $smarty->assign("situacao", $situacao);
            }

            // loop de repeticao das respostas
            $respostaAdmin = new ManipulateData();
            $respostaAdmin->setValueId($id);
            $respostaAdmin->selectResposta();

            while ($db = $respostaAdmin->fetch_object()) {
                $idResposta[] = $db->id_resposta;
                $respostaTexto[] = $db->resposta;
                $respostaSecao[] = $db->resposta_secao;
                $dataResposta[] = $respostaAdmin->formataData($db->data);
                $horaResposta[] = $db->hora;

                $smarty->assign("idResposta", $idResposta);
                $smarty->assign("respostaTexto", $respostaTexto);
                $smarty->assign("respostaSecao", $respostaSecao);
                $smarty->assign("dataResposta", $dataResposta);
                $smarty->assign("horaResposta", $horaResposta);
            }

            // verificando se existe uma session de resposta apagada, para mostrar um freadbeck para o usuario
            if (isset($_SESSION["apagado"])) {
                if ($_SESSION["apagado"] == "OK") {
                    $smarty->assign("apagado", "<div class='text-success'><strong>Resposta apagada com sucesso!</strong></div>");
                } else {
                    $smarty->assign("apagado", "<div class='text-error'><strong>Erro ao apagar a resposta, você não tem permissão para exclui-la</strong></div>");
                }
            } else {
                $smarty->assign("apagado", "");
            }
            unset($_SESSION["apagado"]); // destruindo a session, caso o usuario atualize a pagina
            // VERIFICA SE EXISTE A SESSION DE RETORNO DA RESPOSTA
            if (isset($_SESSION["resposta"])) {
                if ($_SESSION["resposta"] == "OK") {
                    $smarty->assign("avisoResposta", "<div class='alert alert-success' role='alert'><strong>Resposta enviada com sucesso!</strong></div>");
                } else {
                    $smarty->assign("avisoResposta", "<div class='alert alert-danger' role='alert'><strong>Erro ao enviar a mensagem!</strong></div>");
                }
            } else {
                $smarty->assign("avisoResposta", "");
            }
            unset($_SESSION["resposta"]);

            $smarty->assign("titulo", TITULO . " - Meus Chamados");
            $smarty->assign("local", "<a class='localizacao' href='index.php'>Home</a> > <a href='allChamados.php' class='localizacao'>Meus chamados</a> > Visualiza chamado");
            $smarty->assign("nivel", $nivel);
            $smarty->assign("usuario", $nome);
            $smarty->assign("conteudo", 'paginas/visualiza_chamado.tpl');
            $smarty->display("HTML.tpl");
        }
    }
}
?>
