<div class="panel panel-default">
    <div class="panel-heading">Novo Chamado TI (Sec Infor)
        {if isset($secaoA)} Visualizar chamado  {$secaoA} {else}<span style="font-size: 27px; color: red;"> <strong>ERRO! Nenhum chamado encontrado. <br>Tente Novamente</strong></span> {/if}
    </div>
    <div class="text-success" style="padding-bottom: 10px;"><strong>{$apagado}</strong></div>
    {$avisoResposta}<br />
    <div id="view-chamado">
        <table class="table table-striped table-hover table-bordered ">
            {if isset($idChama)}
                <th><center>Nr</center></th>
                <th><center>Data</center></th>
                <th><center>Seção</center></th>
                <th><center>Tipo</center></th>
                <th><center>Serviço</center></th>
                <th><center>Assunto</center></th>
                <th><center>Texto</center></th>
                <th><center>Opção</center></th>

                <tr class="info">
                    <td width="30">{$idChama}</td>
                    <td width="100">{$dataChamado} - {$horaChamado}</td>
                    <td width="90">{$chamadoSecao}</td>
                    <td width="90">{$tipo}</td>
                    <td width="110">{$servico}</td>
                    <td width="100">{$assunto}</td>
                    <td>{$texto}</td>

                    {if $status2 == 1}
                        <td width="90"><a onclick="fecharChamadoAdmin({$idChama})" class="btn btn-danger">Fechar</a></td>
                    {else}
                        <td width="90"><a class="btn btn-large btn-primary disabled">Chamado Fechado</a></td>
                    {/if}

                </tr>
                <tr class="warning">
                    <td colspan="8"><br>
                        {if $parecer != ""} {* VERIFICA SE O CHAMADO ESTÁ FECHADO E MOSTRA O PARECER DO CHAMADO *}
                                <div id="parecer-tecnico">
                                    <h4><center>Parecer Técnico ({if $situacao == 1}Solucionado{/if}{if $situacao == 2}Não solucionado{/if})</center></h4>
                                            {$parecer}
                                </div><br><br>
                            {/if}
                            {if isset($idResposta)}
                                {* LOOP DE REPETIÇÃO PARA AS RESPOSTAS *}
                                {section name=r loop=$idResposta}
                                    <div class="alert alert-danger" role="alert">
                                        <strong>Respondido por {$respostaSecao[r]}:</strong> {$respostaTexto[r]} <span class="label label-default"><em>respondido em {$dataResposta[r]} às {$horaResposta[r]}</em></span>
                                        <a style="float: right;" onclick="excluirResposta({$idResposta[r]}, {$idRetorno})"><i class="icon-remove"></i></a>
                                    </div>
                                {/section}
                            {else}
                                <div class="alert alert-success" role="alert">
                                    Não há nenhuma resposta
                                </div>
                            {/if}
                        </td>
                    </tr>

                    {* FORMULARIO DE RESPOSTA *}
                    <tr class="warning">
                        <td colspan="8">
                            <div>
                                <form action="includes/controlles/resposta_chamado.php?id={$idChama}" method="post" name="resposta" class="form-horizontal" role="form">
                                    <textarea name="texto" cols="4" rows="5"></textarea>
                                    <button class="btn btn-success" type="submit">Responder</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                {else}
                    <tr>
                        <td><center><a class="btn" href="novoChamado.php"> Abrir Novo Chamado </a></center></td>
                    </tr>
                {/if}
            </table>
        </div>

        <div class="panel-footer">
            <center><a class="btn btn-default" href="javascript:history.back()">Voltar</a></center>
        </div>
    </div>