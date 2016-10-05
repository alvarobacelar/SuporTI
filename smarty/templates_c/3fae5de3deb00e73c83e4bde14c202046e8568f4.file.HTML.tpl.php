<?php /* Smarty version Smarty-3.1.13, created on 2016-06-02 03:31:33
         compiled from "/home/www/html/SuporTI/smarty/templates/HTML.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1191908605574fa8953fad54-18908466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fae5de3deb00e73c83e4bde14c202046e8568f4' => 
    array (
      0 => '/home/www/html/SuporTI/smarty/templates/HTML.tpl',
      1 => 1441281353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1191908605574fa8953fad54-18908466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'reload' => 0,
    'nivel' => 0,
    'nivelUsuario' => 0,
    'usuario' => 0,
    'local' => 0,
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_574fa895a967b2_91774301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574fa895a967b2_91774301')) {function content_574fa895a967b2_91774301($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </title> 

        <?php if (isset($_smarty_tpl->tpl_vars['reload']->value)){?> <?php echo $_smarty_tpl->tpl_vars['reload']->value;?>
 <?php }?>

        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> <!-- layout responsive -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        

        <link rel="stylesheet" href="css/login.css" />
        <link rel="stylesheet" href="css/geral.css" />
        <link rel="stylesheet" href="css/layout.css" />
        <link rel="stylesheet" href="css/paginas.css" />


        <link rel="SHORTCUT ICON" href="imagens/banner2.png" />

    </head>

    <body>

        
            <script type="text/javascript" src="js/nicEdit-latest.js"></script> <script type="text/javascript">
                //<![CDATA[
                bkLib.onDomLoaded(function () {
                    nicEditors.allTextAreas()
                });
                //]]>
            </script>
        
        <?php if (isset($_smarty_tpl->tpl_vars['nivel']->value)){?>
            <?php if ($_smarty_tpl->tpl_vars['nivel']->value=="Administrador"||$_smarty_tpl->tpl_vars['nivel']->value=="Supervisor"){?> 


                    <nav class="navbar navbar-default navbar-fixed-top">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">SuporTI</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="./"><strong> SuporTI </strong></a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">

                                    <!--
                                    <li><a href="cadastrarOM.php"> Cadastrar OM </a></li>
                                    -->
                                    <?php if ($_smarty_tpl->tpl_vars['nivel']->value!="Supervisor"){?>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                                                Gerenciar Contas
                                                <b class="caret"></b>
                                            </a>
                                            <ul class="dropdown-menu">

                                                <li><a href="cadastrarNovo.php"> Cadastrar Nova Conta </a></li>
                                                <li><a href="usuariosCadastrados.php"> Usuarios Cadastrados </a></li>
                                            </ul>
                                        </li>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['nivel']->value=="Administrador"){?>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                                                Chamados
                                                <b class="caret"></b>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="meusChamados.php" title="Meus Chamados"> Meus Chamados </a></li>
                                                <li><a href="allChamados.php" title="Todos os Chamados"> Todos os Chamados </a></li>
                                                    <?php if ($_smarty_tpl->tpl_vars['nivel']->value=="Administrador"){?>
                                                    <li><a href="novoChamadoTelefonia.php" title="Novo Chamado"> Novo Chamado </a></li>
                                                    <?php }else{ ?>
                                                    <li><a href="novoChamado.php" title="Novo Chamado"> Novo Chamado </a></li>
                                                    <?php }?>
                                            </ul>
                                        </li>
                                        <?php if ($_smarty_tpl->tpl_vars['nivelUsuario']->value=="NAO"){?>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                                                    Relatórios
                                                    <b class="caret"></b>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="" title="Meus Chamados"> Todos os chamados </a></li>
                                                    <li><a href="" title="Todos os Chamados"> Chamados abertos </a></li>
                                                    <li><a href="gerarRelatorio.php" title="Relatorios de chamados"> Chamados fechados </a></li>
                                                </ul>
                                            </li>
                                        <?php }?>
                                    <?php }else{ ?>
                                        <li><a href="meusChamados.php" title="Meus Chamados"> Meus Chamados </a></li>
                                        <li><a href="allChamados.php" title="Todos os Chamados"> Todos os Chamados </a></li>
                                        <li><a href="gerarRelatorio.php" title="Relatorios de chamados"> Relatorio de Chamados </a></li>
                                        <?php }?>

                                    
                                    
                                    <?php if ($_smarty_tpl->tpl_vars['nivel']->value!="Supervisor"&&$_smarty_tpl->tpl_vars['nivelUsuario']->value=="NAO"){?>
                                        <li><a href="informativo.php" title="Informativo">Informativo </a></li>
                                        <?php }?>

                                </ul>

                                <ul class="nav navbar-nav navbar-right">

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
 <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="mudarSenha.php"> Alterar Senha</a></li>
                                            <li><a href="includes/funcoes/logOut.php"> Sair</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>


                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['nivel']->value=="Usuario"){?> 

                        <nav class="navbar navbar-default navbar-fixed-top">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">SuporTI</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="./"><strong> SuporTI </strong></a>
                                </div>

                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                                                Novo Chamado
                                                <b class="caret"></b>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="novoChamado.php" title="Informática"> <strong>Seção de Informática</strong> </a></li>
                                                <li><a href="novoChamadoTelefonia.php"> Pelotão de Comunicação </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="allChamados.php" title="Meus Chamados"> Meus Chamados </a></li>
                                    </ul>

                                    <ul class="nav navbar-nav navbar-right">

                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
 <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="mudarSenha.php"> Alterar Senha</a></li>
                                                <li><a href="includes/funcoes/logOut.php"> Sair</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>

                    <?php }?> 

                <?php }?>

                

                <?php if (isset($_smarty_tpl->tpl_vars['local']->value)){?>
                    <div class="local">
                        <ol class="breadcrumb"><?php echo $_smarty_tpl->tpl_vars['local']->value;?>
</ol>
                    </div>
                <?php }?>

                
                <div class="container" role="main">

                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['conteudo']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                </div>
                

                <div id="clear"></div>
                <div id="rodape2">
                    ©2013 SuporTI - Sistema de Chamado a Suporte de TI | <a href="#">Termo de Uso</a>
                    <p>
                        Desenvolvido por - <strong><a href="http://www.alvarobacelar.com" target="_blank">Sgt Álvaro</a> | Seção de Informática - 25ºBC</strong><br>
                        Versão 3.2
                    </p>
                </div>


            </body>

            <script src="js/jquery/jquery-1.8.3.min.js" type="text/javascript"></script>
            <script src="bootstrap/js/jquery-latest.js"></script>
            <script src="bootstrap/js/bootstrap.min.js"></script>
            <script src="js/verifica.js" type="text/javascript"></script>
            <script src="js/jquery/jquery.maskedinput.min.js" type="text/javascript"></script>
            <script src="js/navegador.js" type="text/javascript"></script>
            <script src="js/jquery/jquery.js" type="text/javascript"></script>

        </html><?php }} ?>