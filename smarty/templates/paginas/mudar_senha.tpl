<div id="chamado-novo">
    <div id="alter-senha">

        <fieldset>
            <legend>Alterar Senha</legend>
            <div class="text-error"><strong>{$senha}</strong></div>
            <form action="includes/controlles/mudar_senha.php" method="post" name="cadastrar" onSubmit="return verificaSenhaAltera()">

                Senha atual<br>
                <input name="senhaAtual" type="password" id="senhaAtual" value="" maxlength="40"  required autocomplete="on" placeholder="Senha..." /><br />

                Nova senha<br>
                <input name="novaSenha" type="password" id="senha" value="" maxlength="40"  required autocomplete="on" placeholder="Senha..." /><br />

                Repetir senha<br>
                <input name="novaSenha2" type="password" id="senha2" value="" maxlength="40" required autocomplete="on" placeholder="Repetir senha..." onblur="verificaSenha()" /><br>
                <span id="erro-senha"></span><br> {* DIV QUE MOSTRA SE SENHAS CONFEREM (COMPARAÇÃO NO JAVASCRIPT) *}

                <button type="submit" class="btn btn-primary btn-large">Salvar  <i class="icon-ok"></i></button>

            </form>

        </fieldset>
    </div> <!-- #alter-senha -->
</div> <!-- #chamado-novo -->
<center><a class="btn" href="javascript:history.back()">Voltar</a></center>