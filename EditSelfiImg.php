<?php
/// Edit selfi image with ajax geting form editimg.js
include 'conn.php';


$filesselfi = glob('C:/xampp/htdocs/visa project (india)/files/selfi/*'); // get all file names
foreach($filesselfi as $selfifile){ // iterate files
  if(is_file($selfifile))
    unlink($selfifile); // delete selfi img file
}
session_start();
   $id = $_SESSION['id'];
   $_SESSION['idToUpdate'] = $id;

   $SelfiImage1 = $_FILES['selfiimage'][name];
   $_SESSION['selfiimage'] = $SelfiImage1;
  

   $SelfiImage = $_FILES['selfiimage']['tmp_name'];
   $SelfiImage = file_get_contents($SelfiImage);
   file_put_contents("C:/xampp/htdocs/visa project (india)/files/selfi/".$SelfiImage1,$SelfiImage); //  Download img file into folder
   $SelfiImage = base64_encode($SelfiImage);

$sql = "UPDATE main SET  Selfi_Image='$SelfiImage' WHERE id=$id";


    if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
    }else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }




     header('Location: view.php');


    ?>