

{if isset($idInforme)} {* SE HOUVER ALGUM INFORME, SERÁ MOSTRADO AQUI PARA O USUARIO *}

        {section name=n loop=$idInforme}
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>{$informacao[n]}</strong>
            </div>
        {/section}
    {/if}

    {$fredBackChamado}
    <strong>{$avisoResposta}</strong>

    <div class="panel panel-default">
        <div class="panel-heading"><strong>Chamados Abertos</strong></div>

        <div class="table-responsive table-bordered">
            <table class="table table-bordered">
                {if isset($idCham)}  {* SE EXISTIR CHAMADO ELE MOSTRA TODOS OS CHAMADOS ABERTOS *}
                        {section name=chamado loop=$tipo}
                            <th><center>Nr</center></th>
                            <th><center>Data/ Hora</center></th>
                            <th><center>Seção</center></th>
                            <th><center>Realizado </center></th>
                            <th><center>Serviço</center></th>
                            <th><center>Tipo</center></th>
                            <th><center>Assunto</center></th>
                            <th><center>Texto</center></th>
                            <th><center>Opção</center></th>
                            <tr class="success">
                                <td width="30">{$idCham[chamado]}</td>
                                <td width="90"> {$data[chamado]} - {$hora[chamado]} </td>
                                <td width="80"> {if $secao[chamado] == "Sem Senha"} {$chamadoSecao[chamado]} {else} {$secao[chamado]} {/if} </td>
                                <td width="90"> {$militar[chamado]} </td>
                                <td width="100"> {$tipo[chamado]} </td>
                                <td width="00"> {$servico[chamado]} </td>
                                <td width="100"> {$assunto[chamado]} </td>
                                <td width="300"> {$texto[chamado]|truncate:250:" <a href='#' class='btn-link' onclick='visualizarChamado({$idCham[chamado]})'>(...)veja mais...</a>":true}</td>
                                <td width="150">
                            <center>
                                <a onclick="fecharChamadoAdmin({$idCham[chamado]})" class="btn btn-danger btn-xs">Fechar</a>
                                <a onclick="visualizarChamado({$idCham[chamado]})" class="btn btn-info btn-xs">Responder</a>
                            </center>
                            </td>
                            </tr>
                            {* FORMULARIO DE RESPOSTA *}
                            {if $contagemResposta[chamado] != 0}
                                <tr class="warning">
                                    <td colspan="9">
                                        {*aqui mostrará quantas resposta tem cada chamado*}<br>

                                        <a class="btn btn-xs btn-info" href="javascript:visualizarChamado({$idCham[chamado]})">

                                            {if $contagemResposta[chamado] > 1}
                                                {$contagemResposta[chamado]} respostas
                                            {else}
                                                {$contagemResposta[chamado]} resposta
                                            {/if}

                                        </a>
                                        {if $respostaNova[chamado] != 0}
                                            <a onclick="visualizarChamado({$idCham[chamado]})" class="btn btn-danger btn-xs"><strong>{$respostaNova[chamado]} nova </strong></a>
                                        {/if}
                                    </td>
                                </tr>
                            {/if}
                        {/section}
                    {else} {* SE NÃO EXISTIR CHAMADO, MOSTRARÁ O AVISO QUE NÃO EXISTE NENHUM CHAMADO *}

                        <div class="alert alert-success" role="alert">Não há nenhum chamado pendente</div>

                    {/if}
                </table>
            </div>

        </div>


