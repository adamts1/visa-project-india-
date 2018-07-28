<?php
include 'conn.php';




if(isset($_FILES['selfi_image'])) {

 
        $errors     = array();
        $maxsize    = 1000000000000000;
        $acceptable = array(
            'application/pdf',
            'image/jpeg',
            'image/jpg',
            'image/gif',
            'image/png'
        );
    
        if(($_FILES['selfi_image']['size'] >= $maxsize) || ($_FILES["selfi_image"]["size"] == 0)) {
            $errors[] = 'File too large. File must be less than 2 megabytes.';
    
        //  header("Location: C:/xampp/htdocs/visa project (india)/form.php?size=over");
        //  exit();

        $SelfiImage1 = $_FILES['selfi_image']['name']; // take file name for sving in folder
        $_SESSION['selfiimage'] = $SelfiImage1; // pass file name to session for showing in edit form
        $SelfiImage = $_FILES['selfi_image']['tmp_name'];
        $SelfiImage = file_get_contents($SelfiImage);
        file_put_contents("C:/xampp/htdocs/visa project (india)/files/selfi/".$SelfiImage1 ,$SelfiImage); //  Download img file into folder
        $SelfiImage = base64_encode($SelfiImage);


        }
    
    //     if(!in_array($_FILES['selfiimage']['type'], $acceptable) && (!empty($_FILES["selfiimage"]["type"]))) {
    //     $errors[] = 'Invalid file type. Only PDF, JPG, GIF and PNG types are accepted.';
    
    //     $SelfiImage1 = $_FILES['selfiimage']['name'];
    //     // $_SESSION['selfiimage'] = $SelfiImage1;
       
     
    //     $SelfiImage = $_FILES['selfiimage']['tmp_name'];
    //     $SelfiImage = file_get_contents($SelfiImage);
    //     // file_put_contents("C:/xampp/htdocs/visa project (india)/files/selfi/".$SelfiImage1,$SelfiImage); //  Download img file into folder
    //     $SelfiImage = base64_encode($SelfiImage);
     
    //  $sql = "UPDATE main SET  Selfi_Image='$SelfiImage' WHERE id='1091'";
     
     
    //      if ($conn->query($sql) === TRUE) {
    //       echo "New record created successfully";
    //      }else {
    //       echo "Error: " . $sql . "<br>" . $conn->error;
    //       }
    // }
    
    if(count($errors) === 0) {
        // move_uploaded_file($_FILES['selfiimage']['tmpname'], 'C:/xampp/htdocs/visa project (india)/files/selfi');
    } else {
        foreach($errors as $error) {
            echo '<script>alert("'.$error.'");</script>';
        }
    
        die(); //Ensure no more processing is done
    }
}
    
        ?>
