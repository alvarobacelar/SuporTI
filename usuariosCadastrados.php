<?php

require_once ("smarty/config/config.php");
require_once ("includes/funcoes/verifica.php");
require_once ("includes/models/ManipulateDataDAO.php");

if ($estaLogado == "SIM"){
    
    if ($_SESSION['nivel'] == "Administrador" && $_SESSION["nivelSupervisor"] == "NAO") {

        $nome = $_SESSION['nome'];

        // INSTANCIANDO AS VARIAVEIS PARA O SRMARTY
        $smarty->assign("titulo", TITULO." - Usuários Cadastrados");
        $smarty->assign("local", "<a class='localizacao' href='index.php'>Home</a> > Usuarios Cadatrados");
        $smarty->assign("nivel", $nivel);
        $smarty->assign("usuario", $nome);
        

        // FAZENDO BUSCA NO BANCO DE DADOS PARA LISTAR OS USUARIOS CADASTRADOS
        $listarUsuario = new ManipulateData();
        $listarUsuario->setTable("usuarios");
        $listarUsuario->selectOrder();
        // LOOP DE REPETIÇÃO PARA SETAR AS VARIAVEIS DE ATRIBUIÇÃO DO SMARTY
        while($busca = $listarUsuario->fetch_object()){
            $idUsuario[] = $busca->id_usuario;
            $nome2[] = $busca->nome;
            $secao[] = $busca->secao;
            $nivel2[] = $busca->nivel;
            $login[] = $busca->login;
            
            $smarty->assign("idUsuario", $idUsuario);
            $smarty->assign("nome2", $nome2);
            $smarty->assign("secao", $secao);
            $smarty->assign("login", $login);
            $smarty->assign("nivel2", $nivel2);
        }
        
        if (isset($_SESSION["reseta"])){
            if ($_SESSION["reseta"] == "OK"){
                $smarty->assign("reseta", "<div class='text-success'><strong>A senha do usuario número ". $_SESSION["senhaResetada"] ." foi resetada com sucesso!</strong></div>");
            } else {
                $smarty->assign("reseta", "<div class='text-error'><strong>Erro ao resetar a senha</strong></div>");
            }
        } else {
            $smarty->assign("reseta", "");
        }
        unset($_SESSION["reseta"]);
        unset($_SESSION["senhaResetada"]);
        $smarty->assign("nivelUsuario", $_SESSION["nivelSupervisor"]);
        $smarty->assign("conteudo", "paginas/listar_usuarios.tpl");
        $smarty->display("HTML.tpl");
        
    } else {
        header("Location: index.php");
    }
        
}


?>
