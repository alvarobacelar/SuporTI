<div class="panel panel-default">
    <div class="panel-heading">Todos os chamados</div>


    <table class="table table-bordered table-striped">
        {if isset($idChama)}
            <th><center>Data/ Hora</center></th><th><center>Seção</center></th><th><center>Militar</center></th><th><center>Tipo</center></th><th><center>Assunto</center></th><th><center>Texto</center></th><th><center>Situação</center></th><th><center>Opção</center></th>
                {section name=chamado loop=$tipo}

                <tr class="success">
                    <td width="70"> {$data[chamado]} <br /> {$hora[chamado]} </td>
                    <td width="90"> {if $secao[chamado] == "Sem Senha"} {$chamadoSecao[chamado]} {else} {$secao[chamado]} {/if} </td>
                    <td width="90"> {$militarChamado[chamado]} </td>
                    <td width="90"> {$tipo[chamado]} </td>
                    <td width="70"> {$assunto[chamado]} </td>
                    <td width="400"> {$texto[chamado]|truncate:200:" <a href='#' class='btn-link' onclick='visualizarChamado({$idChama[chamado]})'>(...)veja mais...</a>":true}</td>
                    <td width="100">
                <center>
                    <strong>
                        {if $status[chamado] == 1}<span class="text-success"> Aberto</span> {else}<span class="text-error">Fechado</span> {/if}
                    </strong>
                </center>
                </td>
                <td width="80"> <a onclick="visualizarChamado({$idChama[chamado]})" class="btn btn-warning btn-xs">Visualizar</a></td>
                </tr>

            {/section}
        {else}
            <tr>
                <td><center><h4>Não há nenhum chamado pendente</h4></center></td>
            </tr>
        {/if}
    </table>

    {$paginacao}

    <div class="panel-footer">
        <center><a class="btn" href="javascript:history.back()">Voltar</a></center> 
    </div>

</div>
