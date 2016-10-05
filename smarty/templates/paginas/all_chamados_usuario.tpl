<div class="panel panel-default">
    <div class="panel-heading">Todos os chamados</div>



    <table class="table table-bordered table-hover  table-striped">
        {if isset($idChama)}
            <th><center>Nr</center></th>
            <th><center>Data/ Hora</center></th>
            <th><center>Serviço</center></th>
            <th><center>Assunto</center></th>
            <th><center>Texto</center></th>
            <th><center>Situação</center></th>
            <th><center>Parecer Técnico</center></th>
            <th><center>Opção</center></th>
                {section name=chamado loop=$tipo}

                <tr class="success">
                    <td width="30"> {$idChama[chamado]} </td>
                    <td > {$data[chamado]} <br /> {$hora[chamado]} </td>
                    <td > {$servico[chamado]} </td>
                    <td > {$assunto[chamado]} </td>
                    <td> {$texto[chamado]|truncate:200:" <a href='#' class='btn-link' onclick='visualizarChamado({$idChama[chamado]})'>(...)veja mais...</a>":true}</td>
                    <td><center><strong>{if $status[chamado] == 1}<span class="text-success"> Aberto</span> {else}<span class="text-error">Fechado</span> {/if} </strong></center></td>
                    <td>{if $parecer[chamado] == ""}<span class="text-success"><center>Não definido</center></span>{else}{$parecer[chamado]|truncate:150:" <a href='#' class='btn-link' onclick='visualizarChamado({$idChama[chamado]})'>...veja mais...</a>":true}{/if}</td>
                    <td> <a onclick="visualizarChamado({$idChama[chamado]})" class="btn btn-warning btn-xs">Visualizar</a></td>
                </tr>

            {/section}
        {else}
            <tr>
                <td><center><h4>Não há nenhum chamado pendente</h4></center></td>
            </tr>
        {/if}
    </table>

    <div class="panel-footer">
        <center><a class="btn btn-default" href="javascript:history.back()">Voltar</a></center>
    </div>

</div>