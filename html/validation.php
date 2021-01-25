<?php


function validation($data){

    $error = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    }
  
    if( empty($post['name'])){
        echo $test ;
      }

    return $error;
}

?>