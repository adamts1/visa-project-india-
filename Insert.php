<?php
include 'conn.php';


$sql = "INSERT INTO main (Passport_Type, Email)
VALUES ('$PassportType','$Email')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// $sql = "SELECT * FROM main";
// $sth = $conn->query($sql);

// while($result=mysqli_fetch_array($sth)){  
// echo '<img width="600" height="600"  src="data:image;base64,'.$result['Passport_Image'].'"/>';
// echo '<img width="600" height="600"  src="data:image;base64,'.$result['Selfi_Image'].'"/>';
// }
// $conn->close();



    
 


?>