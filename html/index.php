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

$smarty->display('index.tpl');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    
  
  //   if ($post['btn_confirm']){
  //     empty($post['name']);{
  //       echo '$test';
  //       $test ='yes';
  //   }
  // }
  // }
    // if ($post['name'] === '') {
    //     $error['name'] = 'blank';
        
    // }
    // if ($post['name'] === '') {
    //   $error['name'] = $bar;

    // }
    // }else{
    //   empty($post['name']== $test);
    //     echo $test;
    //   }
    

 
    
    

  
//     if (count($error) === 0) {
//         // $_SESSION['form'] = $post;
//         header('Location:confirm.php');
//         exit();
//     }
// } else {

//     if (isset($_SESSION['form'])) {
//         $post = $_SESSION['form'];
    
//     }

}


?>


<!-- // function $post['btn_confirm']
// if(isset($_POST['add'])) {

  
//   if( empty($post['name'])){
//     echo $rname;

// } -->
 

  

    <?php phpinfo();?>