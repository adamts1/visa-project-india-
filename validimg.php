<?php
/// Edit selfi image with ajax geting form editimg.js
include 'conn.php';


if(isset($_FILES['selfiimage'])) {
    $errors     = array();
    $maxsize    = 2097152;
    $acceptable = array(
        'application/pdf',
        'image/jpeg',
        'image/jpg',
        'image/gif',
        'image/png'
    );

    if(($_FILES['selfiimage']['size'] >= $maxsize) || ($_FILES["selfiimage"]["size"] == 0)) {
        $errors[] = 'File too large. File must be less than 2 megabytes.';
    }

    if(!in_array($_FILES['selfiimage']['type'], $acceptable) && (!empty($_FILES["selfiimage"]["type"]))) {
    $errors[] = 'Invalid file type. Only PDF, JPG, GIF and PNG types are accepted.';
}

if(count($errors) === 0) {
    move_uploaded_file($_FILES['selfiimage']['tmpname'], 'C:/xampp/htdocs/visa project (india)/files/selfi');
} else {
    foreach($errors as $error) {
        echo '<script>alert("'.$error.'");</script>';
    }

    die(); //Ensure no more processing is done
}
}

    ?>