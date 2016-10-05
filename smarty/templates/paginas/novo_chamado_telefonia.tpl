<div class="panel panel-default">
    <div class="panel-heading">Novo Chamado - Telefonia (Pel Com)</div>
    <div class="panel-body">      


        <div id="chamado">
            {$aviso}

            <form action="includes/controlles/novo_chamado.php" method="post" name="chamado" class="form-horizontal" role="form" onSubmit="return enviarDados();">
                <p class="destino"> </p> {* ONDE APARECERÁ OS ALERTAS *}

                <div class="aviso"> Todos os campos serão obrigatorios </div>

                <input type="hidden" id="secao" name="secao" value="Supervisor" /> <!-- SEÇÃO NO QUAL SERA O CHAMADO -->

                <div class="form-group">
                    <label for="tipo" class="col-sm-2 control-label">Tipo *</label>
                    <div class="col-sm-2">
                        <select id="tipo" name="tipo" title="Selecione o tipo de Serviço" required class="form-control">
                            <option value="">Escolha o tipo</option>
                            <option value="incidente">Incidente</option>
                            <option value="problema">Problema</option>
                            <option value="solicitacao">Solicitação</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tipo" class="col-sm-2 control-label">Serviço *</label>
                    <div class="col-sm-4">
                        <select id="servico" name="servico" title="Selecione o serviço" required class="form-control">
                            <option value="">Escolha o Serviço</option>
                            <option value="Problemas no aparelho">Problemas no aparelho</option>
                            <option value="Não realiza ligação interna/Externa">Não realiza ligação interna/Externa</option>
                            <option value="Aparelho Mudo">Aparelho Mudo</option>
                            <option value="Mudança do local do aparelho telefonico">Mudança do local do aparelho telefonico</option>
                            <option value="Problemas com senha">Problemas com senha</option>
                            <option value="Pedido de lista de ramais">Pedido de lista de ramais</option>
                            <option value="Problemas com câmeras de monitoramento">Problemas com câmeras de monitoramento</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="assunto" class="col-sm-2 control-label">Assunto *</label>
                    <div class="col-sm-5">
                        <input type="text" id="assunto" name="assunto" title="Escreva o assunto" class="form-control" value="" maxlength="100"  required autocomplete="on" placeholder="Assunto Referente ao serviço.." />
                    </div>
                </div>
                <input type="hidden" class="form-control" id="chamadoSecao" name="chamadoSecao" title="Seção" value="{$secaoUser}" class="span5" value="" maxlength="100" required autocomplete="on" />

                <div class="form-group">
                    <label for="militar" class="col-sm-2 control-label">Militar que realiza chamado *</label>
                    <div class="col-sm-5">
                        <input type="text" id="militar" name="militar" title="Nome do militar" class="form-control" value="" maxlength="100"  required autocomplete="on" placeholder="Sgt Alvaro" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="texto" class="col-sm-2 control-label">Texto *</label>
                    <div class="col-sm-5">
                        <textarea id="texto"  name="texto" title="Texto do chamado" cols="50" rows="30"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" id="buttonSubmitNovoChamado" class="btn btn-large btn-primary ">Enviar  <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></button>
                        <a href="novoChamado.php" class="btn btn-danger">Cancelar  <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>