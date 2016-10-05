<div class="panel panel-default">
    <div class="panel-heading">Parecer técnico</div>

    <div class="panel-body">

        <form action="includes/controlles/parecer_tecnico.php" method="post" name="cadastrar" class="form-horizontal" role="form">
            <div class="alert alert-info" role="alert">
                <strong>OBS: Se escolher a opção "Apenas Fechar" não precisará escrever nenhum parecer técnico</strong>
            </div>

            <input type="hidden" id="id" name="id" value="{$id}" />

            <div class="form-group has-error">
                <label for="situacao" class="col-sm-3 control-label">Escolha a solução</label>
                <div class="col-sm-3">
                    <select id="situacao" class="form-control" name="situacao" required="">
                        <option value="">Escolha a solução</option>
                        <option value="0">Apenas fechar</option>
                        <option value="1">Solucionado</option>
                        <option value="2">Não solucionado</option>
                    </select>
                </div>
            </div>


            <div class="form-group has-error">
                <label for="situacao" class="col-sm-3 control-label"> Qual é o parecer técnico desse chamado?</label>
                <div class="col-sm-4">
                    <textarea class="resposta" name="tecnico"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-4">
                    <button type="submit" class="btn btn-lg btn-primary">Enviar</button>
                </div>
            </div>

        </form>
    </div>
    <div class="panel-footer">
        <center><a class="btn btn-default" href="javascript:history.back()">Voltar</a></center>
    </div>
</div>

