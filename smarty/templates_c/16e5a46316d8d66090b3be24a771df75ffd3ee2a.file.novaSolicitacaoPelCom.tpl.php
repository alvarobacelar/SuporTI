<?php /* Smarty version Smarty-3.1.13, created on 2015-09-03 08:06:59
         compiled from "/home/www/html/SuporTI/smarty/templates/paginas/novaSolicitacaoPelCom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101652455055e828ec09d944-21012169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16e5a46316d8d66090b3be24a771df75ffd3ee2a' => 
    array (
      0 => '/home/www/html/SuporTI/smarty/templates/paginas/novaSolicitacaoPelCom.tpl',
      1 => 1441278401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101652455055e828ec09d944-21012169',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55e828ec0b3426_17653967',
  'variables' => 
  array (
    'aviso' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e828ec0b3426_17653967')) {function content_55e828ec0b3426_17653967($_smarty_tpl) {?><div class="panel panel-default">
    <div class="panel-heading">Novo chamado rápido para o Pel Com</div>
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
                        <select class="form-control" id="tipo" name="tipo" title="Selecione o tipo de Serviço" required >
                            <option value="">Tipo de chamado</option>
                            <option value="incidente">Incidente</option>
                            <option value="problema">Problema</option>
                            <option value="solicitacao">Solicitação</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tipo" class="col-sm-2 control-label">Serviço *</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="servico" name="servico" title="Selecione o serviço" required >
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
                        <input type="text" class="form-control" id="assunto" name="assunto" title="Escreva o assunto"  value="" maxlength="100"  required autocomplete="on" placeholder="Assunto Referente ao serviço.." />
                    </div>
                </div>

                <div class="form-group">
                    <label for="chamadoSecao" class="col-sm-2 control-label">Seção *</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="chamadoSecao" name="chamadoSecao" title="Nome do militar" class="span5" value="" maxlength="100"  required autocomplete="on" placeholder="Seção que realiza o chamado" />
                    </div>
                </div>


                <div class="form-group">
                    <label for="militar" class="col-sm-2 control-label">Militar que realiza chamado *</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="militar" name="militar" title="Nome do militar" value="" maxlength="100"  required autocomplete="on" placeholder="Nome ..." /><br>
                    </div>
                </div>

                <div class="form-group">
                    <label for="texto" class="col-sm-2 control-label">Texto *</label>
                    <div class="col-sm-5">
                        <textarea id="texto" name="texto" title="Texto do chamado"></textarea>
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
</div>
<?php }} ?>