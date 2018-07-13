<?php
include 'conn.php';

/// Edit bussiness card Image with ajax geting form editimg.js


$filesbusiness = glob('C:/xampp/htdocs/visa project (india)/files/business/*'); // get all file names
foreach($filesbusiness as $businessfile){ // iterate files
  if(is_file($businessfile))
    unlink($businessfile); // delete business card file
}

session_start();
   $id = $_SESSION['id'];
   $_SESSION['idToUpdate'] = $id;

   $Businesscard1 = $_FILES['businesscard'][name];
   $_SESSION['businesscard'] = $Businesscard1;

   $BusinessCard = $_FILES['businesscard']['tmp_name'];
   $BusinessCard = file_get_contents($BusinessCard);
   file_put_contents("C:/xampp/htdocs/visa project (india)/files/business/".$Businesscard1,$BusinessCard); //  Download img file into folder
   $BusinessCard = base64_encode($BusinessCard);

$sql = "UPDATE main SET Business_Card='$BusinessCard' WHERE id=$id";


    if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
    }else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }






    ?>