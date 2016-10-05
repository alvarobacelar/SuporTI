<?php

require_once ("smarty/config/config.php");
require_once ("includes/funcoes/verifica.php");
require_once ("includes/models/ManipulateDataDAO.php");
require_once ("./lib/PdfLib.php");


// SOMENTE USUARIO LOGADO ACESSA A ESSA PAGINA
if ($estaLogado == "SIM") {

    // APENAS ADMINISTRADOR TEM ACESSO A ESSA PAGINA
    if ($_SESSION['nivel'] == "Administrador" || $_SESSION['nivel'] == "Supervisor") {

        if (isset($_POST["data1"]) && ($_POST["data2"])) {

            $relatorio = new ManipulateData();
            $contRel = new ManipulateData();
            $pdf = new PdfLib();
            $mpdf = new mPDF();

            $dataInicial = addslashes($_POST["data1"]);
            $dataFinal = addslashes($_POST["data2"]);

            $data1 = $relatorio->formata_data_db($dataInicial);
            $data2 = $relatorio->formata_data_db($dataFinal);
            $secaoChamado = $_SESSION["nivel"];

            /* GERANDO O RELATORIO EM PDF USANDO FPDF */            

            // chamando a função que faz a busca dos chamados, passando os parametros de dataInicial, dataFinal e seção.
            $relatorio->gerarRelatorio($data1, $data2, $_SESSION["nivel"]);
            $contRel->countRelatorio($data1, $data2, $_SESSION["nivel"]);
            $totalChamado = $contRel->fetch_object();
            $total = $totalChamado->total;
            while ($rel = $relatorio->fetch_object()) {

                $idRelatoio[] = $rel->id_chamado;
                $tipo[] = $rel->tipo;
                $servico[] = $rel->servico;
                $data[] = $relatorio->formataData($rel->data);
                $assunto[] = $rel->texto;
                $secao[] = $rel->secao;
                $parecer[] = $rel->parecer;
                $situacao[] = $rel->situacao;
                $chamadoSecao[] = $rel->chamado_secao;
                
                $smarty->assign("chamadoSecao", $chamadoSecao);
                $smarty->assign("idRelatorio", $idRelatoio);
                $smarty->assign("tipo", $tipo);
                $smarty->assign("servico", $servico);
                $smarty->assign("data", $data);
                $smarty->assign("secao", $secao);
                $smarty->assign("assunto", $assunto);
                $smarty->assign("parecer", $parecer);
                $smarty->assign("situacao", $situacao);
                
            }
            $smarty->assign("dataInicial", $dataInicial);
            $smarty->assign("dataFinal", $dataFinal);
            $smarty->assign("total", $total);
            $smarty->assign("secaoChamado", $secaoChamado);
            
//            $smarty->display('paginas/relatorio.tpl');
            $pdf->WriteHTML($smarty->fetch('paginas/relatorio.tpl'));
            $pdf->Output();
            exit;
            
            
        } else {
            // se nenhuma data for definida será enviado para uma pagina de erro com uma session mostrando qual foi o erro
            $_SESSION["erro"] = "Escolha a data inicial e a data final para imprimir o relatorio";
            header("Location: erro404.php");
            exit();
        }
    } else {
        header("Location: /");
        exit();
    }
}

