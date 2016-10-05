<?php /* Smarty version Smarty-3.1.13, created on 2015-08-25 17:30:00
         compiled from "/home/www/html/SuporTI/smarty/templates/paginas/meus_chamados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66888251855dcd01aab4709-98147928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fef5e9d65af7ed2ec1b8a81747a99a6374aa9c2b' => 
    array (
      0 => '/home/www/html/SuporTI/smarty/templates/paginas/meus_chamados.tpl',
      1 => 1440534598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66888251855dcd01aab4709-98147928',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55dcd01ab342c7_48972243',
  'variables' => 
  array (
    'idChama' => 0,
    'data' => 0,
    'hora' => 0,
    'tipo' => 0,
    'servico' => 0,
    'assunto' => 0,
    'texto' => 0,
    'contagem' => 0,
    'status' => 0,
    'parecer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dcd01ab342c7_48972243')) {function content_55dcd01ab342c7_48972243($_smarty_tpl) {?><div class="panel panel-default">
    <div class="panel-heading">Meus chamados</div>


    <table class="table table-striped table-hover table-bordered ">
        <?php if (isset($_smarty_tpl->tpl_vars['idChama']->value)){?>
            <th><center>Inicio do Chamado</center></th><th><center>Tipo</center></th><th><center>Serviço</center></th><th><center>Assunto</center></th><th><center>Texto</center></th><th><center>Situação</center></th><th><center>Parecer</center></th><th><center>Opção</center></th>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['m'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['m']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['name'] = 'm';
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['idChama']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total']);
?>
                <tr class="info">
                    <td width="50"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']];?>
 - <?php echo $_smarty_tpl->tpl_vars['hora']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']];?>
</td>
                    <td width="90"><?php echo $_smarty_tpl->tpl_vars['tipo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']];?>
</td>
                    <td width="90"><?php echo $_smarty_tpl->tpl_vars['servico']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']];?>
</td>
                    <td width="100"><?php echo $_smarty_tpl->tpl_vars['assunto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['texto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']];?>

                        <?php if ($_smarty_tpl->tpl_vars['contagem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']]!=0){?>
                            <a href="javascript:visualizarChamado(<?php echo $_smarty_tpl->tpl_vars['idChama']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']];?>
);">
                                <div class="quant-resposta">
                                    <?php if ($_smarty_tpl->tpl_vars['contagem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']]<=1){?>
                                        <?php echo $_smarty_tpl->tpl_vars['contagem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']];?>
 nova resposta
                                    <?php }else{ ?>
                                        <?php echo $_smarty_tpl->tpl_vars['contagem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']];?>
 novas mensagens
                                    <?php }?>
                                </div>
                            </a>
                        <?php }?>
                    </td>
                    <td width="60">
                <center>
                    <strong>
                        <?php if ($_smarty_tpl->tpl_vars['status']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']]==1){?><span class="text-success"> Aberto</span> <?php }else{ ?><span class="text-error">Fechado</span> <?php }?>
                    </strong>
                </center>
                </td>
                <td width="120"><?php if ($_smarty_tpl->tpl_vars['parecer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']]==''){?><span class="text-success"><center>Não definido</center></span><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['parecer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']];?>
<?php }?></td>
                <td width="80"><a class="btn btn-warning btn-xs" onclick="visualizarChamado(<?php echo $_smarty_tpl->tpl_vars['idChama']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']];?>
)">Visualizar</a></td>
                


            <?php endfor; endif; ?>
        <?php }else{ ?>
            <tr>
                <td><center><h4>Nenhum chamado aberto</h4> <a class="btn btn-default" href="novoChamado.php"> Abrir Novo Chamado </a></center></td>
            </tr>
        <?php }?>
    </table>
 
    <br>
    <center><a class="btn btn-default" href="javascript:history.back()">Voltar</a></center>
</div>
   <?php }} ?>