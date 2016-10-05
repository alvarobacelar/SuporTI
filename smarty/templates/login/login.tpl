<div class="col-md-6 col-md-offset-3">
    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h4>Entre na sua conta, ou abra um chamado sem senha</h4>
        {$senha}{* mostragem de erro de acesso *}
        {if $erro == "Usuario ou senha não correspondem"}
            <div id="erro-login"> {$erro} </div> {* mostragem de erro de acesso *}
        {else}
            <div id="erro-login2"> {$erro} </div> {* mostragem de erro de acesso *}
        {/if}

        <form name="login" method="post" action="includes/controlles/logar.php" class="form-horizontal" role="form">
            <div class="form-group">
                <label for="login" class="col-sm-2 control-label">Usuário</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="login" name="login" title="Coloque seu login" value="" autofocus required autocomplete="on" placeholder="Login" />
                </div>
            </div>
            <div class="form-group">
                <label for="senha" class="col-sm-2 control-label">Senha</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="senha" name="senha" title="Coloque sua senha" value="" required autocomplete="off" placeholder="Senha" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-1">
                    <button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Entrar</button>
                </div>
            </div>


            <!-- Single button -->
            <div class="btn-group btn-group-justified" role="group">
                <div class="btn-group" role="group">
                    <a href="#" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <strong><span style="font-size: 16px;"> Chamado Rápido Sem Senha</strong> </span><span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="novaSolicitacao.php" title="Chamado sem Senha" style="font-size: 16px;"><strong> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span> Seção de Informática</strong></a></li>
                        <li><a href="novaSolicitacaoPelCom.php" title="Chamado sem Senha" style="font-size: 16px;"><strong><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> Pelotão de Comunicação</strong></a>    </li>
                    </ul>
                </div>
            </div>

        </form>

    </div>
</div>


