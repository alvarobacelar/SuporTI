<div id="chamado-novo">

    <fieldset>
        <legend>Fechar Chamado</legend>
        <form action="includes/controlles/parecer_tecnico_usuario.php?id={$id}" method="post" name="cadastrar">
            <p class="text-info"><strong>OBS: Se escolher a opção "Apenas Fechar" não precisará escrever nenhum parecer técnico</strong></p>

            <strong>Opção para fechar chamado</strong><br>
            <select name="situacao" required onclick="document.cadastrar.tecnico.disabled=false">
                <option value="">Escolha uma opção</option>
                <option value="0">Apenas fechar</option>
                <option value="2">Não solucionado</option>
                <option value="1">Solucionado</option>
            </select>
            <br><br>

            <strong>Qual é o parecer técnico desse chamado?</strong><br> <br>

            <textarea class="resposta" name="tecnico" disabled placeholder="Parecer técnico" cols="4" rows="5"></textarea>

            <br> <br>
            <button type="submit" class="btn btn-primary ">Enviar  <i class="icon-ok"></i></button>

        </form>
    </fieldset>
</div>
<center><a class="btn" href="javascript:history.back()">Voltar</a></center>