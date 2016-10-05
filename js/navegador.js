

function navegador() {
    if (navigator.appVersion.indexOf("MSIE") != -1) {
        var temp = navigator.appVersion.split("MSIE");
        var versao = parseFloat(temp[1]);
        if (versao <= 9) {
            document.write("Seu navegador está desatualizado! Para melhor funcionamento do sistema atualize seu navegador.");
        }
    }
    else if (navigator.userAgent.indexOf("Firefox") != -1) {
        var temp = navigator.userAgent.indexOf("Firefox") + 8;
        var versao = navigator.userAgent.substring(temp, temp + 6);
        document.write("Você está usando a versão " + versao + " do Firefox");
    }
}

