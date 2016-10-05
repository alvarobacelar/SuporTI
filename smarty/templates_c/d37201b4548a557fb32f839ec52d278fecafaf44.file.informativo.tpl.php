<?php /* Smarty version Smarty-3.1.13, created on 2015-09-03 08:16:40
         compiled from "/home/www/html/SuporTI/smarty/templates/paginas/informativo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172530254855e82c18172286-95767514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd37201b4548a557fb32f839ec52d278fecafaf44' => 
    array (
      0 => '/home/www/html/SuporTI/smarty/templates/paginas/informativo.tpl',
      1 => 1396446467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172530254855e82c18172286-95767514',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'avisoEnvio' => 0,
    'idInforme' => 0,
    'informacao' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55e82c181c8bc4_15492546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e82c181c8bc4_15492546')) {function content_55e82c181c8bc4_15492546($_smarty_tpl) {?><div id="chamado-novo">

    <div id="informativo">
        <fieldset>
            <legend>Informativo Geral</legend>


            <p class="text-center text-info">
                OBS: O informativo enviado, será mostrado a todos os usuários
            </p>


            <?php echo $_smarty_tpl->tpl_vars['avisoEnvio']->value;?>


            <form name="informe" action="includes/controlles/envia_informe.php" method="post">
                Digite o informativo:<br />
                <textarea id="informe" class="resposta" name="informe"></textarea><br /><br />
                <button type="submit" class="btn btn-primary ">Enviar  <i class="icon-ok"></i></button>
            </form>
        </fieldset>
    </div>

</div>

<div id="chamado-novo">
    <?php if (isset($_smarty_tpl->tpl_vars['idInforme']->value)){?>
        <table class="table table-bordered">
            <br />
            <th><center>Informe</center></th><th><center>Opção</center></th>
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
                <tr class="warning text-error">
                    <td><strong><?php echo $_smarty_tpl->tpl_vars['informacao']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']];?>
</strong></td>
                    <td width="60"><a class="btn btn-danger" onclick="excluirInforme(<?php echo $_smarty_tpl->tpl_vars['idInforme']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']];?>
)">Deletar</a></td>
                </tr>
            <?php endfor; endif; ?>
        </table>
    <?php }else{ ?>
        <h3>Nenhum informe foi enviado</h3>
    <?php }?>
</div>
<?php }} ?>