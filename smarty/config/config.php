<?php


define("SERVIDOR", "258276"); // senha do banco de dados
define("TITULO", "SuporTI");
define('SMARTY_DIR', str_replace("\\", "/", getcwd()) . '/smarty/lib/');
define("TEMPLATE", "");
require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = str_replace("\\", "/", getcwd()) . "/smarty/templates/" . TEMPLATE;
$smarty->compile_dir = str_replace("\\", "/", getcwd()) . "/smarty/templates_c/";
$smarty->config_dir = str_replace("\\", "/", getcwd()) . "/smarty/config/";
$smarty->cache_dir = str_replace("\\", "/", getcwd()) . "/smarty/cache/";


//// se o sistema estiver em um servidor virtual no windows executa o codigo abaixo
//if ($root == "C:/wamp/www/") {
//
//    define("SERVIDOR", "");
//    define("TITULO", "SuporTI");
//    define("SMARTY_DIR", $root . "\\" . TITULO . "\\smarty\\lib\\");
//    define("SITE", $root . "\\" . TITULO . "\\");
//    define("TEMPLATE", "");
//// define("INCLUDES", SITE . "includes\\"); // criando um define para a pasta include
//    define('BASE_URL', realpath(dirname(__FILE__)));
//// define('HTTP_URL', 'http://localhost/SupoInfor/');
//    include(SMARTY_DIR . "Smarty.class.php");
//    $smarty = new Smarty;
//    $smarty->template_dir = SITE . "smarty\\templates\\" . TEMPLATE;
//    $smarty->compile_dir = SITE . "smarty\\templates_c\\";
//    $smarty->config_dir = SITE . "smarty\\config\\";
//    $smarty->cache_dir = SITE . "smarty\\cache\\";
//
//    $smarty->debugging = true;
//} else { // se o servidor for diferente do do windows, executa o codigo abaixo
//    define("SERVIDOR", "25bc");
//    define("TITULO", "SuporTI");
//    define("SMARTY_DIR", $_SERVER['DOCUMENT_ROOT'] . "/smarty/lib/");
//    define("SITE", $_SERVER['DOCUMENT_ROOT'] . "/");
//    define("TEMPLATE", "");
//    define('BASE_URL', realpath(dirname(__FILE__)));
//    include(SMARTY_DIR . "Smarty.class.php");
//    $smarty = new Smarty;
//    $smarty->template_dir = SITE . "smarty/templates/" . TEMPLATE;
//    $smarty->compile_dir = SITE . "smarty/templates_c/";
//    $smarty->config_dir = SITE . "smarty/config/";
//    $smarty->cache_dir = SITE . "smarty/cache/";
//}
//
//$smarty->debugging = true;
//
