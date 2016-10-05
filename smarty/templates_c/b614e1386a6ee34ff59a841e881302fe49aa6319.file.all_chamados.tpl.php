<?php /* Smarty version Smarty-3.1.13, created on 2015-08-25 17:29:16
         compiled from "/home/www/html/SuporTI/smarty/templates/paginas/all_chamados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155440727455dcd01c701f17-65940152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b614e1386a6ee34ff59a841e881302fe49aa6319' => 
    array (
      0 => '/home/www/html/SuporTI/smarty/templates/paginas/all_chamados.tpl',
      1 => 1439931332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155440727455dcd01c701f17-65940152',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'idChama' => 0,
    'tipo' => 0,
    'data' => 0,
    'hora' => 0,
    'secao' => 0,
    'chamadoSecao' => 0,
    'militarChamado' => 0,
    'assunto' => 0,
    'texto' => 0,
    'status' => 0,
    'paginacao' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55dcd01c7acf43_84812996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dcd01c7acf43_84812996')) {function content_55dcd01c7acf43_84812996($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/www/html/SuporTI/smarty/lib/plugins/modifier.truncate.php';
?><div class="panel panel-default">
    <div class="panel-heading">Todos os chamados</div>


    <table class="table table-bordered table-striped">
        <?php if (isset($_smarty_tpl->tpl_vars['idChama']->value)){?>
            <th><center>Data/ Hora</center></th><th><center>Seção</center></th><th><center>Militar</center></th><th><center>Tipo</center></th><th><center>Assunto</center></th><th><center>Texto</center></th><th><center>Situação</center></th><th><center>Opção</center></th>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['chamado'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['name'] = 'chamado';
$_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tipo']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['chamado']['total']);
?>

                <tr class="success">
                    <td width="70"> <?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
 <br /> <?php echo $_smarty_tpl->tpl_vars['hora']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
 </td>
                    <td width="90"> <?php if ($_smarty_tpl->tpl_vars['secao']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']]=="Sem Senha"){?> <?php echo $_smarty_tpl->tpl_vars['chamadoSecao']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['secao']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
 <?php }?> </td>
                    <td width="90"> <?php echo $_smarty_tpl->tpl_vars['militarChamado']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
 </td>
                    <td width="90"> <?php echo $_smarty_tpl->tpl_vars['tipo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
 </td>
                    <td width="70"> <?php echo $_smarty_tpl->tpl_vars['assunto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
 </td>
                    <td width="400"> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['texto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']],200," <a href='#' class='btn-link' onclick='visualizarChamado(".((string)$_smarty_tpl->tpl_vars['idChama']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']]).")'>(...)veja mais...</a>",true);?>
</td>
                    <td width="100">
                <center>
                    <strong>
                        <?php if ($_smarty_tpl->tpl_vars['status']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']]==1){?><span class="text-success"> Aberto</span> <?php }else{ ?><span class="text-error">Fechado</span> <?php }?>
                    </strong>
                </center>
                </td>
                <td width="80"> <a onclick="visualizarChamado(<?php echo $_smarty_tpl->tpl_vars['idChama']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
)" class="btn btn-warning btn-xs">Visualizar</a></td>
                </tr>

            <?php endfor; endif; ?>
        <?php }else{ ?>
            <tr>
                <td><center><h4>Não há nenhum chamado pendente</h4></center></td>
            </tr>
        <?php }?>
    </table>

    <?php echo $_smarty_tpl->tpl_vars['paginacao']->value;?>


    <div class="panel-footer">
        <center><a class="btn" href="javascript:history.back()">Voltar</a></center> 
    </div>

</div>
<?php }} ?>