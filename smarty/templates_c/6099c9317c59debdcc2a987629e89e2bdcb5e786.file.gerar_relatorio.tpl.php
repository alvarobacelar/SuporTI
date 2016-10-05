<?php /* Smarty version Smarty-3.1.13, created on 2015-10-27 11:28:46
         compiled from "/home/www/html/SuporTI/smarty/templates/paginas/gerar_relatorio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64989562255dcd0622a73b8-99708834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6099c9317c59debdcc2a987629e89e2bdcb5e786' => 
    array (
      0 => '/home/www/html/SuporTI/smarty/templates/paginas/gerar_relatorio.tpl',
      1 => 1445952513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64989562255dcd0622a73b8-99708834',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55dcd0622fc793_37660584',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dcd0622fc793_37660584')) {function content_55dcd0622fc793_37660584($_smarty_tpl) {?><div class="panel panel-default">
    <div class="panel-heading">Gerar relatório de chamados</div>
    <div class="panel-body">  



        <form action="relatorio.php" method="post" name="dados">
            Escolha o período <br><br>
            <div id="relatorio">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2">Data Inicio</span>
                        <input type="text" id="data1" class="form-control" name="data1" title="DD/MM/AAAA" value="" required  placeholder="DD/MM/AAAA">
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon3">Data Fim</span>
                        <input type="text" id="data2" class="form-control" name="data2" title="DD/MM/AAAA" value="" required  placeholder="DD/MM/AAAA">
                    </div>
                </div>
                <p id="destino"></p>
                <center><button type="submit" onclick="this.form.target = '_blank';
                        return true;" class="btn btn-primary ">Gerar  <i class="icon-ok"></i></button></center>
            </div>
        </form>
    </div>
    <div class="panel-footer">
        <center><a class="btn btn-default" href="javascript:history.back()">Voltar</a></center>
    </div>
</div><?php }} ?>