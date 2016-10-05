<?php

if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION["idSession"])) {
    if (!isset($_SESSION["erro"])) {
        $_SESSION["erro"] = "erro_sessao";
    }
    $smarty->assign('logado', 'NAO');
    $estaLogado = "NAO";
    $smarty->assign('nivel', 'NI');
    $local = 0;
} else {
    // autentica o usuario
    $nivel = $_SESSION['nivel'];
    $estaLogado = "SIM";
}

// se não existe nenhum usuario logado, manda para a tela de login
if ($estaLogado == "NAO") {
    // verifica se houve erro no login
    if ($_SESSION["erro"] == "erro") {
        $smarty->assign("erro", "Usuario ou senha não correspondem");
    } else {
        $smarty->assign("erro", "&nbsp;");
    }
    unset($_SESSION["erro"]); // destroi a session do erro
    // fread beck do retorno de alteração de senha
    if (isset($_SESSION["mudarSenha"])) {
        $session = $_SESSION["mudarSenha"];
        if ($session != "SIM") {
            $smarty->assign("senha", "Sua senha não confere");
        } else {
            $smarty->assign("senha", "Senha alterada com sucesso! Faça login novamente");
        }
    } else {
        $smarty->assign("senha", "");
    }
    unset($_SESSION["mudarSenha"]);

    if (isset($_SESSION["chamado"])) {
        $session = $_SESSION["chamado"];
        if ($session != "NAO") {
            $smarty->assign("senha", "<div id='erro-login'><strong>Solicitação enviada com sucesso, aguarde um retorno da Seção de Informática.</div>");
        } else {
            $smarty->assign("senha", "<div class='alert alert-danger' role='alert'>Solicitação não enviada, tente novamente.</div>");
        }
    } else {
        $smarty->assign("senha", "");
    }
    unset($_SESSION["chamado"]);
    
    // chama a tela de login caso não houver session estartada
    $smarty->assign("titulo", TITULO . " - Login");
    $smarty->assign("conteudoLogin", "login/login.tpl");
    $smarty->display("HTMLogin.tpl");
}
?>
