<?php

require_once ("smarty/lib/Smarty.class.php");

/*
 * Classe que inicializa todo o sistema
 * Data Criação: 26/06/2013
 * Versão 1.0
 */

/**
 * Essa classe tem a funcao de inicializar todo o sistema
 *
 * @author Alvaro
 */
class Main {

    private $usuario;

    public function setUsuario($u) {
        $this->usuario = $u;
    }

    public function getUsuario() {
        return $usuario;
    }

    // FUNCAO QUE INICIALIZA O SISTEMA NA PAGINA HOME
    public function home() {
        $smarty = new Smarty();
        // VERIFICAÇÃO DO TIPO DE USUARIO
        if ($_SESSION['nivel'] == "Administrador") {

            $smarty->assign("titulo", "Administração");
            $smarty->assign("usuario", $_SESSION["nome"]);
            $smarty->assign("conteudo", "paginas/home_admin.tpl");
            $smarty->display("HTML.tpl");
        } else {

            $smarty->assign("titulo", "Suporte de Informática");
            $smarty->assign("usuario", $_SESSION["nome"]);
            $smarty->assign("conteudo", 'paginas/home_usuario.tpl');
            $smarty->display("HTML.tpl");
        }
    }

    public function cadastraNovo() {
        $smarty = new Smarty();

        $smarty->assign("titulo", "Cadastrar Novo");
        $smarty->assign("usuario", $_SESSION['usuario']);
        $smarty->assign("conteudo", "paginas/cadastra_novo.tpl");
        $smarty->display("HTML.tpl");
    }

}

?>
