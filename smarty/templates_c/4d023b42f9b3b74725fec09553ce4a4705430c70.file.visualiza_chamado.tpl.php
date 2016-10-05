<?php /* Smarty version Smarty-3.1.13, created on 2015-08-24 16:43:46
         compiled from "/home/www/html/SuporTI/smarty/templates/paginas/visualiza_chamado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160591259055db6cee6d1133-27190129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d023b42f9b3b74725fec09553ce4a4705430c70' => 
    array (
      0 => '/home/www/html/SuporTI/smarty/templates/paginas/visualiza_chamado.tpl',
      1 => 1440445418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160591259055db6cee6d1133-27190129',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55db6cee76f960_63390844',
  'variables' => 
  array (
    'apagado' => 0,
    'avisoResposta' => 0,
    'idChama' => 0,
    'dataChamado' => 0,
    'horaChamado' => 0,
    'tipo' => 0,
    'servico' => 0,
    'assunto' => 0,
    'texto' => 0,
    'status2' => 0,
    'situacao' => 0,
    'parecer' => 0,
    'idResposta' => 0,
    'respostaSecao' => 0,
    'respostaTexto' => 0,
    'dataResposta' => 0,
    'horaResposta' => 0,
    'idRetorno' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55db6cee76f960_63390844')) {function content_55db6cee76f960_63390844($_smarty_tpl) {?><div class="panel panel-default">
    <div class="panel-heading">        

        Meus Chamados
    </div>
    <div class="panel-body">
        <?php echo $_smarty_tpl->tpl_vars['apagado']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['avisoResposta']->value;?>
<br />
        <div id="view-chamado">
            <table class="table table-striped table-hover table-bordered ">
                <?php if (isset($_smarty_tpl->tpl_vars['idChama']->value)){?>
                    <th><center>Nr</center></th>
                    <th><center>Inicio do Chamado</center></th>
                    <th><center>Tipo</center></th>
                    <th><center>Serviço</center></th>
                    <th><center>Assunto</center></th>
                    <th><center>Texto</center></th>
                    <th><center>Opção</center></th>

                    <tr class="info">
                        <td width="30"><?php echo $_smarty_tpl->tpl_vars['idChama']->value;?>
</td>
                        <td width="150"><?php echo $_smarty_tpl->tpl_vars['dataChamado']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['horaChamado']->value;?>
</td>
                        <td width="90"><?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
</td>
                        <td width="90"><?php echo $_smarty_tpl->tpl_vars['servico']->value;?>
</td>
                        <td width="100"><?php echo $_smarty_tpl->tpl_vars['assunto']->value;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['texto']->value;?>
</td>

                        <?php if ($_smarty_tpl->tpl_vars['status2']->value==1){?>
                            <td width="90"></td>
                        <?php }else{ ?>
                            <td width="90"><a class="btn btn-large btn-primary disabled">Chamado Fechado</a></td>
                        <?php }?>

                    </tr>
                    <tr class="warning">
                        <td colspan="7"><br>
                            <?php if ($_smarty_tpl->tpl_vars['situacao']->value!=0){?> 
                                    <div id="parecer-tecnico">
                                        <h4><center><?php if ($_smarty_tpl->tpl_vars['situacao']->value==0){?> Fechado pelo usuario <?php }?>Parecer Técnico (<?php if ($_smarty_tpl->tpl_vars['situacao']->value==1){?>Solucionado<?php }?><?php if ($_smarty_tpl->tpl_vars['situacao']->value==2){?>Não solucionado<?php }?>)</center></h4>
                                                <?php echo $_smarty_tpl->tpl_vars['parecer']->value;?>

                                    </div><br><br>
                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['idResposta']->value)){?>

                                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['r'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['r']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['name'] = 'r';
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['idResposta']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total']);
?>
                                        <div class="alert alert-danger" role="alert">
                                            <strong>Respondido por <?php echo $_smarty_tpl->tpl_vars['respostaSecao']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['respostaTexto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']];?>
 - <span class="label label-default"><em>respondido em <?php echo $_smarty_tpl->tpl_vars['dataResposta']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']];?>
 às <?php echo $_smarty_tpl->tpl_vars['horaResposta']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']];?>
</em></span>
                                            <a style="float: right;" onclick="excluirResposta(<?php echo $_smarty_tpl->tpl_vars['idResposta']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']];?>
, <?php echo $_smarty_tpl->tpl_vars['idRetorno']->value;?>
)"><i class="icon-remove"></i></a>
                                        </div>
                                    <?php endfor; endif; ?>
                                <?php }else{ ?>
                                    <p class="resposta">
                                        Não há nenhuma resposta
                                    </p>
                                <?php }?>
                            </td>
                        </tr>

                        
                        <tr class="warning">
                            <td colspan="7">
                                <div>
                                    <form action="includes/controlles/resposta_chamado.php?id=<?php echo $_smarty_tpl->tpl_vars['idRetorno']->value;?>
" method="post" name="resposta">
                                        <textarea name="texto" cols="4" rows="5"></textarea>
                                        <button class="btn btn-success" type="submit">Responder</button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                    <?php }else{ ?>
                        <tr>
                            <td><center><h4>Nenhum chamado aberto</h4> <a class="btn" href="novoChamado.php"> Abrir Novo Chamado </a></center></td>
                        </tr>
                    <?php }?>
                </table>
            </div>
        </div>
        <div class="panel-footer">
            <center><a class="btn btn-default" href="javascript:history.back()">Voltar</a></center>
        </div>
    </div>
<?php }} ?>