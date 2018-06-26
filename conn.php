
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "visa_project";
$DB_TBLName = "main"; 
$filename = "temp"; 


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
} 
?>