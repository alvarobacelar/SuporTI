<?php

/*
 * Classe de autenticação de usuario ao sistema
 * Data Criação: 26/06/2013
 * Versao 1.0
 */

/**
 * Classe usada pelo o model para autenticar o usuario
 *
 * @author Alvaro
 */
class LoginIn {

    // FUNCAO DE AUTENTICAÇÃO DO USUARIO
    function autentica($login, $senha) {

        // CRIANDO UM ARRAY COM OS NIVEIS DE USUARIO
        $funcao[0] = "Administrador";
        $funcao[1] = "Usuario";
        $funcao[2] = "Supervisor";
        $funcao[3] = "Administrador";
        $fun_max = 1;

        $db = new ManipulateData();

        $db->setTable("usuarios");
        $db->setLogin($login); // SETANDO O VALOR DO LOGIN PARA A AUTENTICAÇÃO
        $db->setSenha($senha); // SETANDO O VALOR DA SENHA PARA A AUTENTICAÇÃO
        $db->selectLogin(); // VERIFICANDO SE EXISTE USUARIO CADASTRADO NO SISTEMA

        if ($db->registros_retornados()) {

            $obj = $db->fetch_object();
            $session_id = md5(time() . $obj->id_usuario);

            $_SESSION["idSession"] = $session_id;
            $_SESSION["login"] = $obj->login;
            $_SESSION["nome"] = $obj->nome;
            $_SESSION["secao"] = $obj->secao;
            $_SESSION["usuarioID"] = $obj->id_usuario;
            $id = $_SESSION["usuarioID"];
            if ($fun_max > 3) {
                $_SESSION["nivel"] = "Não identificado";
            } else {
                if ($obj->nivel == 3) {
                    $_SESSION["nivel"] = $funcao[$obj->nivel];
                    $_SESSION['nivelSupervisor'] = "OK";
                } else {
                    $_SESSION["nivel"] = $funcao[$obj->nivel];
                    $_SESSION['nivelSupervisor'] = "NAO";
                }
            }
            $data = date("Y-m-d");
            $hora = date("H:i:s");
            $ip = $_SERVER["REMOTE_ADDR"];

            header("location: ../../ ");
            exit;
        } else {

            $_SESSION["erro"] = "erro";
            header("location: ../../");
            exit;
        }
    }

}

?>
