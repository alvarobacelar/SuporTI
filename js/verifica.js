function enviarDados(){
    var qnt;

    if(document.chamado.tipo.value==""){
        document.getElementById('destino').innerHTML = "Selecione o tipo de sevciço";
        document.chamado.tipo.focus();
        return false;
    }

    if(document.chamado.servico.value==""){
        document.getElementById('destino').innerHTML = "Selecione o sevciço";
        document.chamado.servico.focus();
        return false;
    }
    if(document.chamado.assunto.value==""){
        document.getElementById('destino').innerHTML = "Digite o assunto o chamado";
        document.chamado.assunto.focus();
        return false;
    }

    document.getElementById("destino").innerHTML = "";
    return true;
}



//FORMANTANDO A DATA
function mascara_data(data){
    var mydata = '';
    mydata = mydata + data;
    if (mydata.length == 2){
        mydata = mydata + '/';
        document.dados.data1.value = mydata;
    }
    if (mydata.length == 5){
        mydata = mydata + '/';
        document.dados.data1.value = mydata;
    }
    if (mydata.length == 10){
        verifica_data();
    }
}

function mascara_data2(data){
    var mydata = '';
    mydata = mydata + data;
    if (mydata.length == 2){
        mydata = mydata + '/';
        document.dados.data2.value = mydata;
    }
    if (mydata.length == 5){
        mydata = mydata + '/';
        document.dados.data2.value = mydata;
    }
    if (mydata.length == 10){
        verifica_data();
    }
}

//verificando a data
function verifica_data () {

    dia = (document.dados.data.value.substring(0,2));
    mes = (document.dados.data.value.substring(3,5));
    ano = (document.dados.data.value.substring(6,10));

    situacao = "";
    // verifica o dia valido para cada mes
    if ((dia < 01)||(dia < 01 || dia > 30) && (  mes == 04 || mes == 06 || mes == 09 || mes == 11 ) || dia > 31) {
        situacao = "falsa";
    }

    // verifica se o mes e valido
    if (mes < 01 || mes > 12 ) {
        situacao = "falsa";
    }

    // verifica se e ano bissexto
    if (mes == 2 && ( dia < 01 || dia > 29 || ( dia > 28 && (parseInt(ano / 4) != ano / 4)))) {
        situacao = "falsa";
    }

    if (document.dados.data.value == "") {
        situacao = "falsa";
    }

    if (situacao == "falsa") {
        document.getElementById('destino').innerHTML = "Data inválida";
        document.dados.data.focus();
    }
}

// faz verificacao das senhas
function verificaSenha(){
    var senha = document.cadastrar.senha.value;
    var senha2 = document.cadastrar.senha2.value;
    if(senha != senha2){   
        document.getElementById('erro-senha').innerHTML ="As senhas não correspondem";
        return false;
    } else 
    if(senha == senha2){
        document.getElementById('erro-senha').innerHTML = "";
        return true;
    }
   
}

// FUNCAO DE EXCLUSÃO DE USUARIO, COM ALERT DE CONFIRMAÇÃO
function excluirUsuario(id){

    var excluir = confirm("Deseja realmente excluir o usuario?");

    if (excluir){
        location.href="include/controlles/deleta_usuario.php?id="+id;
    }
}

function editaUsuario(id){
    
    location.href="alteraUsuario.php?id="+id;
}

// FUNCAO QUE FECHA CHAMADO
function fecharChamado(id){
    var lida = confirm("Deseja fechar chamado de numero "+id+ "?");
    if (lida){
        location.href="includes/controlles/fechar_chamado.php?id="+id;
    }
}

function fecharChamadoAdmin(id){
    var lida = confirm("Deseja fechar chamado de numero "+id+ "?");
    if (lida){
        location.href="fecharChamado.php?id="+id;
    }
}

function resetarSenha(id){
    var reseta = confirm("Deseja resetar senha do usuário de numero "+id+"? \nSERÁ PEGO O LOGIN E USADO COMO SENHA!");
    if (reseta){
        location.href="includes/controlles/resetar_senha.php?idUsuario="+id;
    }
}

function visualizaChamado(id){
    location.href="meusChamados.php?idUnico="+id;
}

function visualizarChamado(id){
    location.href="allChamados.php?id="+id;
}

function excluirResposta(id, idCham){
    var exclui = confirm("Deseja realmente excluir essa resposta?");

    if (exclui){
        location.href="includes/controlles/excluir_resposta.php?id="+id+"&idChamado="+idCham;
    }
}

function excluirInforme(id){
    var deleta = confirm("Deseja excluir esse informe?");
    
    if (deleta){
        location.href="includes/controlles/excluir_informe.php?id="+id+"&confirm=ok";
    }
}

function verificaSenhaAltera(){

    var senha = document.cadastrar.senha.value;
    var senha2 = document.cadastrar.senha2.value;
    if(senha != senha2){
        document.getElementById('erro-senha').innerHTML ="As senhas não correspondem";
        return false;
    } else
    if(senha == senha2){
        document.getElementById('erro-senha').innerHTML = "";
        return true;
    }

}

//formata de forma generica os campos
function formataCampo(campo, Mascara, evento) {
    var boleanoMascara;

    var Digitato = evento.keyCode;
    exp = /\-|\.|\/|\(|\)| /g
    campoSoNumeros = campo.value.toString().replace( exp, "" );

    var posicaoCampo = 0;
    var NovoValorCampo="";
    var TamanhoMascara = campoSoNumeros.length;
    ;

    if (Digitato != 8) { // backspace
        for(i=0; i<= TamanhoMascara; i++) {
            boleanoMascara  = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".")
                || (Mascara.charAt(i) == "/"))
            boleanoMascara  = boleanoMascara || ((Mascara.charAt(i) == "(")
                || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " "))
            if (boleanoMascara) {
                NovoValorCampo += Mascara.charAt(i);
                TamanhoMascara++;
            }else {
                NovoValorCampo += campoSoNumeros.charAt(posicaoCampo);
                posicaoCampo++;
            }
        }
        campo.value = NovoValorCampo;
        return true;
    }else {
        return true;
    }
}