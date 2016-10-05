
<?php

require_once 'mpdf/mpdf.php';


class PdfLib extends mPDF {

    public function buscaOM() {
        
    }

    public function PdfLib($mode = '', $format = 'A4', $default_font_size = 12, $default_font = 'Lucida', $mgl = 10, $mgr = 10, $mgt = 15, $mgb = 16, $mgh = 9, $mgf = 9, $orientation = 'L') {
        parent::mPDF($mode, $format, $default_font_size, $default_font, $mgl, $mgr, $mgt, $mgb, $mgh, $mgf, $orientation);

        $this->defaultheaderfontsize = 10;  /* in pts */
        $this->defaultheaderfontstyle = '';  /* blank, B, I, or BI */
        $this->defaultheaderline = 0;   /* 1 to include line below header/above footer */


        $this->setAutoTopMargin = true;

        $this->defaultfooterfontsize = 8;  /* in pts */
        $this->defaultfooterfontstyle = '';  /* blank, B, I, or BI */
        $this->defaultfooterline = 0;   /* 1 to include line below header/above footer */

        $busca = new ManipulateData();

        $busca->setTable("om");
        $busca->selectGeral();

        $resultado = $busca->fetch_object();
        $om = $resultado->nome_om;
        $cidade = $resultado->cidade;
        $secao = $resultado->secao;

        $h = '<div class="row-fluid" style="margin-top: -100px;">              
              <div class="span2 pull-left">
                <h2 style="color:#2F2F4F; text-align:center">SuporTI - Relatorio de Chamados</h2>
                <p class="span4  pull-left" style="padding-top: 5px;font-size: 8pts; line-height: 15px;">Sistema de atendimento ao usuario de TI do '. $om .' - '.$cidade.' </p>
              </div>
            </div><br>';

        $this->SetHtmlHeader($h);
        $this->SetFooter('||Página {PAGENO} de {nb}');
    }

}

?>
