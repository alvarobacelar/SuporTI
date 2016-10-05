<?php

session_start();

//unset($_SESSION["idSession"]);
//unset($_SESSION["login"]);
//unset($_SESSION["nome"]);
//unset($_SESSION["usuarioID"]);
//unset($_SESSION["nivel"]);

session_destroy(); // destroi todas as sessions


header("Location:../../");
?>