<?php /* Smarty version Smarty-3.1.13, created on 2015-09-03 08:49:36
         compiled from "/home/www/html/SuporTI/smarty/templates/paginas/home_usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89218555555db699eb1acb4-12241972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3769ffca1e534cbe79e5f2f5ad83c7cf03c9aea5' => 
    array (
      0 => '/home/www/html/SuporTI/smarty/templates/paginas/home_usuario.tpl',
      1 => 1441280973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89218555555db699eb1acb4-12241972',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55db699eb67554_67759526',
  'variables' => 
  array (
    'idInforme' => 0,
    'informacao' => 0,
    'aviso' => 0,
    'fredBackChamado' => 0,
    'id' => 0,
    'data' => 0,
    'hora' => 0,
    'secaoResp' => 0,
    'tipo' => 0,
    'assunto' => 0,
    'texto' => 0,
    'contagem' => 0,
    'status' => 0,
    'parecer' => 0,
    'idChama' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55db699eb67554_67759526')) {function content_55db699eb67554_67759526($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/www/html/SuporTI/smarty/lib/plugins/modifier.truncate.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['idInforme']->value)){?> 
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['idInforme']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><?php echo $_smarty_tpl->tpl_vars['informacao']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']];?>
</strong>

            </div>
        <?php endfor; endif; ?>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['aviso']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['fredBackChamado']->value;?>


    <div class="panel panel-default">
        <div class="panel-heading">Todos os chamados</div>



        <div class="table-responsive table-bordered">
            <table class="table table-striped table-hover table-bordered ">
                <?php if (isset($_smarty_tpl->tpl_vars['id']->value)){?>
                    <th><center>Nr</center></th>
                    <th><center>Data / Hora</center></th>
                    <th><center>Seção Resp.</center></th>
                    <th><center>Tipo de Serviço</center></th>
                    <th><center>Assunto</center></th>
                    <th><center>Texto</center></th>
                    <th><center>Situação</center></th>
                    <th><center>Parecer técnico</center></th>
                    <th><center>Opção</center></th>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['m'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['m']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['name'] = 'm';
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['id']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <td><?php echo $_smarty_tpl->tpl_vars['id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']];?>
<br /> <?php echo $_smarty_tpl->tpl_vars['hora']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']];?>
</td>
                            <td><?php if ($_smarty_tpl->tpl_vars['secaoResp']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']]=="Supervisor"){?> Pel Com <?php }else{ ?> Seção de Informática <?php }?></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tipo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']];?>
</td>
                            <td width="100"><?php echo $_smarty_tpl->tpl_vars['assunto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']];?>
</td>
                            <td width="400"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['texto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']],200," <a href='#' class='btn-link' onclick='visualizarChamado(".((string)$_smarty_tpl->tpl_vars['id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']]).")'>(...)veja mais...</a>",true);?>

                                <?php if ($_smarty_tpl->tpl_vars['contagem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']]!=0){?>
                                    <a href="javascript:visualizarChamado(<?php echo $_smarty_tpl->tpl_vars['id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']];?>
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
                        <td width="150"><?php if ($_smarty_tpl->tpl_vars['parecer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']]==''){?><span class="text-success"><center>Não definido</center></span><?php }else{ ?><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['parecer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']],150," <a href='#' class='btn-link' onclick='visualizarChamado(".((string)$_smarty_tpl->tpl_vars['idChama']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']]).")'>... veja mais...</a>",true);?>
<?php }?></td>
                        <td width="90"><a onclick="visualizarChamado(<?php echo $_smarty_tpl->tpl_vars['id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']];?>
)" class="btn btn-warning btn-xs">Visualizar</a></td>
                        


                    <?php endfor; endif; ?>
                <?php }else{ ?>
                    <tr>
                        <td><center><h4>Nenhum chamado aberto</h4> <a class="btn btn-default" href="novoChamado.php"> Abrir novo Chamado </a></td>
                        </tr>
                    <?php }?>
            </table>
        </div>

<?php }} ?>