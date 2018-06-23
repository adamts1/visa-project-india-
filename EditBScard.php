<?php
include 'conn.php';

session_start();
   $id = $_SESSION['id'];
   $_SESSION['idToUpdate'] = $id;


   $BusinessCard = $_FILES['businesscard']['tmp_name'];
   $BusinessCard = file_get_contents($BusinessCard);
   $BusinessCard = base64_encode($BusinessCard);

$sql = "UPDATE main SET Business_Card='$BusinessCard' WHERE id=$id";


    if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
    }else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }






    ?>