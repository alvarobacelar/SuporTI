<div class="panel panel-default">
    <div class="panel-heading">Alterar Usuário</div>

    <div class="panel-body">

        <form action="includes/controlles/altera_usuario.php" method="post" name="cadastrar" class="form-horizontal" role="form" onSubmit="return verificaSenha()">

            <input type="hidden" id="id" name="id" value="{$alter->id_usuario}" />

            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Nome *</label>
                <div class="col-sm-6">
                    <input type="text" name="nome" id="nome" class="form-control" value="{$alter->nome}" maxlength="100"  required autocomplete="on" placeholder="Nome..." />
                </div>
            </div>

            <div class="form-group">
                <label for="login" class="col-sm-2 control-label">Login *</label>
                <div class="col-sm-3">
                    <input name="login" type="text" id="login" class="form-control" value="{$alter->login}" maxlength="30" required autocomplete="on" placeholder="Login..." />
                </div>
                <div class="col-sm-3">
                    <select name="nivel" class="form-control" id="nivel" required>
                        <option value="{$alter->nivel}"> {if $alter->nivel == 0}Administrador{/if} {if $alter->nivel == 1} Usuário {/if} {if $alter->nivel == 2} Supervisor {/if}</option>
                        <option value="0">Administrador</option>
                        <option value="2">Supervisor</option>
                        <option value="1">Usuario</option>
                    </select>  
                </div>
            </div>

            <div class="form-group">
                <label for="login" class="col-sm-2 control-label">Seção *</label>
                <div class="col-sm-4">
                    <input id="secao" name="secao" type="text" class="form-control" value="{$alter->secao}" maxlength="50" required autocomplete="on" placeholder="Seção..." />
                </div>
            </div>

            <!--<select name="secao" class="span4" id="secao" required>
                <option value=""> Escolha a Seção </option>
                <option value="1 Seção">1º Seção</option>
                <option value="2 Seção">2º Seção</option>
                <option value="3 Seção">3º Seção</option>
                <option value="4 Seção">4º Seção</option>
                <option value="Aprovisionamento">Aprovisionamento</option>
                <option value="Almoxarifado">Almoxarifado</option>
                <option value="Arquivo Btl">Arquivo Btl</option>
                <option value="Banda de Musica">Banda de Musica</option>
                <option value="Cmd Btl">Cmd Btl</option>
                <option value="Conformidade">Conformidade</option>
                <option value="Enfermaria">Enfermaria</option>
                <option value="Estação Rádio">Estação Rádio</option>
                <option value="Pel Com">Pelotão de Comunicação</option>
                <option value="Pel Obras">Pelotão de Obras</option>
                <option value="Pelotao de Manutencao">Pelotão de Manutenção(Garagem)</option>
                <option value="Relacoes Publicas">Relações Publicas</option>
                <option value="Subtenencia 1 Cia">Subtenencia 1ª Cia</option>
                <option value="Subtenencia 2 Cia">Subtenencia 2ª Cia</option>
                <option value="Subtenencia CCAp">Subtenencia CCAp</option>
                <option value="Subtenencia NPOR">Subtenencia NPOR</option>
                <option value="SALC">SALC</option>
                <option value="Sec Mob">Sec Mob</option>
                <option value="Sgtte 1 Cia Fuz">Sgtte 1º Cia Fuz</option>
                <option value="Sgtte 2 Cia Fuz">Sgtte 2º Cia Fuz</option>
                <option value="Sgtte CCAp">Sgtte CCAp</option>
                <option value="Sgtte NPOR">Sgtte NPOR</option>
                <option value="SFPC">SFPC</option>
                <option value="Sec Infor">Sec Infor</option>
                <option value="Setor de Pagamento">Setor de Pagamento</option>
                <option value="Tesouraria">Tesouraria</option>
            </select>-->

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-4">
                    <button type="submit" class="btn btn-large btn-primary ">Salvar  <i class="icon-ok"></i></button>
                    <button type="button" class="btn btn-danger">Cancelar  <i class="icon-remove"></i></button>
                </div>
            </div>

        </form>

    </div>
    <div class="panel-footer">
        <center><a class="btn btn-default" href="javascript:history.back()">Voltar</a></center>
    </div>
</div>
