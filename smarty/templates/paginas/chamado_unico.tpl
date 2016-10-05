<div class="panel panel-default">
    <div class="panel-heading">Meu Chamado</div>

    <div class="panel-body">

        <div class="text-success" style="padding-bottom: 10px;"><strong>{$apagado}</strong></div>
        <div id="view-chamado">
            <table class="table table-striped table-hover table-bordered ">
                {if isset($idChama)}
                    <th><center>Inicio do Chamado</center></th><th><center>Tipo</center></th><th><center>Serviço</center></th><th><center>Assunto</center></th><th><center>Texto</center></th><th><center>Opção</center></th>
                        {section name=m loop=$idChama}
                        <tr class="info">
                            <td width="150">{$data[m]} - {$hora[m]}</td>
                            <td width="90">{$tipo[m]}</td>
                            <td width="90">{$servico[m]}</td>
                            <td width="100">{$assunto[m]}</td>
                            <td>{$texto[m]}</td>
                            <td width="90"><a onclick="fecharChamadoAdmin({$idChama[m]})" class="btn btn-danger">Fechar</a></td>

                        </tr>
                        <tr class="warning">
                            {if isset($idResposta)}
                                <td colspan="6"><br>
                                    {* LOOP DE REPETIÇÃO PARA AS RESPOSTAS *}
                                    {section name=r loop=$idResposta}
                                        <p class="resposta">
                                            <strong>Respondido por {$respostaSecao[r]}:</strong> {$respostaTexto[r]} - <span style="font-size: 10px;"><em>respondido em {$data[m]} às {$hora[m]}</em></span>
                                            <a style="float: right;" onclick="excluirResposta({$idResposta[r]}, {$idChama[m]})"><i class="icon-remove"></i></a>
                                        </p>
                                    {/section}
                                </td>
                            {else}
                                <td colspan="6"><p class="resposta">Não há nenhuma resposta</p></td>
                            {/if}
                        </tr>

                        {* FORMULARIO DE RESPOSTA *}
                        <tr class="warning">
                            <td colspan="7">
                                <div>
                                    <form action="includes/controlles/resposta_chamado.php?id={$idChama[m]}" method="post" name="resposta">
                                        <textarea name="texto"cols="4" rows="5"></textarea>
                                        <button class="btn" type="submit">Responder</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    {/section}
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