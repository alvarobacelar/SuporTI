<div class="panel panel-default">
    <div class="panel-heading">Gerar relatório de chamados</div>
    <div class="panel-body">  



        <form action="relatorio.php" method="post" name="dados">
            Escolha o período <br><br>
            <div id="relatorio">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2">Data Inicio</span>
                        <input type="text" id="data1" class="form-control" name="data1" title="DD/MM/AAAA" value="" required  placeholder="DD/MM/AAAA">
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon3">Data Fim</span>
                        <input type="text" id="data2" class="form-control" name="data2" title="DD/MM/AAAA" value="" required  placeholder="DD/MM/AAAA">
                    </div>
                </div>
                <p id="destino"></p>
                <center><button type="submit" onclick="this.form.target = '_blank';
                        return true;" class="btn btn-primary ">Gerar  <i class="icon-ok"></i></button></center>
            </div>
        </form>
    </div>
    <div class="panel-footer">
        <center><a class="btn btn-default" href="javascript:history.back()">Voltar</a></center>
    </div>
</div>