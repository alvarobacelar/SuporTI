<?php /* Smarty version Smarty-3.1.13, created on 2015-09-03 08:56:08
         compiled from "/home/www/html/SuporTI/smarty/templates/HTMLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78985093455db6d357031b9-73299047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9fb1eaee97f45816ee01ed4ef6e56e325f9fd36' => 
    array (
      0 => '/home/www/html/SuporTI/smarty/templates/HTMLogin.tpl',
      1 => 1441281351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78985093455db6d357031b9-73299047',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55db6d357683b3_15201166',
  'variables' => 
  array (
    'titulo' => 0,
    'conteudoLogin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55db6d357683b3_15201166')) {function content_55db6d357683b3_15201166($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </title>

        <meta name="viewport" content="width=device-width"> 

        <link rel="stylesheet" href="css/mobile.css" media="(max-width: 320px)">

        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> <!-- layout responsive -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        
        <link rel="stylesheet" href="css/login.css" />
        <link rel="stylesheet" href="css/geral_1.css" />
        <link rel="stylesheet" href="css/layout.css" />


        <link rel="SHORTCUT ICON" href="imagens/banner2.png" />

    </head>
    <body>

        <div class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><strong>SuporTI</strong> </a>
                    <p class="navbar-text">Sistema de chamados a <strong>Suporte</strong> de TI</p>   
                </div>

            </div><!--/.nav-collapse -->
        </div>

        <!--
        <div id="info">
            <div id="navegador"> </div>
            <p class="titulo_cen">Sistema de Suporte </p>
            <div id="imagem_login"> <img src="imagens/banner2.png" alt="img" align="center" /> </div>
        </div>
        -->

        <div class="container">

            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['conteudoLogin']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
            ﻿
        </div>

        <div id="rodape2">
            ©2013 SuporTI - Sistema de Chamado a Suporte de TI | <a href="#">Termo de Uso</a>
            <p>
                Desenvolvido por - <strong><a href="http://www.alvarobacelar.com" target="_blank">Sgt Álvaro</a> | Seção de Informática - 25ºBC</strong><br>
                Versão 3.2
            </p>
        </div>

    </div>

    <script src="js/jquery/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/jquery-latest.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/verifica.js" type="text/javascript"></script>
    <script src="js/jquery/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script src="js/navegador.js" type="text/javascript"></script>
    <script src="js/jquery/jquery.js" type="text/javascript"></script>

</body>

</html><?php }} ?>