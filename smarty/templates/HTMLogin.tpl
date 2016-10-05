<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title> {$titulo} </title>

        <meta name="viewport" content="width=device-width"> 

        <link rel="stylesheet" href="css/mobile.css" media="(max-width: 320px)">

        {* bootstrap *}
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> <!-- layout responsive -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        {* Bootstrap *}
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
            <div id="navegador"> </div>{* mensagem do navegador *}
            <p class="titulo_cen">Sistema de Suporte </p>
            <div id="imagem_login"> <img src="imagens/banner2.png" alt="img" align="center" /> </div>
        </div>
        -->

        <div class="container">

            {include file=$conteudoLogin} 
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

</html>