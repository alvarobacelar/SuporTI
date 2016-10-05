<div class="panel panel-default">
    <div class="panel-heading">Meus chamados</div>


    <table class="table table-striped table-hover table-bordered ">
        {if isset($idChama)}
            <th><center>Inicio do Chamado</center></th><th><center>Tipo</center></th><th><center>Serviço</center></th><th><center>Assunto</center></th><th><center>Texto</center></th><th><center>Situação</center></th><th><center>Parecer</center></th><th><center>Opção</center></th>
                {section name=m loop=$idChama}
                <tr class="info">
                    <td width="50">{$data[m]} - {$hora[m]}</td>
                    <td width="90">{$tipo[m]}</td>
                    <td width="90">{$servico[m]}</td>
                    <td width="100">{$assunto[m]}</td>
                    <td>{$texto[m]}
                        {if $contagem[m] != 0}
                            <a href="javascript:visualizarChamado({$idChama[m]});">
                                <div class="quant-resposta">
                                    {if $contagem[m] <= 1}
                                        {$contagem[m]} nova resposta
                                    {else}
                                        {$contagem[m]} novas mensagens
                                    {/if}
                                </div>
                            </a>
                        {/if}
                    </td>
                    <td width="60">
                <center>
                    <strong>
                        {if $status[m] == 1}<span class="text-success"> Aberto</span> {else}<span class="text-error">Fechado</span> {/if}
                    </strong>
                </center>
                </td>
                <td width="120">{if $parecer[m] == ""}<span class="text-success"><center>Não definido</center></span>{else}{$parecer[m]}{/if}</td>
                <td width="80"><a class="btn btn-warning btn-xs" onclick="visualizarChamado({$idChama[m]})">Visualizar</a></td>
                {*
                </tr>
                <tr class="warning">
                <td colspan="6">
                <div class="input-append">
                <form action="includes/controlles/resposta_chamado.php?id={$idChama[m]}" method="post" name="resposta">
                <input type="text" name="texto" id="texto" class="input-xxlarge" value="" required autocomplete="off" placeholder="Responda..." />
                <button class="btn" type="submit">Responder</button>
                </form>
                </div>
                </td>
                </tr>
                *}


            {/section}
        {else}
            <tr>
                <td><center><h4>Nenhum chamado aberto</h4> <a class="btn btn-default" href="novoChamado.php"> Abrir Novo Chamado </a></center></td>
            </tr>
        {/if}
    </table>
 
    <br>
    <center><a class="btn btn-default" href="javascript:history.back()">Voltar</a></center>
</div>
   