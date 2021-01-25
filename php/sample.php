<?php

require_once('Smarty.class.php');

$smarty = new Smarty();

$smarty->template_dir = 'd:/smartysample/hello/templates/';
$smarty->compile_dir  = 'd:/smartysample/hello/templates_c/';
$smarty->config_dir   = 'd:/smartysample/hello/configs/';
$smarty->cache_dir    = 'd:/smartysample/hello/cache/';

$smarty->assign('msg','Hello World!');
$smarty->display('sample.tpl');

?>