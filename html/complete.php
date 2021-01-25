
<?php
session_start();



require_once('smarty/Smarty.class.php');

$smarty = new Smarty();
$smarty->template_dir = 'templates/';
$smarty->compile_dir  = 'templates_c/';
$name = $post['name'];
$var = 0;
$error = [];
$smarty->assign("name1", $name);
$smarty->assign("hobby1", $hobby);
// $smarty->assign("test", $test);
$hobby  =$post['hobby'];
$smarty->assign("hobby1", $hobby);

$smarty->display('complete.tpl');

?>


