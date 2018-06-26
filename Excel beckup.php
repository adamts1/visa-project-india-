<?php  
include 'conn.php';

 $query = "SELECT * FROM main WHERE id='956'";
 $result = mysqli_query($conn, $query);
 $output ="";
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Name</th>  
                         <th>Address</th>  
                         <th>City</th>  
       <th>Postal Code</th>
       <th>Country</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["Passport_Type"].'</td>  
                         <td>'.$row["Nationality"].'</td>  
                         <td>'.$row["Port_Of_Arrival"].'</td>  
                         <td>'.$row["id"].'</td>  
                         <td>'.$row["id"].'</td>  
                         <td>'.$row["Purpose_Of_Visit"].'</td>  
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }

?>
