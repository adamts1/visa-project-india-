<?php
include 'conn.php';

/// Edit Passport Image with ajax geting form editimg.js

if(isset($_FILES['passimage'])) {
    $PassportImage1 = $_FILES['passimage']['name'];
    $Passportformat = pathinfo($PassportImage1, PATHINFO_EXTENSION);
    $errors     = array();
    $maxsize    = 200000;
    $format = array(
        // 'application/pdf',
        'jpeg',
        'jpg',
        'gif',
        'png'
    );

    if(($_FILES['passimage']['size'] >= $maxsize) || (!in_array($Passportformat, $format))) {
        $errors[] = 'File too large. File must be less than 2 megabytes.';
    }else{


$filespassport = glob('C:/xampp/htdocs/visa project (india)/files/passport/*'); // get all file names
foreach($filespassport as $passportfile){ // iterate files
  if(is_file($passportfile))
    unlink($passportfile); // delete passport img file
}


session_start();
   $id = $_SESSION['id'];
   $_SESSION['idToUpdate'] = $id;

//    $PassportImage1 = $_FILES['passimage']['name'];
   $_SESSION['passportimage'] = $PassportImage1;

   $PassportImage = $_FILES['passimage']['tmp_name'];
   $PassportImage = file_get_contents($PassportImage);
   file_put_contents("C:/xampp/htdocs/visa project (india)/files/passport/".$PassportImage1,$PassportImage); //  Download img file into folder
   $PassportImage = base64_encode($PassportImage);

$sql = "UPDATE main SET Surename='asd', Passport_Image='$PassportImage' WHERE id=$id";


    if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
    }else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }

    }
} 
     
    ?>