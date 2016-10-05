<div class="panel panel-default">
    <div class="panel-heading">        

        Meus Chamados
    </div>
    <div class="panel-body">
        {$apagado}
        {$avisoResposta}<br />
        <div id="view-chamado">
            <table class="table table-striped table-hover table-bordered ">
                {if isset($idChama)}
                    <th><center>Nr</center></th>
                    <th><center>Inicio do Chamado</center></th>
                    <th><center>Tipo</center></th>
                    <th><center>Serviço</center></th>
                    <th><center>Assunto</center></th>
                    <th><center>Texto</center></th>
                    <th><center>Opção</center></th>

                    <tr class="info">
                        <td width="30">{$idChama}</td>
                        <td width="150">{$dataChamado} - {$horaChamado}</td>
                        <td width="90">{$tipo}</td>
                        <td width="90">{$servico}</td>
                        <td width="100">{$assunto}</td>
                        <td>{$texto}</td>

                        {if $status2 == 1}
                            <td width="90">{*<a onclick="fecharChamado({$idChama})" class="btn btn-danger">Fechar</a>*}</td>
                        {else}
                            <td width="90"><a class="btn btn-large btn-primary disabled">Chamado Fechado</a></td>
                        {/if}

                    </tr>
                    <tr class="warning">
                        <td colspan="7"><br>
                            {if $situacao != 0} {* VERIFICA SE O CHAMADO ESTÁ FECHADO E MOSTRA O PARECER DO CHAMADO *}
                                    <div id="parecer-tecnico">
                                        <h4><center>{if $situacao == 0} Fechado pelo usuario {/if}Parecer Técnico ({if $situacao == 1}Solucionado{/if}{if $situacao == 2}Não solucionado{/if})</center></h4>
                                                {$parecer}
                                    </div><br><br>
                                {/if}
                                {if isset($idResposta)}

                                    {section name=r loop=$idResposta}
                                        <div class="alert alert-danger" role="alert">
                                                <strong>Respondido por {$respostaSecao[r]}:</strong> {$respostaTexto[r]} <span class="label label-default"><em>respondido em {$dataResposta[r]} às {$horaResposta[r]}</em></span>
                                            <a style="float: right;" onclick="excluirResposta({$idResposta[r]}, {$idRetorno})"><i class="icon-remove"></i></a>
                                        </div>
                                    {/section}
                                {else}
                                    <p class="resposta">
                                        Não há nenhuma resposta
                                    </p>
                                {/if}
                            </td>
                        </tr>

                        {* FORMULARIO DE RESPOSTA *}
                        <tr class="warning">
                            <td colspan="7">
                                <div>
                                    <form action="includes/controlles/resposta_chamado.php?id={$idRetorno}" method="post" name="resposta">
                                        <textarea name="texto" cols="4" rows="5"></textarea>
                                        <button class="btn btn-success" type="submit">Responder</button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                    {else}
                        <tr>
                            <td><center><h4>Nenhum chamado aberto</h4> <a class="btn" href="novoChamado.php"> Abrir Novo Chamado </a></center></td>
                        </tr>
                    {/if}
                </table>
            </div>
        </div>
        <div class="panel-footer">
            <center><a class="btn btn-default" href="javascript:history.back()">Voltar</a></center>
        </div>
    </div>
