<div class="panel panel-default">
    <div class="panel-heading">Novo chamado rápido TI (Sec Infor)</div>
    <div class="panel-body">      

        <div id="chamado">
            {$aviso}

            <form action="includes/controlles/novo_chamado.php" method="post" name="chamado" class="form-horizontal" role="form" onSubmit="return enviarDados();">
                <p class="destino"> </p> {* ONDE APARECERÁ OS ALERTAS *}
                <div class="aviso"> Todos os campos serão obrigatorios </div>

                <input type="hidden" id="secao" name="secao" value="Administrador" /> <!-- SEÇÃO NO QUAL SERA O CHAMADO -->

                <div class="form-group">
                    <label for="tipo" class="col-sm-2 control-label">Tipo *</label>
                    <div class="col-sm-2">
                        <select class="form-control" id="tipo" name="tipo" title="Selecione o tipo de Serviço" required >
                            <option value="">Tipo de chamado</option>
                            <option value="incidente">Incidente</option>
                            <option value="problema">Problema</option>
                            <option value="solicitacao">Solicitação</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tipo" class="col-sm-2 control-label">Serviço *</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="servico" name="servico" title="Selecione o serviço" required >
                            <option value="">Escolha o Serviço</option>
                            <option value="Atualização de antivirus">Atualização de Antivírus</option>
                            <option value="Cadastro de endereço de IP">Cadastro de endereço IP</option>
                            <option value="Configurar impressora">Configuração de impressoras</option>
                            <option value="Configuração de programas">Configuração de programas</option>
                            <option value="Copia de seguranca">Cópia de Segurança</option>
                            <option value="Criar conta de acesso à internet">Criar conta de acesso à internet</option>
                            <option value="Configuração de correio eletronico">Configuração de correio eletrônico</option>
                            <option value="Instalação e configuração de sistemas operacionais">Instalação e manutenção de sistema operacional</option>
                            <option value="Manutenção de computador">Manutenção de computador</option>
                            <option value="Manutenção de hardware">Manutenção de hardware</option>
                            <option value="Manutenção e instalação de impressoras">Manutenção e instalação de impressoras</option>
                            <option value="Manutenção ou sugestão de paginas da intranet">Manutenção ou sugestão de paginas da intranet</option>
                            <option value="Orientação tecnica">Orientação técnica</option>
                            <option value="Redes de dados">Redes de Dados</option>
                            <option value="PanOp">PanOp</option>
                            <option value="Visita de otientação tecnica">Visita de orientação técnica</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="assunto" class="col-sm-2 control-label">Assunto *</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="assunto" name="assunto" title="Escreva o assunto"  value="" maxlength="100"  required autocomplete="on" placeholder="Assunto Referente ao serviço.." />
                    </div>
                </div>

                <div class="form-group">
                    <label for="chamadoSecao" class="col-sm-2 control-label">Seção *</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="chamadoSecao" name="chamadoSecao" title="Nome do militar" class="span5" value="" maxlength="100"  required autocomplete="on" placeholder="Seção que realiza o chamado" />
                    </div>
                </div>


                <div class="form-group">
                    <label for="militar" class="col-sm-2 control-label">Militar que realiza chamado *</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="militar" name="militar" title="Nome do militar" value="" maxlength="100"  required autocomplete="on" placeholder="Nome ..." /><br>
                    </div>
                </div>

                <div class="form-group">
                    <label for="texto" class="col-sm-2 control-label">Texto *</label>
                    <div class="col-sm-5">
                        <textarea id="texto" name="texto" title="Texto do chamado"></textarea>
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
