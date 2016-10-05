<div id="chamado-novo">

    <div id="cadastraNovo">

        <form action="includes/controlles/cadastra_om.php" enctype="multipart/form-data" method="post" name="cadastrar" onSubmit="return verificaSenha()">
            <fieldset class="cad">
                <legend>Cadastrar OM</legend>
                <h6>Caso haja uma OM já cadastrada, será feito a alteração no Banco de dados</h6><br />
                <table>
                    <tr>
                        <td>
                            Organização Militar
                        </td>
                        <td>
                            <input type="text" id="om" name="om" title="Organização Militar" {if isset($om->nome_om)} value="{$om->nome_om}"{/if} class="span4" required="" placeholder="Ex: 25º Batalhão de Caçadores" /><br />
                        </td> 
                    </tr>

                    <tr>
                        <td>
                            Cidade-UF
                        </td>
                        <td>
                            <input type="text" id="cidade" name="cidade" title="Cidade-Estado" {if isset($om->nome_om)} value="{$om->cidade}"{/if} class="span4" required="" placeholder="Ex:Teresina-PI" /><br />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Seção Responsável
                        </td>
                        <td>
                            <input type="text" id="secao" name="secao" title="Seção Responsável" {if isset($om->nome_om)} value="{$om->secao_res}"{/if} class="span4" required="" placeholder="Ex:Seção de informática - 25ºBC" /><br />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Escolha a imagem
                        </td>
                        <td>
                            <input type="file" id="imagem" name="imagem" title="Imagem da OM" required=""/> {if isset($om->foto)}<img src="{$om->foto}" width="50" />{/if}<br /><br />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" name="enviaDados" class="btn btn-primary btn-large">Salvar</button>
                            <button type="submit" name="enviaDados" class="btn btn-danger">Cancelar</button>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
</div>
