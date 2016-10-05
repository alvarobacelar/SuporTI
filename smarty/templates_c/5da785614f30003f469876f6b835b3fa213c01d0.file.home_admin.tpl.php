<?php /* Smarty version Smarty-3.1.13, created on 2015-09-03 08:40:29
         compiled from "/home/www/html/SuporTI/smarty/templates/paginas/home_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105540155255db6d3aa3f5b8-07420227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5da785614f30003f469876f6b835b3fa213c01d0' => 
    array (
      0 => '/home/www/html/SuporTI/smarty/templates/paginas/home_admin.tpl',
      1 => 1441280426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105540155255db6d3aa3f5b8-07420227',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55db6d3aa90e97_21968587',
  'variables' => 
  array (
    'idInforme' => 0,
    'informacao' => 0,
    'fredBackChamado' => 0,
    'avisoResposta' => 0,
    'idCham' => 0,
    'tipo' => 0,
    'data' => 0,
    'hora' => 0,
    'secao' => 0,
    'chamadoSecao' => 0,
    'militar' => 0,
    'servico' => 0,
    'assunto' => 0,
    'texto' => 0,
    'contagemResposta' => 0,
    'respostaNova' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55db6d3aa90e97_21968587')) {function content_55db6d3aa90e97_21968587($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/www/html/SuporTI/smarty/lib/plugins/modifier.truncate.php';
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

    <?php echo $_smarty_tpl->tpl_vars['fredBackChamado']->value;?>

    <strong><?php echo $_smarty_tpl->tpl_vars['avisoResposta']->value;?>
</strong>

    <div class="panel panel-default">
        <div class="panel-heading"><strong>Chamados Abertos</strong></div>

        <div class="table-responsive table-bordered">
            <table class="table table-bordered">
                <?php if (isset($_smarty_tpl->tpl_vars['idCham']->value)){?>  
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
                            <th><center>Nr</center></th>
                            <th><center>Data/ Hora</center></th>
                            <th><center>Seção</center></th>
                            <th><center>Realizado </center></th>
                            <th><center>Serviço</center></th>
                            <th><center>Tipo</center></th>
                            <th><center>Assunto</center></th>
                            <th><center>Texto</center></th>
                            <th><center>Opção</center></th>
                            <tr class="success">
                                <td width="30"><?php echo $_smarty_tpl->tpl_vars['idCham']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
</td>
                                <td width="90"> <?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
 - <?php echo $_smarty_tpl->tpl_vars['hora']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
 </td>
                                <td width="80"> <?php if ($_smarty_tpl->tpl_vars['secao']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']]=="Sem Senha"){?> <?php echo $_smarty_tpl->tpl_vars['chamadoSecao']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['secao']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
 <?php }?> </td>
                                <td width="90"> <?php echo $_smarty_tpl->tpl_vars['militar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
 </td>
                                <td width="100"> <?php echo $_smarty_tpl->tpl_vars['tipo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
 </td>
                                <td width="00"> <?php echo $_smarty_tpl->tpl_vars['servico']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
 </td>
                                <td width="100"> <?php echo $_smarty_tpl->tpl_vars['assunto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
 </td>
                                <td width="300"> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['texto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']],250," <a href='#' class='btn-link' onclick='visualizarChamado(".((string)$_smarty_tpl->tpl_vars['idCham']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']]).")'>(...)veja mais...</a>",true);?>
</td>
                                <td width="150">
                            <center>
                                <a onclick="fecharChamadoAdmin(<?php echo $_smarty_tpl->tpl_vars['idCham']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
)" class="btn btn-danger btn-xs">Fechar</a>
                                <a onclick="visualizarChamado(<?php echo $_smarty_tpl->tpl_vars['idCham']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
)" class="btn btn-info btn-xs">Responder</a>
                            </center>
                            </td>
                            </tr>
                            
                            <?php if ($_smarty_tpl->tpl_vars['contagemResposta']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']]!=0){?>
                                <tr class="warning">
                                    <td colspan="9">
                                        <br>

                                        <a class="btn btn-xs btn-info" href="javascript:visualizarChamado(<?php echo $_smarty_tpl->tpl_vars['idCham']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
)">

                                            <?php if ($_smarty_tpl->tpl_vars['contagemResposta']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']]>1){?>
                                                <?php echo $_smarty_tpl->tpl_vars['contagemResposta']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
 respostas
                                            <?php }else{ ?>
                                                <?php echo $_smarty_tpl->tpl_vars['contagemResposta']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
 resposta
                                            <?php }?>

                                        </a>
                                        <?php if ($_smarty_tpl->tpl_vars['respostaNova']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']]!=0){?>
                                            <a onclick="visualizarChamado(<?php echo $_smarty_tpl->tpl_vars['idCham']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
)" class="btn btn-danger btn-xs"><strong><?php echo $_smarty_tpl->tpl_vars['respostaNova']->value[$_smarty_tpl->getVariable('smarty')->value['section']['chamado']['index']];?>
 nova </strong></a>
                                        <?php }?>
                                    </td>
                                </tr>
                            <?php }?>
                        <?php endfor; endif; ?>
                    <?php }else{ ?> 

                        <div class="alert alert-success" role="alert">Não há nenhum chamado pendente</div>

                    <?php }?>
                </table>
            </div>

        </div>


<?php }} ?>