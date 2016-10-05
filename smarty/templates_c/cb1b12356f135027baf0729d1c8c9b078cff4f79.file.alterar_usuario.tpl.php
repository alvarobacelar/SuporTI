<?php /* Smarty version Smarty-3.1.13, created on 2015-08-24 16:50:09
         compiled from "/home/www/html/SuporTI/smarty/templates/paginas/alterar_usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196281577455db75712367a1-81508664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb1b12356f135027baf0729d1c8c9b078cff4f79' => 
    array (
      0 => '/home/www/html/SuporTI/smarty/templates/paginas/alterar_usuario.tpl',
      1 => 1440087205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196281577455db75712367a1-81508664',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'alter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55db7571340d15_65397785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55db7571340d15_65397785')) {function content_55db7571340d15_65397785($_smarty_tpl) {?><div class="panel panel-default">
    <div class="panel-heading">Alterar Usuário</div>

    <div class="panel-body">

        <form action="includes/controlles/altera_usuario.php" method="post" name="cadastrar" class="form-horizontal" role="form" onSubmit="return verificaSenha()">

            <input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['alter']->value->id_usuario;?>
" />

            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Nome *</label>
                <div class="col-sm-6">
                    <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['alter']->value->nome;?>
" maxlength="100"  required autocomplete="on" placeholder="Nome..." />
                </div>
            </div>

            <div class="form-group">
                <label for="login" class="col-sm-2 control-label">Login *</label>
                <div class="col-sm-3">
                    <input name="login" type="text" id="login" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['alter']->value->login;?>
" maxlength="30" required autocomplete="on" placeholder="Login..." />
                </div>
                <div class="col-sm-3">
                    <select name="nivel" class="form-control" id="nivel" required>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['alter']->value->nivel;?>
"> <?php if ($_smarty_tpl->tpl_vars['alter']->value->nivel==0){?>Administrador<?php }?> <?php if ($_smarty_tpl->tpl_vars['alter']->value->nivel==1){?> Usuário <?php }?> <?php if ($_smarty_tpl->tpl_vars['alter']->value->nivel==2){?> Supervisor <?php }?></option>
                        <option value="0">Administrador</option>
                        <option value="2">Supervisor</option>
                        <option value="1">Usuario</option>
                    </select>  
                </div>
            </div>

            <div class="form-group">
                <label for="login" class="col-sm-2 control-label">Seção *</label>
                <div class="col-sm-4">
                    <input id="secao" name="secao" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['alter']->value->secao;?>
" maxlength="50" required autocomplete="on" placeholder="Seção..." />
                </div>
            </div>

            <!--<select name="secao" class="span4" id="secao" required>
                <option value=""> Escolha a Seção </option>
                <option value="1 Seção">1º Seção</option>
                <option value="2 Seção">2º Seção</option>
                <option value="3 Seção">3º Seção</option>
                <option value="4 Seção">4º Seção</option>
                <option value="Aprovisionamento">Aprovisionamento</option>
                <option value="Almoxarifado">Almoxarifado</option>
                <option value="Arquivo Btl">Arquivo Btl</option>
                <option value="Banda de Musica">Banda de Musica</option>
                <option value="Cmd Btl">Cmd Btl</option>
                <option value="Conformidade">Conformidade</option>
                <option value="Enfermaria">Enfermaria</option>
                <option value="Estação Rádio">Estação Rádio</option>
                <option value="Pel Com">Pelotão de Comunicação</option>
                <option value="Pel Obras">Pelotão de Obras</option>
                <option value="Pelotao de Manutencao">Pelotão de Manutenção(Garagem)</option>
                <option value="Relacoes Publicas">Relações Publicas</option>
                <option value="Subtenencia 1 Cia">Subtenencia 1ª Cia</option>
                <option value="Subtenencia 2 Cia">Subtenencia 2ª Cia</option>
                <option value="Subtenencia CCAp">Subtenencia CCAp</option>
                <option value="Subtenencia NPOR">Subtenencia NPOR</option>
                <option value="SALC">SALC</option>
                <option value="Sec Mob">Sec Mob</option>
                <option value="Sgtte 1 Cia Fuz">Sgtte 1º Cia Fuz</option>
                <option value="Sgtte 2 Cia Fuz">Sgtte 2º Cia Fuz</option>
                <option value="Sgtte CCAp">Sgtte CCAp</option>
                <option value="Sgtte NPOR">Sgtte NPOR</option>
                <option value="SFPC">SFPC</option>
                <option value="Sec Infor">Sec Infor</option>
                <option value="Setor de Pagamento">Setor de Pagamento</option>
                <option value="Tesouraria">Tesouraria</option>
            </select>-->

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-4">
                    <button type="submit" class="btn btn-large btn-primary ">Salvar  <i class="icon-ok"></i></button>
                    <button type="button" class="btn btn-danger">Cancelar  <i class="icon-remove"></i></button>
                </div>
            </div>

        </form>

    </div>
    <div class="panel-footer">
        <center><a class="btn btn-default" href="javascript:history.back()">Voltar</a></center>
    </div>
</div>
<?php }} ?>