<?php
session_start();
require_once('./smarty/Smarty.class.php');



$smarty = new Smarty();
$smarty->template_dir = './templates/';
$smarty->compile_dir  = './templates_c/';

$var = 0;
$error = [];

$name = $post['name'];
$_POST['name'];
// $smarty->assign("name1", $name);
$hobby = array($post['hobby']);
// if (isset($post['hobby']) && is_array($post['hobby'])) {
//   $hobby = $post['hobby'];
//   $hobby = implode("、", $post["hobby"]);
// }
// $smarty->assign("hobby1", $hobby);

$food = $post['food'];
// $smarty->assign("food",$food);

$area = $post['area'];
// $smarty->assign("area",$food);

$area = $post['login'];
// $smarty->assign("login",$food);

$smarty->display('confirm.tpl');


  // $_SESSION["name"] = "confirm.php";


// if( empty($post['name'])){
//   echo $name;
// }
// $post = $_SESSION['form'];


       
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//   $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
// }


// if (!isset($_SESSION['form'])) {
//   header('Location: confirm.php');
//   exit();
// } else {
//   $post = $_SESSION['form'];
 
// }

// echo ($post['name']); 

?>

