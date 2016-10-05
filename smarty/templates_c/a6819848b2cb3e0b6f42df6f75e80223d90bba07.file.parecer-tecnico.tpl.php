<?php /* Smarty version Smarty-3.1.13, created on 2015-08-24 16:38:13
         compiled from "/home/www/html/SuporTI/smarty/templates/paginas/parecer-tecnico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84475014655db72a503ba14-50168118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6819848b2cb3e0b6f42df6f75e80223d90bba07' => 
    array (
      0 => '/home/www/html/SuporTI/smarty/templates/paginas/parecer-tecnico.tpl',
      1 => 1439926500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84475014655db72a503ba14-50168118',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55db72a50b1037_52491354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55db72a50b1037_52491354')) {function content_55db72a50b1037_52491354($_smarty_tpl) {?><div class="panel panel-default">
    <div class="panel-heading">Parecer técnico</div>

    <div class="panel-body">

        <form action="includes/controlles/parecer_tecnico.php" method="post" name="cadastrar" class="form-horizontal" role="form">
            <div class="alert alert-info" role="alert">
                <strong>OBS: Se escolher a opção "Apenas Fechar" não precisará escrever nenhum parecer técnico</strong>
            </div>

            <input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />

            <div class="form-group has-error">
                <label for="situacao" class="col-sm-3 control-label">Escolha a solução</label>
                <div class="col-sm-3">
                    <select id="situacao" class="form-control" name="situacao" required="">
                        <option value="">Escolha a solução</option>
                        <option value="0">Apenas fechar</option>
                        <option value="1">Solucionado</option>
                        <option value="2">Não solucionado</option>
                    </select>
                </div>
            </div>


            <div class="form-group has-error">
                <label for="situacao" class="col-sm-3 control-label"> Qual é o parecer técnico desse chamado?</label>
                <div class="col-sm-4">
                    <textarea class="resposta" name="tecnico"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-4">
                    <button type="submit" class="btn btn-lg btn-primary">Enviar</button>
                </div>
            </div>

        </form>
    </div>
    <div class="panel-footer">
        <center><a class="btn btn-default" href="javascript:history.back()">Voltar</a></center>
    </div>
</div>

<?php }} ?>