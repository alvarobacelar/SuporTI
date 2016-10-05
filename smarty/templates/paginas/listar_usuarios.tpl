<div class="panel panel-default">
    <div class="panel-heading">Usuarios Cadastrados</div>

    {$reseta}

    <table class="table table-bordered table-hover  table-striped">
        <th><center>Id</center></th><th><center>Usuario</center></th><th><center>Nivel de acesso</center></th><th><center>Login</center></th><th><center>Seção</center></th><th><center>Opção</center></th>
            {section name=a loop=$idUsuario}
            <tr class="success">
                <td><center>{$idUsuario[a]}</center></td>
            <td>{$nome2[a]}</td>
            <td width="200"> {* VERIFICANDO O NIVEL DE ACESSO, SE É USUARIO COMUM OU ADMINISTRADOR *}
                {if $nivel2[a] == 0}
                    <strong>Administrador</strong>
                {/if}
                {if $nivel2[a] == 2}
                    Telefonia
                {/if}
                {if $nivel2[a] == 3}
                    Técnico
                {/if}
                {if $nivel2[a] == 1}
                    Usuário
                {/if}
            </td>
            <td>{$login[a]}</td>
            <td>{$secao[a]}</td>
            <td width="200">
            <center>
                <a title="Ao resetar, a senha será o mesmo do login" onclick="javascript:resetarSenha({$idUsuario[a]});" class="btn btn-info btn-xs"> Resetar Senha</a>
                <a title="Editar usuario" class="btn btn-xs btn-warning" onclick="javascript:editaUsuario({$idUsuario[a]})" >Alterar</a>
            </center>
            </td>
            </tr>
        {/section}
    </table>

    <center><a class="btn" href="javascript:history.back()">Voltar</a></center>
</div>
