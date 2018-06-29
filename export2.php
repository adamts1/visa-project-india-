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
                         <th>דוא"ל</th>  
                         <th>תאריך לידה</th>  
                         <th>תאריך נחיתה משוער</th>  
                         <th>שם משפחה</th>  
                         <th>שם פרטי</th>  
                         <th>שם משפחה קודם</th>  
                         <th>שם פרטי קודם</th>  
                         <th>מין</th>  
                         <th>עיר לידה</th>  
                         <th>ארץ לידה</th>  
                         <th>מספר זהות</th>  
                         <th>דת</th>  
                         <th>השכלה</th>  
                         <th>התאזרחות</th>  
                         <th>שנתיים בארץ ממנה מבקש ויזה</th>  
                         <th>מספר הדרכון</th>  
                         <th>מקום הנפקה</th>
                         <th>תאריך הנפקת דרכון</th>
                         <th>תוקף הדרכון</th>
                         <th>דרכון נוסף</th>
                         <th>מספר הדרכון הנוסף</th>
                         <th>מדינת הדרכון הנוסף</th>
                         <th>תאריך הנפקת דרכון הנוסף</th>
                         <th>מקום הנפקת הדרכון הנוסף</th>
                         <th>אזרחות הדרכון הנוסף</th>
                         <th>כתובת</th>
                         <th>עיר/ישוב</th>
                         <th>מדינה</th>
                         <th>מחוז</th>
                         <th>מיקוד</th>
                         <th>טלפון</th>
                         <th>שם האב</th>
                         <th>אזרחות האב</th>
                         <th>אזרחות קודמת</th>
                         <th>עיר לידה אב</th>
                         <th>מדינת לידה אב</th>
                         <th>שם האם</th>
                         <th>אזרחות האם</th>
                         <th>אזרחות קודמת</th>
                         <th>עיר לידה אם</th>
                         <th>מדינת לידה אם</th>
                         <th>מצב משפחתי</th>
                         <th>שם בן/בת זוג</th>
                         <th>אזרחות בן/בת זוג</th>
                         <th>אזרחות קודמת</th>
                         <th>עיר לידה זוג</th>
                         <th>ארץ לידה זוג</th>
                         <th>קשר לפקיסטן</th>
                         <th>תאור הקשר</th
                         <th>מקצוע עבודה</th>
                         <th>שם המעסיק</th>
                         <th>תאור התפקיד</th>
                         <th>כתובת עבודה</th>
                         <th>טלפון עבודה</th>
                         <th>מקצוע קודם</th>
                         <th>שירות צבאי</th>
                         <th>ארגון</th>
                         <th>חיל</th>
                         <th>דרגה</th>
                         <th>מקום השירות</th>
                         <th>ערים מתוכננות</th>
                         <th>נמל עזיבה</th>
                         <th>ביקור עבר בהודו?</th>
                         <th>כתובת הביקור</th>
                         <th>ערים בהן ביקרת</th>
                         <th>מספר היזה הישנה</th>
                         <th>סוג הויזה הישנה</th>
                         <th>מקום הנפקת הויזה הקודמת</th>
                         <th>תאריך הנפקת הויזה הישנה</th>
                         <th>דחיה בעבר</th>
                         <th>סיבת דחיה</th>
                         <th>מידע נוסף</th>
                         <th>קשר בהודו</th>
                         <th>כתובת קשר הודו</th>
                         <th>טלפון קשר הודו</th>
                         <th>קשר ישראל</th>
                         <th>כתובת קשר ישראל</th>
                         <th>טלפון ישראל</th>
                         
                        

                         


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
                         <td>'.$row["Prev_Nationality"].'</td>  
                         <td>'.$row["At_Least_Two_Years"].'</td>  
                         <td>'.$row["Passport_Number"].'</td>  
                         <td>'.$row["Passport_Issue_Place"].'</td>  
                         <td>'.$row["Passport_Issue_Date"].'</td>  
                         <td>'.$row["Passport_Expiry_Date"].'</td>  
                         <td>'.$row["Other_Passport"].'</td>  
                         <td>'.$row["Other_Ppt_No"].'</td>  
                         <td>'.$row["Other_Ppt_Country_Issue"].'</td>  
                         <td>'.$row["Other_Ppt_Issue_Date"].'</td>  
                         <td>'.$row["Other_Ppt_Issue_Place"].'</td>  
                         <td>'.$row["Other_Ppt_Nationality"].'</td>  
                         <td>'.$row["Address1"].'</td>  
                         <td>'.$row["City_Town_Vllage"].'</td>  
                         <td>'.$row["Pres_Country"].'</td>  
                         <td>'.$row["State_Name"].'</td>  
                         <td>'.$row["Pincode"].'</td>  
                         <td>'.$row["Pres_Phone"].'</td>
                         <td>'.$row["Fthrname"].'</td>  
                         <td>'.$row["Father_Nationality"].'</td>  
                         <td>'.$row["Father_Previous_Nationality"].'</td>  
                         <td>'.$row["Father_Place_Of_Birth"].'</td>  
                         <td>'.$row["Father_Country_Of_Birth"].'</td>  
                         <td>'.$row["Mother_Name"].'</td>  
                         <td>'.$row["Mother_Nationality"].'</td>  
                         <td>'.$row["Mother_Previous_Nationality"].'</td>  
                         <td>'.$row["Mother_Place_Of_Birth"].'</td>  
                         <td>'.$row["Mother_Country_Of_Birth"].'</td> 
                         <td>'.$row["Marital_Status"].'</td>  
                         <td>'.$row["Spouse_Name"].'</td>  
                         <td>'.$row["Spouse_Nationality"].'</td>  
                         <td>'.$row["Spouse_Previous_Nationality"].'</td>  
                         <td>'.$row["Spouse_Place_Of_Birth"].'</td>  
                         <td>'.$row["Spouse_Country_Of_Birth"].'</td> 
                         <td>'.$row["Grandparent_Flag"].'</td>  
                         <td>'.$row["Grandparent_Details"].'</td>  
                         <td>'.$row["Occupation"].'</td>  
                         <td>'.$row["Empname"].'</td>  
                         <td>'.$row["Empdesignation"].'</td>  
                         <td>'.$row["Empaddress"].'</td>  
                         <td>'.$row["Empphone"].'</td>  
                         <td>'.$row["Previous_Occupation"].'</td>  
                         <td>'.$row["Prev_Org"].'</td>  
                         <td>'.$row["Previous_Organization"].'</td>  
                         <td>'.$row["Previous_Designation"].'</td>  
                         <td>'.$row["Previous_Rank"].'</td>  
                         <td>'.$row["Previous_Posting"].'</td>
                         <td>'.$row["visa_serreq_id_1"].'</td>  
                         <td>'.$row["Exitpoint"].'</td>  
                         <td>'.$row["Old_Visa_Flag"].'</td>  
                         <td>'.$row["Prv_Visit_Add1"].'</td>  
                         <td>'.$row["Visited_City"].'</td>  
                         <td>'.$row["Old_Visa_No"].'</td>  
                         <td>'.$row["Old_Visa_Type_Id"].'</td>  
                         <td>'.$row["Oldvisaissueplace"].'</td>  
                         <td>'.$row["Oldvisaissuedate"].'</td> 
                         <td>'.$row["Refuse_Flag"].'</td>  
                         <td>'.$row["Refuse_Details"].'</td>  
                         <td>'.$row["Country_Visited"].'</td>  
                         <td>'.$row["Nameofsponsor_Ind"].'</td>  
                         <td>'.$row["Add1ofsponsor_Ind"].'</td>  
                         <td>'.$row["Phoneofsponsor_Ind"].'</td>  
                         <td>'.$row["Nameofsponsor_Msn"].'</td>  
                         <td>'.$row["Add1ofsponsor_Msn"].'</td>  
                         <td>'.$row["Phoneofsponsor_Msn"].'</td>  
                         
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }

?>