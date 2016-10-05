<div id="chamado-novo">

    <div id="informativo">
        <fieldset>
            <legend>Informativo Geral</legend>


            <p class="text-center text-info">
                OBS: O informativo enviado, será mostrado a todos os usuários
            </p>


            {$avisoEnvio}

            <form name="informe" action="includes/controlles/envia_informe.php" method="post">
                Digite o informativo:<br />
                <textarea id="informe" class="resposta" name="informe"></textarea><br /><br />
                <button type="submit" class="btn btn-primary ">Enviar  <i class="icon-ok"></i></button>
            </form>
        </fieldset>
    </div>

</div>

<div id="chamado-novo">
    {if isset($idInforme)}
        <table class="table table-bordered">
            <br />
            <th><center>Informe</center></th><th><center>Opção</center></th>
                {section name=n loop=$idInforme}
                <tr class="warning text-error">
                    <td><strong>{$informacao[n]}</strong></td>
                    <td width="60"><a class="btn btn-danger" onclick="excluirInforme({$idInforme[n]})">Deletar</a></td>
                </tr>
            {/section}
        </table>
    {else}
        <h3>Nenhum informe foi enviado</h3>
    {/if}
</div>
