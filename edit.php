<?php
include 'conn.php';
session_start();
$id = $_SESSION['id'];
$_SESSION['idToUpdate'] = $id;

$passportimage = $_SESSION['passportimage'];
$selfiimage = $_SESSION['selfiimage'];
$businesscard = $_SESSION['businesscard'];
if($stmt = $conn->prepare("SELECT * FROM main  WHERE id='$id'")){
    $stmt->execute();
    $result = $stmt->get_result();
    $row=$result->fetch_object(); }
?>
<html lang="he">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />


  <title>VisaIndia</title>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!-- ///-->

  <script src="js/materialize.js"></script>
  <script src="js/editImg.js"></script>
  <script src="js/init.js"></script>
  <script src="js/validFields.js"></script>
  <script src="js/onLoad.js"></script>
  <script src="js/validateBeforeGo.js"></script>
  <script src="js/arrData.js"></script>
  <script src="js/removeAlertDropdowm.js"></script>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->


</head>
<body>

  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo right">VisaIndia</a>
      <ul class="left hide-on-med-and-down">
        <li><a href="#">הזמן עכשיו</a></li>
        <li><a href="#">שאלות ותשובות</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav right-align">
        <li><a href="#">תפריט פנימי</a></li>
        <li><a href="#">תפריט פנימי</a></li>
        <li><a href="#">תפריט פנימי</a></li>
        <li><a href="#">תפריט פנימי</a></li>
      </ul>

      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

<!-- nav bar -->


 <div class="container">
  <form name="Form"  onsubmit="return validateForm()" method="post"  action="update.php" enctype="multipart/form-data" id="FormId"> 
<div id = "section1">
     <div class="section">
      <div class="col s12 right">
        <h4>טופס הגשת בקשה לויזה להודו</h4>
      </div>

	  
      <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="col s6">
              <select onchange="RemoveAlert(valid_passport_type.id)" class="browser-default validate" name="passport_type" id="passport_type">
                <option value=""  disabled selected>סוג הדרכון</option>
                <option value=<?php echo $row->Passport_Type ?> selected><?php echo $row->Passport_Type ?></option>
                <option value="רגיל">רגיל</option>
                <option value="מיוחד">מיוחד</option>
              </select>
              <p class = "valid_alert" id = "valid_passport_type"></p>
            </div>
            <div class="col s6">
              <select onchange="RemoveAlert(valid_nationality.id)" class="browser-default" name="nationality" id="nationality">
                <option value="" disabled selected>לאום</option>
                <option value=<?php echo $row->Nationality ?> selected><?php echo $row->Nationality ?></option>
                <option value="ישראל">ישראל</option>
                <!-- רשימת מדינות עם קוד מדינה -->
              </select>
              <p class = "valid_alert" id = "valid_nationality"></p>              
            </div>
          </div>
          <div class="row">
            <div class="col s6">
              <select onchange="RemoveAlert(valid_port_of_arrival.id)" class="browser-default" name="port_of_arrival" id="port_of_arrival">
                <option value="" disabled selected>נמל הגעה להודו</option>
                <option value=<?php echo $row->Port_Of_Arrival ?> selected><?php echo $row->Port_Of_Arrival ?></option>
                <option value="I022">AHMEDABAD AIRPORT</option>
                <option value="I032">AMRITSAR AIRPORT</option>
                <option value="I096">BAGDOGRA AIRPORT</option>
                <option value="I085">BENGALURU AIRPORT</option>
                <option value="I010">CALICUT AIRPORT</option>
                <option value="I005">CHANDIGARH AIRPORT</option>
                <option value="I008">CHENNAI AIRPORT</option>
                <option value="I024">COCHIN AIRPORT</option>
                <option value="I224">COCHIN SEAPORT</option>
                <option value="I094">COIMBATORE AIRPORT</option>
                <option value="I004">DELHI AIRPORT</option>
                <option value="I012">GAYA AIRPORT</option>
                <option value="I033">GOA AIRPORT</option>
                <option value="I283">GOA SEAPORT</option>
                <option value="I019">GUWAHATI AIRPORT</option>
                <option value="I041">HYDERABAD AIRPORT</option>
                <option value="I006">JAIPUR AIRPORT</option>
                <option value="I002">KOLKATA AIRPORT</option>
                <option value="I021">LUCKNOW AIRPORT</option>
                <option value="I092">MANGALORE AIRPORT</option>
                <option value="I293">MANGALORE SEAPORT</option>
                <option value="I001">MUMBAI AIRPORT</option>
                <option value="I016">NAGPUR AIRPORT</option>
                <option value="I026">PUNE AIRPORT</option>
                <option value="I003">TIRUCHIRAPALLI AIRPORT</option>
                <option value="I023">TRIVANDRUM AIRPORT</option>
                <option value="I007">VARANASI AIRPORT</option>
              </select>
              <p class = "valid_alert" id = "valid_port_of_arrival"></p>              
              
            </div>
            <div class="col s6">
              <select  onchange="RemoveAlert(valid_visa_type.id); sectionStatus(this.value, visa_type_fields.id, 'Bussiness')" class="browser-default" name="visa_type" id="visa_type">
                <option value="" disabled selected>סוג הויזה</option>
                <option value=<?php echo $row->Visa_Type ?> selected><?php echo $row->Visa_Type ?></option>
                <option value="תיירות">תיירות</option>
                <option value="Bussiness">Bussiness</option>
              </select>
              <p class = "valid_alert" id = "valid_visa_type"></p>              
            </div>
          </div>

		  
      <!-- Hidden fields area START --> 
      <!-- אם המשתמש בחר סוג ויזה עסקים,יש להציג את השדות הבאים -->	 



  <div id="visa_type_fields">
	  <div class="row">
		  <div class="input-field col s6">
      <input value="<?php echo $row->Business_Prep ?>" onkeyup="genValEngHeb(this.value, valid_business_prep.id)" type="text" class="validate validate_business_prep" name="Business_Prep" id="business_prep">
      <p class = "valid_alert" id = "valid_business_prep"></p>
		  <label for="business_prep">מטרת הביקור העסקי (למשל: הרצאות, מכירות, הקמת עסק)</label>
		  </div>
    </div>

	  <div class="row">
		  <div class="input-field col s6">
      <input value="<?php echo $row->Company_Name ?>" onkeyup="genValEng(this.value, valid_company_name.id)" type="text" class="validate validate_company_name" name = "Company_Name" id="company_name">
      <p class = "valid_alert" id = "valid_company_name" ></p>
		  <label for="company_name">שם החברה</label>
		  </div>
		  <div class="input-field col s6">
      <input value="<?php echo $row->Company_Address ?>"   type="text" class="validate validate_company_address" onkeyup="genValEng(this.value, valid_company_address.id)" name="Company_Address" id="company_address">
      <p class = "valid_alert" id = "valid_company_address"></p>      
		  <label for="company_address">כתובת החברה</label>
		  </div>
	  </div>

	  <div class="row">
		  <div class="input-field col s6">
		  <input value="<?php echo $row->Company_Phone ?>" onkeyup="RemoveAlertNum(this.value, valid_company_phone.id)" type="number" class="validate" name="Company_Phone" id="company_phone">
      <p class = "valid_alert" id = "valid_company_phone"></p>      
		  <label for="company_phone">טלפון החברה</label>
		  </div>
		  <div class="input-field col s6">
      <input value="<?php echo $row->Company_Website ?>" onkeyup="genValEng(this.value, valid_company_website.id)" type="text" class="validate validate_company_website" name="Company_Website" id="company_website">
      <p class = "valid_alert" id = "valid_company_website"></p>      
		  <label for="company_website">אתר אינטרנט של החברה</label>
		  </div>
	  </div>
	  
	  <div class="row">
		  <div class="input-field col s6">
      <input value="<?php echo $row->Nature_Of_Company ?>" type="text" class="validate validate_nature_of_company" name="Nature_Of_Company" id="nature_of_company">
      <p class = "valid_alert" id = "valid_nature_of_company"></p>            
		  <label for="nature_of_company">תחום החברה (למשל: מזון, רפואה)</label>
		  </div>
		  <div class="file-field input-field col s6">
              <div class="btn right teal lighten-2">
                <span>צרף כרטיס ביקור</span>
                <input onchange="add_bc_image()" type="file" name="Business_Card" id="business_card">
              </div>
              <div class="file-path-wrapper">
                <input  value="<?php echo $businesscard ?>" class="file-path validate" type="text" name="Business_Card_txt" id="business_card_txt">
                <p class = "valid_alert" id = "valid_business_card_txt"></p>              

              </div>
          </div>
    </div>	
  </div>
      <!-- Hidden fields / END --> 	  
                  
          <div class="row">
            <div class="col s6">
              <select onchange="RemoveAlert(valid_purpose_of_visit.id)" class="browser-default" name="Purpose_Of_Visit" id="purpose_of_visit">
                <option value="" disabled >מטרת הביקור</option>
                <option value="<?php echo $row->Purpose_Of_Visit ?>" selected><?php echo $row->Purpose_Of_Visit ?></option>
                <option value="RECREATION/SIGHT-SEEING">נופש\ביקור באתרים</option>
                <option value="MEETING FRIENDS/RELATIVES">ביקור חברים\קרובי משפחה</option>
                <option value="SHORT TERM YOGA PROGRAMME">תוכנית יוגה</option>
                <option value="BUSINESS">עסקים</option>
              </select>
              <p class = "valid_alert" id = "valid_purpose_of_visit"></p>              
            </div>
          </div>

     <div class="row">
     <div class="col s12">
     ניתן לצלם תמונת פספורט ע"י הטלפון, חשוב שיהיה רקע לבן ויראו את כל הפנים בלי חלקים מוסתרים. צילום דרכון עדיף כקובץ PDF
     </div>
     </div>
     
         <div class="row">
          <div class="file-field input-field col s6">
              <div class="btn right teal lighten-2">
                <span>צרף צילום דרכון</span>
                <input type="file"  name="Passport_Image" id="passport_image">
              </div>
              <div class="file-path-wrapper">
                <input onchange="add_passport_image()" value="<?php echo $passportimage ?>"  class="file-path validate" type="text" id="passport_image_txt">
                <p class = "valid_alert" id = "valid_passport_image_txt"></p>              
              </div>
          </div>
 
          <div class="file-field input-field col s6">
              <div class="btn right teal lighten-2">
                <span>צרף תמונת פספורט</span>
                <input onchange="add_selfi_image()" value="<?php  $SelfiImageFile ?>" type="file" id="selfi_image" name="selfi_image">
              </div>
              <div class="file-path-wrapper">
                <input value="<?php echo $selfiimage ?>" class="file-path validate" type="text" id="selfi_image_txt">
                <p class = "valid_alert" id = "valid_selfi_image_txt"></p>             
              </div>
          </div>          
         </div>

          <div class="row">
              <div class="input-field col s6">
               <input value="<?php echo $row->Email ?>" type="email" class="validate validate1" name="email1" id="email1" >
                <p class = "valid_alert" id = "valid_email_1"></p>
               <label for="validate_email">כתובת דוא"ל</label>
              </div>
              <div class="input-field col s6">
               <input value="<?php echo $row->Validate_Email ?>" type="email" class="validate validate2" name="email2" id="email2">
                <p class = "valid_alert" id = "valid_email_2"></p>
               <label for="validate_email">הקלד כתובת דוא"ל שוב</label>
              </div>
          </div>
          <div class="row">
            <div class="input-area col s6">
               <input value="<?php echo $row->Date_Of_Birth ?>" onchange="RemoveAlertDate(valid_date_of_birth.id)" type="text" id="date_of_birth" class="datepicker datepicker_of_birth" name="date_of_birth" style="direction:ltr;">
               <p class = "valid_alert" id = "valid_date_of_birth"></p>
               <label for="date_of_birth" data-error="wrong" data-success="right">תאריך לידה</label>
            </div>
          </div>
          <div class="row">
            <div class="input-area col s6">
               <input value="<?php echo $row->Expected_Arrival_Date ?>" onchange="RemoveAlertDate(valid_expected_arrival_date.id)" type="text" class="datepicker datepicker_expected_arrival_date" name="expected_arrival_date" id="expected_arrival_date" style="direction:ltr;">
               <p class = "valid_alert" id = "valid_expected_arrival_date"></p>
               <label for="expected_arrival_date" data-error="wrong" data-success="right">תאריך נחיתה משוער</label>
            </div>
          </div>
        </div>
      </div>   
     </div>  <!-- end of section -->  
  
     
    <h5>פרטי המבקש</h5>
    <div class="section">  
      <div class="row">
          <div class="input-field col s6">
           <input value="<?php echo $row->Surename ?>" onkeyup="genValEng(this.value, valid_surname.id)" type="text" class="validate val_surname" name="surname" id="surname">
            <p class = "valid_alert" id = "valid_surname"></p>
           <label for="surname">שם משפחה</label>
          </div>
          <div class="input-field col s6">
           <input value="<?php echo $row->Given_Name ?>" onkeyup="genValEng(this.value, valid_given_name.id)" type="text" class="validate val_given_name" name="given_name" id="given_name">
            <p class = "valid_alert" id = "valid_given_name"></p>
           <label for="given_name">שם פרטי</label>
          </div>
      </div>


      <div class="row">
       <div class="col s6">
          <input type="checkbox" name="changed Surname Check" id="changed_surname_check" <?php if($row->Prev_Given_Name != null){echo 'checked';}?> />
          <label for="changed_surname_check">האם אי פעם שינית את שם משפחתך? אם כן סמן את התיבה</label>
       </div>
      </div>
     
      
	  <!-- Hidden fields area START -->
    <!-- אם המשתמש סימן את התיבה מעל, יש להציג את השדות הבאים  V-->
   <div id="changed_name">
	   <div class="row">
		  <div class="input-field col s6">
       <input  value="<?php echo $row->Prev_Surname ?>" onkeyup="genValEng(this.value, valid_prev_surname.id)" type="text" class="validate val_prev_surname" name="Prev_Surname" id="prev_surname">
        <p class = "valid_alert" id = "valid_prev_surname"></p>
		   <label for="prev_surname" id="prev_surname_label">שם משפחה קודם</label>
		  </div>
		  <div class="input-field col s6">
       <input value="<?php echo $row->Prev_Given_Name ?>" onkeyup="genValEng(this.value, valid_prev_given_name.id)" type="text" class="validate val_prev_given_name" name="Prev_Given_Name" id="prev_given_name">
       <p class = "valid_alert" id = "valid_prev_given_name"></p>      
		   <label for="prev_given_name" id="prev_given_name_label">שם פרטי קודם</label>
		  </div>
     </div>
   </div>
	  <!-- Hidden fields / END V-->  
		  
      <div class="row">
        <div class="col s6">
          <select onchange="RemoveAlert(valid_gender.id)" class="browser-default" name="Gender" id="gender">
            <option value="" disabled>בחר מין</option>
            <option value="<?php echo $row->Gender ?>" selected><?php echo $row->Gender ?></option>
            <option value="M">זכר</option>
            <option value="F">נקבה</option>
            <option value="X">טרנסג'נדר</option>
          </select>
          <p class = "valid_alert" id = "valid_gender"></p>      
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
           <input value="<?php echo $row->Birth_Place ?>" onkeyup="genValEngHeb(this.value, valid_birth_place.id)" type="text" class="validate validate_birth_place" name = "Birth_Place"  id = "birth_place">
           <p class = "valid_alert" id = "valid_birth_place"></p>      
           <label for="birth_place">עיר הולדתך</label>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
          <select onchange="RemoveAlert(valid_country_birth.id)" class="browser-default" name="Country_Birth" id="country_birth">
            <option value="" disabled>ארץ לידה</option>
            <option value="<?php echo $row->Country_Birth ?>" selected><?php echo $row->Country_Birth ?></option>
			<!-- add here country list at the same format value = country code --> 
            <option value="ILS">Israel</option>
          </select>
          <p class = "valid_alert" id = "valid_country_birth"></p>      
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->National_Id_Number ?>" onkeyup="RemoveAlertNum(this.value, valid_national_id_number.id)" type="number" class="validate" name="National_Id_Number" id="national_id_number">
          <p class = "valid_alert" id = "valid_national_id_number"></p>      
          <label for="national_id_number">מספר תעודת זהות</label>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
          <select onchange="RemoveAlert(valid_religion.id)" class="browser-default" name="Religion" id="religion">
            <option value="" disabled>דת</option>
            <option value="<?php echo $row->Religion ?>" selected><?php echo $row->Religion ?></option>
            <option value="JUDAISM">יהדות</option>
            <option value="BAHAI">בהאי</option>
            <option value="BUDDHISM">בודהיזם</option>
            <option value="ISLAM">איסלם</option>
            <option value="CHRISTIAN">נצרות</option>
            <option value="OTHERS">אחר</option>
          </select>
          <p class = "valid_alert" id = "valid_religion"></p>      
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Identity_Marks ?>" onkeyup="genValEngHeb(this.value, valid_identity_marks.id)" type="text" class="validate validate_identity_marks" name="Identity_Marks" id="identity_marks">
           <p class = "valid_alert" id = "valid_identity_marks"></p>      
          <label for="identity_marks">סימני זיהוי(משקפיים, קעקועים או רשמו אין)</label>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
          <select onchange="RemoveAlert(valid_education.id)" class="browser-default" name="Education" id="education">
            <option value="" disabled>השכלה</option>
            <option "value=<?php echo $row->Education ?>" selected><?php echo $row->Education ?></option>
            <option value="BELOW MATRICULATION">פחות מ-10 שנות לימוד</option>			
            <option value="GRADUATE">בוגר בית ספר תיכון</option>
            <option value="ILLITERATE">ללא השכלה פורמלית</option>
            <option value="POST GRADUATE">בוגר תואר ראשון</option>
            <option value="HIGHER SECONDARY">בוגר תואר שני ומעלה</option>
            <option value="NA BEING MINOR">ילדים?</option>
            <option value="PROFESSIONAL">הכשרה מקצועית</option>
            <option value="OTHERS">אחר</option>
          </select>
          <p class = "valid_alert" id = "valid_education"></p>      
        </div>
      </div>
	  
	  
	  
      <div class="row">
        <div class="col s6">
          <select onchange="RemoveAlert(valid_nationality_by_birth.id); sectionStatus(this.value, naturalization.id, 'NATURALIZATION')" class="browser-default" name="Nationality_By_Birth" id="nationality_by_birth">
            <option value="" disabled>האם קיבלת אזרחות מלידה או התאזרחות?</option>
            <option value="<?php echo $row->Nationality_By_Birth ?>" selected><?php echo $row->Nationality_By_Birth	 ?></option>
            <option value="BY BIRTH">מלידה</option>
            <option value="NATURALIZATION">התאזרחות</option>
          </select>
          <p class = "valid_alert" id = "valid_nationality_by_birth"></p> 
        </div>
      </div>
	  
	  <!-- Hidden fields area START -->	  
    <!-- אם קיבל אזרחות מתהליך התאזרחות יש להציג את השדה הבא V -->
    

    <div id="naturalization">
      <div class="row">
        <div class="col s6">
		      <select class="browser-default" name="Prev_Nationality" id="prev_nationality">
            <option value="" disabled>אזרחות קודמת, במידה ואין דלג על שדה זה</option>
            <option value="<?php echo $row->Prev_Nationality ?>" selected><?php echo $row->Prev_Nationality ?></option>
            <option value="ILS">Israel</option>
          </select>
        </div>
      </div>
    </div>
	  <!-- Hidden fields / END v -->  
	  
     <div class="row">
     <div class="col s6">
     האם גרת לפחות שנתיים בארץ ממנה אתה מגיש בקשה לויזה?
     </div>
     </div>
      <div class="row">
        <div class="col s1">
          <input value="Yes" name="At_Least_Two_Years" type="radio" <?php echo ($row->At_Least_Two_Years=='Yes')?'checked':'' ?> id="at_least_two_years_yes" />
          <label for="at_least_two_years_yes">כן</label>
        </div>
       <div class="col s6">
          <input value="No" name="At_Least_Two_Years" type="radio" <?php echo ($row->At_Least_Two_Years =='No')?'checked':'' ?> id="at_least_two_years_no"  />
          <label for="at_least_two_years_no">לא</label>
       </div>       
      </div>
    </div>  <!-- end of section -->



   <div class="row">
    <div class="file-field input-field col s6">
        <div class="btn right teal lighten-2" id="part2button">
          <span>חלק 2</span>
        </div>
    </div>
   </div>
  </div>
   <div id = "section2">
	
    <h5>פרטי הדרכון</h5>
    <div class="section">  
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Passport_Number ?>" onkeyup="RemoveAlertNum(this.value, valid_passport_number.id)" type="text" class="validate" name="Passport_Number" id="passport_number">
          <p class = "valid_alert" id = "valid_passport_number"></p>      
          <label for="passport_number">מספר דרכון</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Passport_Issue_Place ?>" onkeyup="genValEng(this.value, valid_pass_issue_place.id)" type="text" class="validate validate_pass_issue_place" name="Passport_Issue_Place" id="passport_issue_place">
          <p class = "valid_alert" id = "valid_pass_issue_place"></p>      
          <label for="passport_issue_place">מקום הנפקה</label>
        </div>
      </div>
      <div class="row">
        <div class="input-area col s6">
          <input value="<?php echo $row->Passport_Issue_Date ?>" onchange="RemoveAlertDate(valid_passport_issue_date.id)" type="text" class="datepicker datepicker_passport_issue_date" name="Passport_Issue_Date" id="passport_issue_date" style="direction:ltr;">
          <p class = "valid_alert" id = "valid_passport_issue_date"></p>      
          <label for="passport_issue_date" data-error="wrong" data-success="right">תאריך הנפקת הדרכון</label>
        </div>
      </div>
      <div class="row">
        <div class="input-area col s6">
		      <input value="<?php echo $row->Passport_Expiry_Date	 ?>" onchange="RemoveAlertDate(valid_passport_expiry_date.id)" type="text" class="datepicker datepicker_passport_expiry_date" name="Passport_Expiry_Date" id="passport_expiry_date" style="direction:ltr;">
          <p class = "valid_alert" id = "valid_passport_expiry_date"></p>      
          <label for="passport_expiry_date" data-error="wrong" data-success="right">תוקף הדרכון</label>
        </div>
      </div>
	  
	    
     <div class="row">
       <div class="col s6">
        האם יש לך דרכון נוסף?
       </div>
     </div>

      <div class="row">
       <div class="col s1">
          <input type="radio" name="Other_Passport" value="Yes" <?php echo ($row->Other_Passport=='Yes')?'checked':'' ?> id="other_ppt_1"   />
          <label for="other_ppt_1">כן</label>
       </div>
       <div class="col s6">
          <input type="radio" name="Other_Passport" value="No" <?php echo ($row->Other_Passport=='No')?'checked':'' ?> id="other_ppt_2" />
          <label for="other_ppt_2">לא</label>
       </div>       
      </div>
	  
      <!-- Hidden fields area START -->	
      <!-- אם כן יש להציג את השדות הבאים V-->
 
    <div id="other_pass_fields">
      <div class="row">
        <div class="col s6">
          <select onchange="RemoveAlert(valid_other_ppt_country_issue.id)" class="browser-default" name="Other_Ppt_Country_Issue" id="other_ppt_country_issue">
            <option value="" disabled >מדינת הדרכון הנוסף</option>
            <option value="<?php echo $row->Other_Ppt_Country_Issue ?>" selected><?php echo $row->Other_Ppt_Country_Issue ?></option>
            <option value="1">ארץ 1</option>
            <option value="2">ארץ 2</option>
          </select>
          <p class = "valid_alert" id = "valid_other_ppt_country_issue"></p>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Other_Ppt_No	 ?>" type="number" class="validate" name="Other_Ppt_No" id="other_ppt_no">
          <p class = "valid_alert" id = "valid_other_ppt_no"></p>
          <label for="other_ppt_no">מספר הדרכון הנוסף</label>
        </div>
      </div>
      <div class="row">
        <div class="input-area col s6">
		      <input value="<?php echo $row->Other_Ppt_Issue_Date	?>" onchange="RemoveAlertDate(valid_other_ppt_issue_date.id)" type="text" class="datepicker datepicker_other_ppt_issue_date" name="Other_Ppt_Issue_Date" id="other_ppt_issue_date" style="direction:ltr;">
          <p class = "valid_alert" id = "valid_other_ppt_issue_date"></p>
          <label for="other_ppt_issue_date" data-error="wrong" data-success="right">תאריך הנפקת הדרכון הנוסף</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Other_Ppt_Issue_Place	?>" onkeyup="genValEngHeb(this.value, valid_other_ppt_issue_place.id)" type="text" class="validate validate_other_ppt_issue_place" name="Other_Ppt_Issue_Place" id="other_ppt_issue_place">
           <p class = "valid_alert" id = "valid_other_ppt_issue_place"></p>
          <label for="other_ppt_issue_place">מקום הנפקת הדרכון הנוסף</label>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
          <select onchange="RemoveAlert(valid_other_ppt_nationality.id)" class="browser-default" name="Other_Ppt_Nationality" id="other_ppt_nationality">
            <option value="" disabled >אזרחות הדרכון הנוסף כפי שרשומה בדרכון</option>
            <option value="<?php echo $row->Other_Ppt_Nationality ?>" selected><?php echo $row->Other_Ppt_Nationality ?></option>
            <option value="1">ארץ 1</option>
            <option value="2">ארץ 2</option>
          </select>
          <p class = "valid_alert" id = "valid_other_ppt_nationality"></p>
        </div>
      </div>
    </div>
	  <!-- Hidden fields / END  V-->  
 
    </div> <!-- end of section -->
    
    
    <h5>פרטים אודות מבקש הויזה</h5>
    <div class="section">  
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Address1 ?>" onkeyup="genValEng(this.value, valid_address.id)" type="text" class="validate validate_address" name="Address1" id="address">
           <p class = "valid_alert" id = "valid_address"></p>      
          <label for="address">כתובת מגורים ומספר בית (באנגלית בלבד)</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->City_Town_Vllage ?>" onkeyup="genValEng(this.value, valid_city_town_village.id)" type="text" class="validate validate_city_town_village" name="City_Town_Village" id="city_town_village">
           <p class = "valid_alert" id = "valid_city_town_village"></p>      
          <label for="city_town_village">שם העיר או הישוב (באנגלית בלבד)</label>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
          <select onchange="RemoveAlert(valid_pres_country.id)" class="browser-default" name="Pres_Country" id="pres_country">
            <option value="" disabled>מדינה</option>
            <option value="<?php echo $row->Pres_Country ?>" selected><?php echo $row->Pres_Country ?></option>
            <option value="ILS">Israel</option>
          </select>
          <p class = "valid_alert" id = "valid_pres_country"></p>      
        </div>
      </div>  
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->State_Name ?>" onkeyup="genValEngHeb(this.value, valid_state_name.id)" type="text" class="validate validate_state_name" name="State_Name" id="state_name">
           <p class = "valid_alert" id = "valid_state_name"></p>      
          <label for="state_name">מחוז (למשל: המרכז, הצפון...)</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Pincode ?>" onkeyup="RemoveAlertNum(this.value, valid_pincode.id)" type="number" class="validate" name="Pincode" id="pincode">
          <p class = "valid_alert" id = "valid_pincode"></p>      
          <label for="pincode">מיקוד</label>
        </div>
      </div> 
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Pres_Phone ?>" onkeyup="RemoveAlertNum(this.value, valid_pres_phone.id)"  type="number" class="validate" name="Pres_Phone" id="pres_phone">
          <p class = "valid_alert" id = "valid_pres_phone"></p>      
          <label for="pres_phone">מספר טלפון</label>
        </div>
      </div> 
      <!-- בשלב הבא נדרשת כתובת מגורים קבועה - אפשר לשקול להסיר את השדה -->
      <!-- אפשר להוסיף צ'קבוקס שבוחרת אותו דבר --> 
      
    </div> <!-- end of section -->
    <h5>פרטים אודות האב</h5>
    <div class="section">      
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Fthrname ?>" onkeyup="genValEngHeb(this.value, valid_fthrname.id)" type="text" class="validate validate_fthrname" name="Fthrname" id="fthrname">
           <p class = "valid_alert" id = "valid_fthrname"></p>      
          <label for="fthrname">שם האב (באנגלית בלבד)</label>
        </div>
      </div>     
	  <div class="row">
		 <div class="col s6">
          <select onchange="RemoveAlert(valid_father_nationality.id)" class="browser-default" name="Father_Nationality" id="father_nationality">
            <option value="" disabled >אזרחות האב</option>
            <option value="<?php echo $row->Father_Nationality ?>" selected><?php echo $row->Father_Nationality ?></option>
            <option value="ILS">Israel</option>
          </select>
          <p class = "valid_alert" id = "valid_father_nationality"></p>      
		 </div>
    </div> 
      <div class="row">
        <div class="col s6">
          <select class="browser-default" name="Father_Previous_Nationality" id="father_previous_nationality">
            <option value="" disabled >אזרחות קודמת של האב (אם יש)</option>
            <option value="<?php echo $row->Father_Previous_Nationality ?>" selected><?php echo $row->Father_Previous_Nationality ?></option>
            <option value="ILS">Israel</option>
          </select>
        </div>
      </div> 
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Father_Place_Of_Birth ?>" onkeyup="genValEng(this.value, valid_father_place_of_birth.id)" type="text" class="validate validate_father_place_of_birth" name="Father_Place_Of_Birth" id="father_place_of_birth">
           <p class = "valid_alert" id = "valid_father_place_of_birth"></p>  
          <label for="father_place_of_birth">עיר לידה</label>
        </div>
      </div> 
      <div class="row">
        <div class="col s6">
          <select onchange="RemoveAlert(valid_father_country_of_birth.id)" class="browser-default" name="Father_Country_Of_Birth" id="father_country_of_birth">
            <option value="" disabled>מדינת לידה של האב</option>
            <option value="<?php echo $row->Father_Country_Of_Birth ?>" selected><?php echo $row->Father_Country_Of_Birth ?></option>
            <option value="ILS">Israel</option>
          </select>
          <p class = "valid_alert" id = "valid_father_country_of_birth"></p>  
        </div>
      </div> 
    </div> <!-- end of section -->

	
    <h5>פרטים אודות האם</h5>
    <div class="section">      
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Mother_Name ?>" onkeyup="genValEng(this.value, valid_mother_name.id)" type="text" class="validate validate_mother_name" name="Mother_Name" id="mother_name">
           <p class = "valid_alert" id = "valid_mother_name"></p>  
          <label for="mother_name">שם האם (באנגלית בלבד)</label>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
          <select onchange="RemoveAlert(valid_mother_nationality.id)" class="browser-default" name="Mother_Nationality" id="mother_nationality">
            <option value="" disabled>אזרחות האם</option>
            <option value="<?php echo $row->Mother_Nationality ?>" selected><?php echo $row->Mother_Nationality ?></option>
            <option value="ILS">Israel</option>
          </select>
          <p class = "valid_alert" id = "valid_mother_nationality"></p>   
        </div>
      </div> 
      <div class="row">
        <div class="col s6">
          <select onchange="RemoveAlert(valid_mother_previous_nationality.id)"  class="browser-default" name='Mother_Previous_Nationality' id="mother_previous_nationality">
            <option value="" disabled>אזרחות קודמת של האם (אם יש)</option>
            <option value="<?php echo $row->Mother_Previous_Nationality ?>" selected><?php echo $row->Mother_Previous_Nationality ?></option>
            <option value="ILS">Israel</option>
          </select>
          <p class = "valid_alert" id = "valid_mother_previous_nationality"></p>   
        </div>
      </div> 
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Mother_Place_Of_Birth ?>" onkeyup="genValEng(this.value, valid_mother_place_of_birth.id)" type="text" class="validate validate_mother_place_of_birth" name="Mother_Place_Of_Birth" id="mother_place_of_birth">
           <p class = "valid_alert" id = "valid_mother_place_of_birth"></p>  
          <label for="mother_place_of_birth">עיר לידה</label>
        </div>
      </div> 
      <div class="row">
        <div class="col s6">
          <select onchange="RemoveAlert(valid_mother_country_of_birth.id)" class="browser-default" name="Mother_Country_Of_Birth" id="mother_country_of_birth">
            <option value="" disabled >מדינת לידה של האם</option>
            <option value="<?php echo $row->Mother_Country_Of_Birth ?>" selected><?php echo $row->Mother_Country_Of_Birth ?></option>
            <option value="ILS">Israel</option>
          </select>
          <p class = "valid_alert" id = "valid_mother_country_of_birth"></p>            
        </div>
      </div> 
    </div>  <!-- end of section -->

	
    <h5>מצב משפחתי \ קשרים לפקיסטן \ עבודה ושירות צבאי</h5>
    <div class="section">      
      <div class="row">
        <div class="col s6">
          <select onchange="RemoveAlert(valid_marital_status.id); sectionStatus(this.value, married_field.id, 'married')" class="browser-default" name="Marital_Status" id="marital_status">
            <option value="" disabled>מצב משפחתי</option>
            <option value="<?php echo $row->Marital_Status?>" selected><?php echo $row->Marital_Status ?></option>
            <option value="single">רווק</option>
            <option value="married">נשוי</option>
          </select>
          <p class = "valid_alert" id = "valid_marital_status"></p>            
        </div>
      </div> 
      
	  <!-- Hidden fields area START V-->	
      <!-- אם נשוי -->
    <div id="married_field">
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Spouse_Name ?>" onkeyup="genValEng(this.value, valid_spouse_name.id)" type="text" class="validate validate_spouse_name" name='Spouse_Name' id="spouse_name">
           <p class = "valid_alert" id = "valid_spouse_name"></p>  
          <label for="spouse_name">שם בן/בת הזוג</label>
        </div>
      </div> 
      <div class="row">
        <div class="col s6">
          <select onchange="RemoveAlert(valid_spouse_nationality.id)" class="browser-default" name="Spouse_Nationality" id="spouse_nationality">
            <option value="" disabled>אזרחות בן/בת הזוג</option>
            <option value="<?php echo $row->Spouse_Nationality	?>" selected><?php echo $row->Spouse_Nationality	?></option>
            <option value="ILS">Israel</option>
          </select>
          <p class = "valid_alert" id = "valid_spouse_nationality"></p>  
        </div>
      </div>
	  
      <div class="row">
        <div class="col s6">
          <select onchange="RemoveAlert(valid_spouse_previous_nationality.id)" class="browser-default" name="Spouse_Previous_Nationality" id="spouse_previous_nationality">
            <option value="" disabled>אזרחות קודמת של בן הזוג אם יש</option>
            <option value="<?php echo $row->Spouse_Previous_Nationality	?>" selected><?php echo $row->Spouse_Previous_Nationality	?></option>
            <option value="ILS">Israel</option>
          </select>
          <p class = "valid_alert" id = "valid_spouse_previous_nationality"></p>  
        </div>
      </div> 
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Spouse_Place_Of_Birth ?>" onkeyup="genValEng(this.value, valid_spouse_place_of_birth.id)" type="text" class="validate validate_spouse_place_of_birth" name="Spouse_Place_Of_Birth" id="spouse_place_of_birth">
           <p class = "valid_alert" id = "valid_spouse_place_of_birth"></p>  
          <label for="spouse_place_of_birth">עיר לידה של בן/בת הזוג</label>
        </div>
      </div> 
      <div class="row">
        <div class="col s6">
          <select onchange="RemoveAlert(valid_spouse_country_of_birth.id)" class="browser-default" name="Spouse_Country_Of_Birth" id="spouse_country_of_birth">
            <option value="" disabled>ארץ לידה של בן/בת הזוג</option>
            <option value="<?php echo $row->Spouse_Country_Of_Birth	?>" selected><?php echo $row->Spouse_Country_Of_Birth	?></option>
            <option value="ILS">Israel</option>
          </select>
          <p class = "valid_alert" id = "valid_spouse_country_of_birth"></p>  
        </div>
      </div> 
    </div> 
      <!-- Hidden fields / END V-->  
	  
	  
     <div class="row">
      <div class="col s6">
האם יש להוריך או סביך קשר לפקיסטן? סמן כן או לא
      </div>
     </div>

	  
      <div class="row">
       <div class="col s1">
          <input value="Yes" type="radio" name="Grandparent_Flag" <?php echo ($row->Grandparent_Flag=='Yes')?'checked':'' ?> id="grandparent_flag1" />
          <label for="grandparent_flag1">כן</label>
       </div>
       <div class="col s6">
          <input value="No" type="radio" name="Grandparent_Flag" <?php echo ($row->Grandparent_Flag=='No')?'checked':'' ?> id="grandparent_flag2" />
          <label for="grandparent_flag2">לא</label>
       </div>       
      </div> 
	  
      <!-- Hidden fields area START V-->
	  <!-- אם כן -->
    <div id="pakistan_field">
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Grandparent_Details ?>" onkeyup="genValEngHeb(this.value, valid_grandparent_details.id)" type="text" class="validate validate_grandparent_details" name="Grandparent_Details" id="grandparent_details">
           <p class = "valid_alert" id = "valid_grandparent_details"></p>
          <label for="grandparent_details">אם כן, ציין פרטים אודות הקשר עם פקיסטן</label>
        </div>
      </div>     
    </div>     
      <!-- Hidden fields / END V--> 	  
    </div>  <!-- end of section -->

	
	
    <h5>מקצוע או עיסוק המבקש</h5>
    <div class="section">   
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Occupation ?>" onkeyup="genValEngHeb(this.value, valid_occupation.id)" type="text" class="validate validate_occupation" name="Occupation" id="occupation">
           <p class = "valid_alert" id = "valid_occupation"></p>
          <label for="occupation">מקצוע עבודה (למשל: רופא, עיתונאי, צלם, עקר\ת בית)</label>
		       <p>אם עקר/ת בית,/סטודנט/מובטל נא לציין זאת ולכתוב בנוסף את העיסוק של בן/בת הזוג או של אחד ההורים</p>
        </div>
      </div> 
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Empname ?>" onkeyup="genValEngHeb(this.value, valid_empname.id)" type="text" class="validate validate_empname" name="Empname" id="empname">
           <p class = "valid_alert" id = "valid_empname"></p>
          <label for="empname">שם המעסיק</label>
        </div>
      </div> 
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Empdesignation ?>" onkeyup="genValEngHeb(this.value, valid_empdesignation.id)" type="text" class="validate validate_empdesignation" name="Empdesignation" id="empdesignation">
           <p class = "valid_alert" id = "valid_empdesignation"></p>
          <label for="empdesignation">תאור התפקיד</label>
        </div>
      </div>   
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Empaddress ?>" onkeyup="genValEng(this.value, valid_empaddress.id)" type="text" class="validate validate_empaddress" name="Empaddress" id="empaddress">
           <p class = "valid_alert" id = "valid_empaddress"></p>  
          <label for="empaddress">כתובת מקום העבודה</label>
        </div>
      </div>  
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Empphone ?>" type="number" class="validate" name="Empphone" id="empphone">
          <p class = "valid_alert" id = "valid_empphone"></p>  
          <label for="empphone">מספר הטלפון בעבודה (אם יש)</label>
        </div>
      </div>       

      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Previous_Occupation ?>" type="text" class="validate" name="Previous_Occupation" id="previous_occupation">
          <label for="previous_occupation">מקצוע קודם, אם אין לא חובה למלא שדה זה</label>
        </div>
      </div> 
    </div>  <!-- end of section --> 
     <div class="row">
      <div class="col s6">
      האם שירתת בצבא / במשטרה / ארגון צבאי? סמן כן או לא
      </div>
     </div>

      <div class="row">
       <div class="col s1">
          <input value="Yes"  type="radio" name="Prev_Org" <?php echo ($row->Prev_Org=='Yes')?'checked':'' ?> id="prev_org1" />
          <label for="prev_org1">כן</label>
       </div>
       <div class="col s6">
          <input value="No"  type="radio" name="Prev_Org" <?php echo ($row->Prev_Org=='No')?'checked':'' ?> id="prev_org2" />
          <label for="prev_org2">לא</label>
       </div>       
      </div> 

	  <!-- Hidden fields area START V-->
    <div id="army_field">
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Previous_Organization ?>" onkeyup="genValEngHeb(this.value, valid_previous_organization.id)" type="text" class="validate validate_previous_organization" name="Previous_Organization" id="previous_organization">
           <p class = "valid_alert" id = "valid_previous_organization"></p>          
          <label for="previous_organization">ציין את הארגון בו שירתת (צבא\משטרה אחר)</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Previous_Designation ?>" onkeyup="genValEngHeb(this.value, valid_previous_designation.id)" type="text" class="validate validate_previous_designation" name="Previous_Designation" id="previous_designation">
           <p class = "valid_alert" id = "valid_previous_designation"></p>          
          <label for="previous_designation">חיל</label>
        </div>
      </div> 
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Previous_Rank ?>" onkeyup="genValEngHeb(this.value, valid_previous_previous_rank.id)" type="text" class="validate validate_previous_rank" name="Previous_Rank" id="previous_rank">
           <p class = "valid_alert" id = "valid_previous_previous_rank"></p>                    
          <label for="previous_rank">דרגה</label>
        </div>
      </div>      
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Previous_Posting ?>" type="text" class="validate validate_previous_posting" name="Previous_Posting" id="previous_posting">
           <p class = "valid_alert" id = "valid_previous_posting"></p>                              
          <label for="previous_posting">מקום השירות?</label>
        </div>
      </div>
    </div>
    <!-- Hidden fields / END V--> 

    <div class="row">
        <div class="file-field input-field col s6">
            <div class="btn right teal lighten-2" id="part3button">
              <span>חלק 3</span>
            </div>
        </div>
      </div>
   </div>   <!-- End of section2  -->

	 <div id = "section3"> 
    <h5>פרטים אודות הביקור בהודו</h5>
     <div class="section"> 
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->visa_serreq_id_1 ?>" onkeyup="genValEngHeb(this.value, valid_visa_serreq_id_1.id)" type="text" class="validate validate_visa_serreq_id_1" name="Visa_Serreq_Id_1" id="visa_serreq_id_1">
           <p class = "valid_alert" id = "valid_visa_serreq_id_1"></p>                              
          <label for="visa_serreq_id_1">ערים בהם את\ה מתכננ\ת לבקר</label>
        </div>
      </div>  
      <!-- <div class="row">
        <div class="input-field col s6">
          <input id="duration_of_visa" type="text" class="validate">
          <label for="duration_of_visa">זמן הויזה: 60 יום שדה לא ניתן לעריכה</label>
        </div>
      </div> 
      <div class="row">
        <div class="input-field col s6">
          <input id="no_of_entries " type="text" class="validate">
          <label for="no_of_entries">מספר הכניסות 2 שדה לא ניתן לעריכה</label>
        </div>
      </div> 
      <div class="row">
        <div class="input-field col s6">
          <input id="port_of_arrival_in_india " type="text" class="validate">
          <label for="port_of_arrival_in_india">נמל הגעה שדה לא ניתן לעריכה</label>
        </div>
      </div>  -->
            
      <div class="row">
        <div class="col s6">
          <select onchange="RemoveAlert(valid_exitpoint.id)" class="browser-default" name="Exitpoint" id="exitpoint">
            <option value="" disabled>נמל עזיבה</option>
            <option value="<?php echo $row->Exitpoint	?>" selected><?php echo $row->Exitpoint	?></option>
            <option value="AHMEDABAD AIRPORT">AHMEDABAD AIRPORT</option>
            <option value="AMRITSAR AIRPORT">AMRITSAR AIRPORT</option>
            <option value="BAGDOGRA AIRPORT">BAGDOGRA AIRPORT</option>
            <option value="BENGALURU AIRPORT">BENGALURU AIRPORT</option>
            <option value="CALICUT AIRPORT">CALICUT AIRPORT</option>
            <option value="CHANDIGARH AIRPORT">CHANDIGARH AIRPORT</option>
            <option value="CHENNAI AIRPORT">CHENNAI AIRPORT</option>
            <option value="COCHIN AIRPORT">COCHIN AIRPORT</option>
            <option value="COCHIN SEAPORT">COCHIN SEAPORT</option>
            <option value="COIMBATORE AIRPORT">COIMBATORE AIRPORT</option>
            <option value="DELHI AIRPORT">DELHI AIRPORT</option>
            <option value="GAYA AIRPORT">GAYA AIRPORT</option>
            <option value="GOA AIRPORT">GOA AIRPORT</option>
            <option value="GOA SEAPORT">GOA SEAPORT</option>
            <option value="GUWAHATI AIRPORT">GUWAHATI AIRPORT</option>
            <option value="HYDERABAD AIRPORT">HYDERABAD AIRPORT</option>
            <option value="JAIPUR AIRPORT">JAIPUR AIRPORT</option>
            <option value="KOLKATA AIRPORT">KOLKATA AIRPORT</option>
            <option value="LUCKNOW AIRPORT">LUCKNOW AIRPORT</option>
            <option value="MANGALORE AIRPORT">MANGALORE AIRPORT</option>
            <option value="MANGALORE SEAPORT">MANGALORE SEAPORT</option>
            <option value="MUMBAI AIRPORT">MUMBAI AIRPORT</option>
            <option value="NAGPUR AIRPORT">NAGPUR AIRPORT</option>
            <option value="PUNE AIRPORT">PUNE AIRPORT</option>
            <option value="TIRUCHIRAPALLI AIRPORT">TIRUCHIRAPALLI AIRPORT</option>
            <option value="TRIVANDRUM AIRPORT">TRIVANDRUM AIRPORT</option>
            <option value="VARANASI AIRPORT">VARANASI AIRPORT</option>
          </select>
          <p class = "valid_alert" id = "valid_exitpoint"></p>                              
        </div>
      </div>       
     </div> <!-- end of section -->
    
    
    <h5>פרטי ויזה קודמת</h5>
	
    <div class="section">  
      <div class="row">
       <div class="col s6">
        האם ביקרת בהודו בעבר? סמן כן או לא
	     </div>
      </div>
      <div class="row">
       <div class="col s1">
          <input value="Yes" class="old_visa_flag1" type="radio" name="Old_Visa_Flag" <?php echo ($row->Old_Visa_Flag=='Yes')?'checked':'' ?> id="old_visa_flag1" />
          <label for="old_visa_flag1">כן</label>
       </div>
       <div class="col s6">
          <input value="No" type="radio" name="Old_Visa_Flag" id="old_visa_flag2"  <?php echo ($row->Old_Visa_Flag=='No')?'checked':'' ?>  />
          <label for="old_visa_flag2">לא</label>
       </div>       
      </div> 
      
	  
	  <!-- Hidden fields area START V-->
      <!-- אם כן -->      
     <div id="lastCiti">

       <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Prv_Visit_Add1 ?>" onkeyup="genValEngHeb(this.value, valid_prv_visit_add1.id)" type="text" class="validate validate_prv_visit_add1" name="Prv_Visit_Add1" id="prv_visit_add1">
           <p class = "valid_alert" id = "valid_prv_visit_add1"></p>
          <label for="prv_visit_add1">כתובת בה ביקרת</label>
        </div>
       </div> 
       <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Visited_City ?>" onkeyup="genValEngHeb(this.value, valid_visited_city.id)" type="text" class="validate validate_visited_city" name="Visited_City" id="visited_city">
           <p class = "valid_alert" id = "valid_visited_city"></p>          
          <label for="visited_city">ערים בהן ביקרת</label>
        </div>
       </div>        
       <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Old_Visa_Type_Id ?>" type="text" class="validate" name="Old_Visa_No" id="old_visa_no">
          <p class = "valid_alert" id = "valid_old_visa_no"></p>          
          <label for="old_visa_no">מספר ויזה הישנה</label>
        </div>
       </div>      
       <div class="row">
        <div class="col s6">
          <select onchange="RemoveAlert(valid_old_visa_type_id.id)" class="browser-default" name="Old_Visa_Type_Id" id="old_visa_type_id">
            <option value="" disabled selected>סוג הויזה הישנה</option>
            <option value="<?php echo $row->Old_Visa_Type_Id?>" selected><?php echo $row->Old_Visa_Type_Id	?></option>
            <option value="1">BUSINESS VISA</option>
            <option value="4">CONFERENCE VISA</option>
            <option value="11">DIPLOMATIC VISA</option>
            <option value="87">DOUBLE ENTRY</option>
            <option value="9">EMPLOYMENT  VISA</option>
            <option value="6">ENTRY VISA</option>
            <option value="100">e-Visa</option>
            <option value="84">FILM VISA</option>
            <option value="85">INTERN VISA</option>
            <option value="8">JOURNALIST VISA</option>
            <option value="13">MEDICAL ATTENDANT</option>
            <option value="16">MEDICAL VISA</option>
            <option value="7">MISSIONARY VISA</option>
            <option value="63">MOUNTAINEERING VISA</option>
            <option value="12">OFFICIAL VISA</option>
            <option value="64">PILGRIMES VISA</option>
            <option value="65">PROJECT VISA</option>
            <option value="66">RESEARCH VISA</option>
            <option value="2">STUDENT VISA</option>
            <option value="3">TOURIST VISA</option>
            <option value="5">TRANSIT VISA</option>
            <option value="86">UN DIPLOMAT</option>
            <option value="17">UN OFFICIAL</option>
            <option value="76">VISIT VISA</option>
          </select>
          <p class = "valid_alert" id = "valid_old_visa_type_id"></p>          
        </div>
       </div> 
       <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Oldvisaissueplace ?>" onkeyup="genValEngHeb(this.value, valid_oldvisaissueplace.id)" type="text" class="validate validate_oldvisaissueplace" name="Oldvisaissueplace" id="oldvisaissueplace">
           <p class = "valid_alert" id = "valid_oldvisaissueplace"></p>      
          <label for="oldvisaissueplace">מקום הנפקת הויזה הקודמת</label>
        </div>
       </div>  
	     <div class="row">
	      <div class="input-area col s6">
	      <input value="<?php echo $row->Oldvisaissuedate ?>" onchange="RemoveAlertDate(valid_oldvisaissuedate.id)" type="text" class="datepicker datepicker_oldvisaissuedate" name="Oldvisaissuedate" id="oldvisaissuedate" style="direction:ltr;">
        <p class = "valid_alert" id = "valid_oldvisaissuedate"></p>      
	      <label for="oldvisaissuedate" data-error="wrong" data-success="right">תאריך הנפקת הויזה הישנה</label>
	     </div>
	     </div>
     </div>      

	  <!-- Hidden fields / END V--> 	

      <div class="row">
       <div class="col s6">
       האם פעם נדחתה בקשתכם להכנס להודו או להאריך את זמן השהייה בהודו? סמן כן או לא
       </div>
      </div>

      <div class="row">
       <div class="col s1">
          <input value="Yes" type="radio" name="Refuse_Flag" <?php echo ($row->Refuse_Flag=='Yes')?'checked':'' ?> id="refuse_flag1" />
          <label for="refuse_flag1">כן</label>
       </div>
       <div class="col s6">
          <input value="No" type="radio" name="Refuse_Flag" <?php echo ($row->Refuse_Flag=='No')?'checked':'' ?> id="refuse_flag2"  />
          <label for="refuse_flag2">לא</label>
       </div>       
      </div>
      
	  <!-- Hidden fields area START V-->
      <!-- אם כן -->
      <div id="denied_field">
       <div class="row">
         <div class="input-field col s8">
          <input value="<?php echo $row->Refuse_Details ?>" onkeyup="genValEngHeb(this.value, valid_refuse_details.id)" type="text" class="validate validate_refuse_details" name="Refuse_Details" id="refuse_details">
           <p class = "valid_alert" id = "valid_refuse_details"></p>
          <label for="refuse_details">מהי הסיבה בגינה בקשתכם להיכנס להודו נדחתה? אם ידוע לך, ציין תאריכים ושם האדם שדחה את בקשת הויזה</label>
         </div>
       </div> 
      </div>
      <!-- Hidden fields / END v-->

    </div>    <!-- end of section -->
    <h5>מידע נוסף</h5>
    <div class="section"> 
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Country_Visited ?>" onkeyup="genValEngHeb(this.value, valid_country_visited.id)" type="text" class="validate validate_country_visited" name="Country_Visited" id="country_visited">
           <p class = "valid_alert" id = "valid_country_visited"></p>
          <label for="country_visited">מדינות אשר ביקרת בהן במהלך ה-10 שנים האחרונות (באנגלית בלבד)</label>
        </div>
      </div> 
    </div>    <!-- end of section -->
    
    <h5>מידע על ביקורים בדרום אסיה</h5>
    <div class="section"> 
     <div class="row">
      <div class="col s6">האם ביקרת באחת ממדינות דרום אסיה במשך ה-3 שנים האחרונות? סמן כן או לא
אפגניסטן, בוטן, פקיסטן, מלדיביים, בנגלדש, סרי לנקה, נפאל
      </div>
     </div>

 

    <div class="row">
     <div class="col s1">
        <input value="Yes" type="radio" name="Saarc_Flag" <?php echo ($row->Saarc_Flag=='Yes')?'checked':'' ?> id="saarc_flag1" />
        <label for="saarc_flag1">כן</label>
     </div>
     <div class="col s6">
        <input value="No" type="radio" name="Saarc_Flag" <?php echo ($row->Saarc_Flag=='No')?'checked':'' ?> id="saarc_flag2"  />
        <label for="saarc_flag2">לא</label>
     </div>       
    </div>
      
	  <!-- Hidden fields area START V-->
      <!-- אם כן -->
	  <!-- יש לאפשר למשתמש להוסיף עוד שדות במידה והוא ביקר בעוד מדינות  v-->

            <?php
        $sql1 = "SELECT * FROM test2 WHERE mainId = $id ";
        $result1 = $conn->query($sql1);
        if ($result1->num_rows > 0) {
    ?>

    <div id="dynamic_fields">

      <?php   
      while($row1 = $result1->fetch_assoc()) { ?>

      <div class="row">
       <div class="col s3">
          <select  class="browser-default" name="SaarcCountry[]" id="saarcCountry1">
            <option value="" disabled selected>בחר מדינה</option>
            <option disabled value="<?php echo $row1["Country"] ?>" selected><?php echo $row1["Country"] ?></option>

          </select>
          <p class = "valid_alert" id = "valid_saarcCountry1"></p>
       </div>
       <div class="col s3">
          <select   class="browser-default" name="SaarcYear1[]" id="saarcYear1">
            <option  value="" disabled >בחר שנה</option>
            <option disabled value="<?php echo $row1["YearOfVisits"] ?>" selected><?php echo $row1["YearOfVisits"] ?></option>
          
          </select>
          <p class = "valid_alert" id = "valid_saarcYear1"></p>
        </div>
        <div class="col s3">
        <div class="row">
          <div class="input-field col s6" style="margin-top:0;">
            <input value="<?php echo $row1["NumOfVisits"] ?>" type="number" class="validate" name="SaarcVisitNo[]" id="saarcVisitNo" disabled >
            <p class = "valid_alert" id = "valid_saarcVisitNo"></p>
            <label for="saarcVisitNo">מספר ביקורים</label>
          </div>
        </div>
        </div>
      </div>
       <?php
      }
      ?>
   
              
  </div>
  <?php
  } 
  ?>
      <!-- Hidden fields / END V--> 	  
    </div>   <!-- end of section -->
    
    <h5>פרטי איש הקשר בהודו</h5>
    <p id = "noContactPerson">במידה ואין לכם איש קשר, אנחנו נמלא את האיזור הזה עבורכם</p>
    <div class="section">      
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Nameofsponsor_Ind ?>" onkeyup="genValEng(this.value, valid_nameofsponsor_ind.id)" type="text" class="validate validate_nameofsponsor_ind" name="Nameofsponsor_Ind" id="nameofsponsor_ind">
           <p class = "valid_alert" id = "valid_nameofsponsor_ind"></p>
          <label for="nameofsponsor_ind">שם איש הקשר בהודו, אם אין השאירו ריק</label>
        </div>
      </div>    
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Add1ofsponsor_Ind ?>" onkeyup="genValEng(this.value, valid_add1ofsponsor_ind.id)" type="text" class="validate validate_add1ofsponsor_ind" name="Add1ofsponsor_Ind" id="add1ofsponsor_ind">
           <p class = "valid_alert" id = "valid_add1ofsponsor_ind"></p>
          <label for="add1ofsponsor_ind">כתובת איש הקשר בהודו, אם  אין השאירו ריק</label>
        </div>
      </div>     
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Phoneofsponsor_Ind ?>" type="number" class="validate" name="Phoneofsponsor_Ind" id="phoneofsponsor_ind">
          <label for="phoneofsponsor_ind">טלפון של איש הקשר בהודו, אם אין, השאירו ריק</label>
        </div>
      </div> 
    </div>  <!-- end of section -->

    <h5>איש קשר בישראל</h5>
    <div class="section"> 
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Nameofsponsor_Msn ?>" onkeyup="genValEng(this.value, valid_nameofsponsor_msn.id)" type="text" class="validate validate_nameofsponsor_msn" name="Nameofsponsor_Msn" id="nameofsponsor_msn">
           <p class = "valid_alert" id = "valid_nameofsponsor_msn"></p>
          <label for="nameofsponsor_msn">שם איש הקשר בישראל</label>
        </div>
      </div>    
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Add1ofsponsor_Msn ?>" onkeyup="genValEng(this.value, valid_add1ofsponsor_msn.id)" type="text" class="validate validate_add1ofsponsor_msn" for="add1ofsponsor_msn" name="Add1ofsponsor_Msn" id="add1ofsponsor_msn">
           <p class = "valid_alert" id = "valid_add1ofsponsor_msn"></p>
          <label>כתובת איש הקשר בישראל</label>
        </div>
      </div>     
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $row->Phoneofsponsor_Msn ?>" onkeyup="RemoveAlertNum(this.value, valid_phoneofsponsor_msn.id)" type="text" class="validate" name="Phoneofsponsor_Msn" id="phoneofsponsor_msn">
          <p class = "valid_alert" id = "valid_phoneofsponsor_msn"></p>
          <label for="phoneofsponsor_msn">מספר טלפון של איש הקשר בישראל</label>
        </div>
      </div> 
        <!-- Submit button   -->
        <div class="sub_butt">   
                <button class="btn waves-effect waves-light material-icons center" name="submit" id = "submit" type="submit">
                  <span>שלח טופס</span>
                </button>
        </div>
          <!-- End of submit button -->
    </div> <!-- end of section -->
   </div> <!-- end of section3 -->
  </form>
 </div>  <!-- end of container -->
<!-- End of section 3 -->
  <footer class="page-footer orange">
    <div class="container">
      <div class="row right-align">
        <div class="col l6 s12">
          <h5 class="white-text">עלינו</h5>
          <p class="grey-text text-lighten-4">אודות השירות</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">ניווט מהיר</h5>
          <ul>
            <li><a class="white-text" href="#!">הגש בקשה לויזה</a></li>
            <li><a class="white-text" href="#!">שאלות ותשובות</a></li>
          </ul>
        </div>
      
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      VisaIndia
      </div>
    </div>
  </footer>
  </body>
</html>



