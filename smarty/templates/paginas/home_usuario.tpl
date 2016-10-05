

{if isset($idInforme)} {* SE HOUVER ALGUM INFORME, SERÁ MOSTRADO AQUI PARA O USUARIO *}
        {section name=n loop=$idInforme}
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>{$informacao[n]}</strong>

            </div>
        {/section}
    {/if}
    {$aviso}
    {$fredBackChamado}

    <div class="panel panel-default">
        <div class="panel-heading">Todos os chamados</div>



        <div class="table-responsive table-bordered">
            <table class="table table-striped table-hover table-bordered ">
                {if isset($id)}
                    <th><center>Nr</center></th>
                    <th><center>Data / Hora</center></th>
                    <th><center>Seção Resp.</center></th>
                    <th><center>Tipo de Serviço</center></th>
                    <th><center>Assunto</center></th>
                    <th><center>Texto</center></th>
                    <th><center>Situação</center></th>
                    <th><center>Parecer técnico</center></th>
                    <th><center>Opção</center></th>
                        {section name=m loop=$id}
                        <tr class="info">
                            <td>{$id[m]}</td>
                            <td>{$data[m]}<br /> {$hora[m]}</td>
                            <td>{if $secaoResp[m] == "Supervisor"} Pel Com {else} Seção de Informática {/if}</td>
                            <td>{$tipo[m]}</td>
                            <td width="100">{$assunto[m]}</td>
                            <td width="400">{$texto[m]|truncate:200:" <a href='#' class='btn-link' onclick='visualizarChamado({$id[m]})'>(...)veja mais...</a>":true}
                                {if $contagem[m] != 0}
                                    <a href="javascript:visualizarChamado({$id[m]});">
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
                        <td width="150">{if $parecer[m] == ""}<span class="text-success"><center>Não definido</center></span>{else}{$parecer[m]|truncate:150:" <a href='#' class='btn-link' onclick='visualizarChamado({$idChama[m]})'>... veja mais...</a>":true}{/if}</td>
                        <td width="90"><a onclick="visualizarChamado({$id[m]})" class="btn btn-warning btn-xs">Visualizar</a></td>
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
                        <td><center><h4>Nenhum chamado aberto</h4> <a class="btn btn-default" href="novoChamado.php"> Abrir novo Chamado </a></td>
                        </tr>
                    {/if}
            </table>
        </div>

