<?php
/// Edit selfi image with ajax geting form editimg.js
include 'conn.php';
session_start();
   $id = $_SESSION['id'];
   $_SESSION['idToUpdate'] = $id;
  

   $SelfiImage = $_FILES['selfiimage']['tmp_name'];
   $SelfiImage = file_get_contents($SelfiImage);
   $SelfiImage = base64_encode($SelfiImage);

$sql = "UPDATE main SET  Selfi_Image='$SelfiImage' WHERE id=$id";


    if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
    }else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }




     header('Location: view.php');


    ?>