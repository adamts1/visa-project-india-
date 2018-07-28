

<?php

// if(isset($_FILE["selfi_image"]))
// {
    $acceptable = array(
        'jpeg',
        'jpg',
        'png',
        'pdf',
    );
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }
    $errors     = array();
    $size = filter_var($_POST["size"]);
    $name = filter_var($_POST["name"]);
    $ext = pathinfo($name, PATHINFO_EXTENSION);

     
    if ($size > 200000 ){
    $errors[] = 'File must be less than 2 megabytes.';
    }

// if (strpos($selfiname, 'jpg') == true){
    if(!in_array($ext, $acceptable)){
  
    $errors[] = 'Invalid file type. Only PDF, JPG, GIF and PNG types are accepted.';
    }
    if(count($errors) !== 0) {
    foreach($errors as $error) {
        echo "<br>".$error;   
    }
}
   





?>