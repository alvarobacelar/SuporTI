<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title> {$titulo} </title> 

        {if isset($reload)} {$reload} {/if}

        {* bootstrap *}
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> <!-- layout responsive -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        {* Bootstrap *}

        <link rel="stylesheet" href="css/login.css" />
        <link rel="stylesheet" href="css/geral.css" />
        <link rel="stylesheet" href="css/layout.css" />
        <link rel="stylesheet" href="css/paginas.css" />


        <link rel="SHORTCUT ICON" href="imagens/banner2.png" />

    </head>

    <body>

        {literal}
            <script type="text/javascript" src="js/nicEdit-latest.js"></script> <script type="text/javascript">
                //<![CDATA[
                bkLib.onDomLoaded(function () {
                    nicEditors.allTextAreas()
                });
                //]]>
            </script>
        {/literal}
        {if isset($nivel)}
            {if $nivel == "Administrador" || $nivel == "Supervisor"} {* SE O ADMINISTRADOR ESTIVER LOGADO ELE MOSTRA O MENU MAIS COMPLETO *}


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
                                    {if $nivel != "Supervisor"}
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
                                    {/if}

                                    {if $nivel == "Administrador"}
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                                                Chamados
                                                <b class="caret"></b>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="meusChamados.php" title="Meus Chamados"> Meus Chamados </a></li>
                                                <li><a href="allChamados.php" title="Todos os Chamados"> Todos os Chamados </a></li>
                                                    {if $nivel == "Administrador"}
                                                    <li><a href="novoChamadoTelefonia.php" title="Novo Chamado"> Novo Chamado </a></li>
                                                    {else}
                                                    <li><a href="novoChamado.php" title="Novo Chamado"> Novo Chamado </a></li>
                                                    {/if}
                                            </ul>
                                        </li>
                                        {if $nivelUsuario == "NAO"}
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
                                        {/if}
                                    {else}
                                        <li><a href="meusChamados.php" title="Meus Chamados"> Meus Chamados </a></li>
                                        <li><a href="allChamados.php" title="Todos os Chamados"> Todos os Chamados </a></li>
                                        <li><a href="gerarRelatorio.php" title="Relatorios de chamados"> Relatorio de Chamados </a></li>
                                        {/if}

                                    {*<li><a href="novoChamado.php" title="Novo Chamado"> Novo Chamado </a></li>*}
                                    {*MENU DROPDOWN*}
                                    {if $nivel != "Supervisor" && $nivelUsuario == "NAO"}
                                        <li><a href="informativo.php" title="Informativo">Informativo </a></li>
                                        {/if}

                                </ul>

                                <ul class="nav navbar-nav navbar-right">

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{$usuario} <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="mudarSenha.php"> Alterar Senha</a></li>
                                            <li><a href="includes/funcoes/logOut.php"> Sair</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>


                {/if}

                {if $nivel == "Usuario"} {* SE O USUARIO ESTIVER LOGADO ELE MOSTRA ESSE MENU *}

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
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{$usuario} <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="mudarSenha.php"> Alterar Senha</a></li>
                                                <li><a href="includes/funcoes/logOut.php"> Sair</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>

                    {/if} {* FIM DA COMPARAÇÃO DO MENU *}

                {/if}

                {* VERIFICANDO SE O NAVEGADOR É O INTERNET EXPLORE, SE FOR MOSTRARÁ UM AVISO *}

                {if isset($local)}
                    <div class="local">
                        <ol class="breadcrumb">{$local}</ol>
                    </div>
                {/if}

                {* DIV DE CONTEUDO GERAL DO SISTEMA *}
                <div class="container" role="main">

                    {include file=$conteudo}
                </div>
                {* FIM DA DIV DE CONTEUDO DO SISTEMA *}

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

        </html>