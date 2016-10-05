<?php
define("TITULO", "SuporTI");
define("SMARTY_DIR", $_SERVER['DOCUMENT_ROOT'] . "/".TITULO."/smarty/lib/");
define("SITE", $_SERVER['DOCUMENT_ROOT'] . "/".TITULO."/");
define("TEMPLATE", "");
define('BASE_URL', realpath(dirname(__FILE__)));
include(SMARTY_DIR . "Smarty.class.php");
$smarty = new Smarty;
$smarty->template_dir = SITE . "smarty/templates/" . TEMPLATE;
$smarty->compile_dir = SITE . "smarty/templates_c/";
$smarty->config_dir = SITE . "smarty/config/";
$smarty->cache_dir = SITE . "smarty/cache/";

//$smarty->debugging=true;
?>


