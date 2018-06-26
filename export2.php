<?php  
include 'conn.php';
session_start();

$id = $_SESSION['id'];
$_SESSION['idToUpdate'] = $id;

 $query = "SELECT * FROM main WHERE id='$id'";
 $result = mysqli_query($conn, $query);
 $output ="";
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>מספר מזהה</th>  
                         <th>סוג דרכון</th>  
                         <th>נמל הגעה</th>  
                         <th>סוג ויזה</th>  
                         <th>מטרת הביקור</th>  
                         <th>תאריך לידה</th>  
                         <th>תאריך הגעה</th>  
                         <th>שם משפחה</th>  
                         <th>שם פרטי</th>  
                         <th>שם משפחה קודם</th>  
                         <th>שם פרטי קודם</th>  
                         <th>מין</th>  
                         <th>עיר לידה</th>  
                         <th>ארץ לידה</th>  
                         <th>מספר זהות</th>  
                         <th>אזרחות קודמת</th>  
                         <th>גרת לפחות שנתיים בארץ ממנה אתה מגיש בקשה לויזה?</th>  
       <th>Postal Code</th>
       <th>Country</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["id"].'</td>  
                         <td>'.$row["Passport_Type"].'</td>  
                         <td>'.$row["Port_Of_Arrival"].'</td>  
                         <td>'.$row["Visa_Type"].'</td>  
                         <td>'.$row["Purpose_Of_Visit"].'</td>  
                         <td>'.$row["Email"].'</td>  
                         <td>'.$row["Date_Of_Birth"].'</td>  
                         <td>'.$row["Expected_Arrival_Date"].'</td>  
                         <td>'.$row["Surename"].'</td>  
                         <td>'.$row["Given_Name"].'</td>  
                         <td>'.$row["Prev_Surname"].'</td>  
                         <td>'.$row["Prev_Given_Name"].'</td>  
                         <td>'.$row["Gender"].'</td>  
                         <td>'.$row["Birth_Place"].'</td>  
                         <td>'.$row["Country_Birth"].'</td>  
                         <td>'.$row["National_Id_Number"].'</td>  
                         <td>'.$row["Religion"].'</td>  
                         <td>'.$row["Education"].'</td>  
                         <td>'.$row["Nationality_By_Birth"].'</td>  
                         <td>'.$row["Prev_Nationality"].'</td>  
                         <td>'.$row["At_Least_Two_Years"].'</td>  
                         <td>'.$row["Passport_Number"].'</td>  
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }

?>
