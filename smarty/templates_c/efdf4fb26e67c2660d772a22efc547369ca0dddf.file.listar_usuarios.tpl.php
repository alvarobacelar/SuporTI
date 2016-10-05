<?php /* Smarty version Smarty-3.1.13, created on 2015-08-24 16:49:56
         compiled from "/home/www/html/SuporTI/smarty/templates/paginas/listar_usuarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89107655155db75648c3d26-04409424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efdf4fb26e67c2660d772a22efc547369ca0dddf' => 
    array (
      0 => '/home/www/html/SuporTI/smarty/templates/paginas/listar_usuarios.tpl',
      1 => 1440086785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89107655155db75648c3d26-04409424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reseta' => 0,
    'idUsuario' => 0,
    'nome2' => 0,
    'nivel2' => 0,
    'login' => 0,
    'secao' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55db7564a24af2_14749687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55db7564a24af2_14749687')) {function content_55db7564a24af2_14749687($_smarty_tpl) {?><div class="panel panel-default">
    <div class="panel-heading">Usuarios Cadastrados</div>

    <?php echo $_smarty_tpl->tpl_vars['reseta']->value;?>


    <table class="table table-bordered table-hover  table-striped">
        <th><center>Id</center></th><th><center>Usuario</center></th><th><center>Nivel de acesso</center></th><th><center>Login</center></th><th><center>Seção</center></th><th><center>Opção</center></th>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['a'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['idUsuario']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total']);
?>
            <tr class="success">
                <td><center><?php echo $_smarty_tpl->tpl_vars['idUsuario']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</center></td>
            <td><?php echo $_smarty_tpl->tpl_vars['nome2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</td>
            <td width="200"> 
                <?php if ($_smarty_tpl->tpl_vars['nivel2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]==0){?>
                    <strong>Administrador</strong>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['nivel2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]==2){?>
                    Telefonia
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['nivel2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]==3){?>
                    Técnico
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['nivel2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]==1){?>
                    Usuário
                <?php }?>
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['login']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['secao']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</td>
            <td width="200">
            <center>
                <a title="Ao resetar, a senha será o mesmo do login" onclick="javascript:resetarSenha(<?php echo $_smarty_tpl->tpl_vars['idUsuario']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
);" class="btn btn-info btn-xs"> Resetar Senha</a>
                <a title="Editar usuario" class="btn btn-xs btn-warning" onclick="javascript:editaUsuario(<?php echo $_smarty_tpl->tpl_vars['idUsuario']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
)" >Alterar</a>
            </center>
            </td>
            </tr>
        <?php endfor; endif; ?>
    </table>

    <center><a class="btn" href="javascript:history.back()">Voltar</a></center>
</div>
<?php }} ?>