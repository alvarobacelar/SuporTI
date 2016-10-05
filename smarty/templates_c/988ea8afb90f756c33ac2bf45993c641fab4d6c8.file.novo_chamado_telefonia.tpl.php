<?php /* Smarty version Smarty-3.1.13, created on 2015-09-03 08:07:39
         compiled from "/home/www/html/SuporTI/smarty/templates/paginas/novo_chamado_telefonia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39532199055dccb090acbc1-63881241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '988ea8afb90f756c33ac2bf45993c641fab4d6c8' => 
    array (
      0 => '/home/www/html/SuporTI/smarty/templates/paginas/novo_chamado_telefonia.tpl',
      1 => 1441278398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39532199055dccb090acbc1-63881241',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55dccb0915cd61_63531622',
  'variables' => 
  array (
    'aviso' => 0,
    'secaoUser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dccb0915cd61_63531622')) {function content_55dccb0915cd61_63531622($_smarty_tpl) {?><div class="panel panel-default">
    <div class="panel-heading">Novo Chamado - Telefonia (Pel Com)</div>
    <div class="panel-body">      


        <div id="chamado">
            <?php echo $_smarty_tpl->tpl_vars['aviso']->value;?>


            <form action="includes/controlles/novo_chamado.php" method="post" name="chamado" class="form-horizontal" role="form" onSubmit="return enviarDados();">
                <p class="destino"> </p> 

                <div class="aviso"> Todos os campos serão obrigatorios </div>

                <input type="hidden" id="secao" name="secao" value="Supervisor" /> <!-- SEÇÃO NO QUAL SERA O CHAMADO -->

                <div class="form-group">
                    <label for="tipo" class="col-sm-2 control-label">Tipo *</label>
                    <div class="col-sm-2">
                        <select id="tipo" name="tipo" title="Selecione o tipo de Serviço" required class="form-control">
                            <option value="">Escolha o tipo</option>
                            <option value="incidente">Incidente</option>
                            <option value="problema">Problema</option>
                            <option value="solicitacao">Solicitação</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tipo" class="col-sm-2 control-label">Serviço *</label>
                    <div class="col-sm-4">
                        <select id="servico" name="servico" title="Selecione o serviço" required class="form-control">
                            <option value="">Escolha o Serviço</option>
                            <option value="Problemas no aparelho">Problemas no aparelho</option>
                            <option value="Não realiza ligação interna/Externa">Não realiza ligação interna/Externa</option>
                            <option value="Aparelho Mudo">Aparelho Mudo</option>
                            <option value="Mudança do local do aparelho telefonico">Mudança do local do aparelho telefonico</option>
                            <option value="Problemas com senha">Problemas com senha</option>
                            <option value="Pedido de lista de ramais">Pedido de lista de ramais</option>
                            <option value="Problemas com câmeras de monitoramento">Problemas com câmeras de monitoramento</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="assunto" class="col-sm-2 control-label">Assunto *</label>
                    <div class="col-sm-5">
                        <input type="text" id="assunto" name="assunto" title="Escreva o assunto" class="form-control" value="" maxlength="100"  required autocomplete="on" placeholder="Assunto Referente ao serviço.." />
                    </div>
                </div>
                <input type="hidden" class="form-control" id="chamadoSecao" name="chamadoSecao" title="Seção" value="<?php echo $_smarty_tpl->tpl_vars['secaoUser']->value;?>
" class="span5" value="" maxlength="100" required autocomplete="on" />

                <div class="form-group">
                    <label for="militar" class="col-sm-2 control-label">Militar que realiza chamado *</label>
                    <div class="col-sm-5">
                        <input type="text" id="militar" name="militar" title="Nome do militar" class="form-control" value="" maxlength="100"  required autocomplete="on" placeholder="Sgt Alvaro" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="texto" class="col-sm-2 control-label">Texto *</label>
                    <div class="col-sm-5">
                        <textarea id="texto"  name="texto" title="Texto do chamado" cols="50" rows="30"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" id="buttonSubmitNovoChamado" class="btn btn-large btn-primary ">Enviar  <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></button>
                        <a href="novoChamado.php" class="btn btn-danger">Cancelar  <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><?php }} ?>