<?php
include 'conn.php';

/// Edit Passport Image with ajax geting form editimg.js

session_start();
   $id = $_SESSION['id'];
   $_SESSION['idToUpdate'] = $id;

   $PassportImage = $_FILES['passimage']['tmp_name'];
   $PassportImage = file_get_contents($PassportImage);
   $PassportImage = base64_encode($PassportImage);

$sql = "UPDATE main SET Surename='asd', Passport_Image='$PassportImage' WHERE id=$id";


    if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
    }else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }






    ?>