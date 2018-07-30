<?php
include 'conn.php';

/// Edit bussiness card Image with ajax geting form editimg.js
if(isset($_FILES['businesscard'])) {
  $Businesscard1 = $_FILES['businesscard']['name'];
  $Businessformat = pathinfo($Businesscard1, PATHINFO_EXTENSION);
  $errors     = array();
  $maxsize    = 200000;
  $format = array(
      // 'application/pdf',
      'jpeg',
      'jpg',
      'gif',
      'png'
  );

  if(($_FILES['businesscard']['size'] >= $maxsize) || (!in_array($Businessformat, $format))) {
      $errors[] = 'File too large. File must be less than 2 megabytes.';
  }else{



$filesbusiness = glob('C:/xampp/htdocs/visa project (india)/files/business/*'); // get all file names
foreach($filesbusiness as $businessfile){ // iterate files
  if(is_file($businessfile))
    unlink($businessfile); // delete business card file
}

   session_start();
   $id = $_SESSION['id'];
   $_SESSION['idToUpdate'] = $id;

  //  $Businesscard1 = $_FILES['businesscard']['name'];
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

    }
  }






    ?>