<?php


$errors     = array();
$maxsize    = 1;
$acceptable = array(
    'application/pdf',
    'image/jpeg',
    'image/jpg',
    'image/gif',
    'image/png'
);
if(isset($_POST['submit'])) {

    $PassportType = isset($_POST['passport_type']) ? $_POST['passport_type'] : '';
    $Nationality = isset($_POST['nationality']) ? $_POST['nationality'] : '';
    $PortOfArrival = isset($_POST['port_of_arrival']) ? $_POST['port_of_arrival'] : '';
    $VisaType = isset($_POST['visa_type']) ? $_POST['visa_type'] : '';
    $PurposeOfVisit = isset($_POST['Purpose_Of_Visit']) ? $_POST['Purpose_Of_Visit'] : '';

    
    $SelfiImage1 = $_FILES['selfi_image']['name']; // take file name for sving in folder
    $_SESSION['selfiimage'] = $SelfiImage1; // pass file name to session for showing in edit form
    $SelfiImage = $_FILES['selfi_image']['tmp_name'];
    $SelfiImage = file_get_contents($SelfiImage);
    // file_put_contents("C:/xampp/htdocs/visa project (india)/files/selfi/".$SelfiImage1 ,$SelfiImage); //  Download img file into folder
    $SelfiImage = base64_encode($SelfiImage);

   

    if(($_FILES['selfi_image']['size'] >= $maxsize) || ($_FILES["selfi_image"]["size"] == 0)) {
        $errors[] = 'File too large. File must be less than 2 megabytes.';

    // header("Location C:/xampp/htdocs/visa project (india)/form.php?signup=empty");
    header('Location: ../visa project (india)/form.php?signup=selfitoobig');
    exit();

    

   

    }


}


    ?>

 