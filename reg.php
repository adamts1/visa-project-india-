<!DOCTYPE html>
<html lang="he">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />

  <title>VisaIndia</title>
  <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
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
  <form name="Form"  onsubmit="return validateForm()" method="post"  action="insert.php" enctype="multipart/form-data"> 
<div id = "section1">
     <div class="section">
      <div class="col s12 right">
        <h4>טופס הגשת בקשה לויזה להודו</h4>
      </div>

	  
      <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="col s6">
              <select class="browser-default validate" name="passport_type" id="passport_type">
                <option value=""  disabled selected>סוג הדרכון</option>
                <option value="רגיל">רגיל</option>
                <option value="מיוחד">מיוחד</option>
              </select>
              <p class = "valid_alert" id = "valid_passport_type"></p>
            </div>
            <div class="col s6">
              <select class="browser-default" name="Nationality" id="nationality">
                <option value="" disabled selected>לאום</option>
                <option value="ILS">ישראל</option>
                <!-- רשימת מדינות עם קוד מדינה -->
              </select>
              <p class = "valid_alert" id = "valid_nationality"></p>              
            </div>
          </div>
          <div class="row">
            <div class="col s6">
              <select class="browser-default" name="Port Of Arrival" id="port_of_arrival">
                <option value="" disabled selected>נמל הגעה להודו</option>
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
              <select class="browser-default" name="Visa Type" id="visa_type">
                <option value="" disabled selected>סוג הויזה</option>
                <option value="1">תיירות</option>
                <option value="2">עסקים</option>
              </select>
              <p class = "valid_alert" id = "valid_visa_type"></p>              
            </div>
          </div>

		  
      <!-- Hidden fields area START --> 
      <!-- אם המשתמש בחר סוג ויזה עסקים,יש להציג את השדות הבאים -->	 



  <div id="visa_type_fields">
	  <div class="row">
		  <div class="input-field col s6">
      <input type="text" class="validate validate_business_prep" name="business prep" id="business_prep">
      <p class = "valid_alert" id = "valid_business_prep"></p>
		  <label for="business_prep">מטרת הביקור העסקי (למשל: הרצאות, מכירות, הקמת עסק)</label>
		  </div>
    </div>

	  <div class="row">
		  <div class="input-field col s6">
      <input type="text" class="validate validate_company_name" name = "company_name" id="company_name">
      <p class = "valid_alert" id = "valid_company_name" ></p>
		  <label for="company_name">שם החברה</label>
		  </div>
		  <div class="input-field col s6">
      <input type="text" class="validate validate_company_address" name="company_address" id="company_address">
      <p class = "valid_alert" id = "valid_company_address"></p>      
		  <label for="company_address">כתובת החברה</label>
		  </div>
	  </div>

	  <div class="row">
		  <div class="input-field col s6">
		  <input type="number" class="validate" name="company phone" id="company_phone">
      <p class = "valid_alert" id = "valid_company_phone"></p>      
		  <label for="company_phone">טלפון החברה</label>
		  </div>
		  <div class="input-field col s6">
      <input type="text" class="validate validate_company_website" name="company website" id="company_website">
      <p class = "valid_alert" id = "valid_company_website"></p>      
		  <label for="company_website">אתר אינטרנט של החברה</label>
		  </div>
	  </div>
	  
	  <div class="row">
		  <div class="input-field col s6">
      <input type="text" class="validate validate_nature_of_company" name="nature of company" id="nature_of_company">
      <p class = "valid_alert" id = "valid_nature_of_company"></p>            
		  <label for="nature_of_company">תחום החברה (למשל: מזון, רפואה)</label>
		  </div>
		  <div class="file-field input-field col s6">
              <div class="btn right teal lighten-2">
                <span>צרף כרטיס ביקור</span>
                <input type="file" id="business_card">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" id="business_card_txt">
                <p class = "valid_alert" id = "valid_business_card_txt"></p>              

              </div>
          </div>
    </div>	
  </div>
      <!-- Hidden fields / END --> 	  
                  
          <div class="row">
            <div class="col s6">
              <select class="browser-default" name="purpose of visit" id="purpose_of_visit">
                <option value="" disabled selected>מטרת הביקור</option>
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
                <input type="file" id="passport_image" name = "passport_image">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" id="passport_image_txt">
                <p class = "valid_alert" id = "valid_passport_image_txt"></p>              
              </div>
          </div>
 
          <div class="file-field input-field col s6">
              <div class="btn right teal lighten-2">
                <span>צרף תמונת פספורט</span>
                <input type="file" id="selfi_image" name="selfi_image">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" id="selfi_image_txt">
                <p class = "valid_alert" id = "valid_selfi_image_txt"></p>             
              </div>
          </div>          
         </div>
         
          <div class="row">
              <div class="input-field col s6">
               <input type="email" class="validate validate1" id="email1" >
                <p class = "valid_alert" id = "valid_email_1"></p>
               <label for="validate_email">כתובת דוא"ל</label>
              </div>
              <div class="input-field col s6">
               <input type="email" class="validate validate2" id="email2">
                <p class = "valid_alert" id = "valid_email_2"></p>
               <label for="validate_email">הקלד כתובת דוא"ל שוב</label>
              </div>
          </div>
          <div class="row">
            <div class="input-area col s6">
               <input type="text" id="date_of_birth" class="datepicker datepicker_of_birth" name="date_of_birth" style="direction:ltr;">
               <p class = "valid_alert" id = "valid_date_of_birth"></p>
               <label for="date_of_birth" data-error="wrong" data-success="right">תאריך לידה</label>
            </div>
          </div>
          <div class="row">
            <div class="input-area col s6">
               <input type="text" class="datepicker datepicker_expected_arrival_date" name="Expected_Date_of_Arrival" id="expected_arrival_date" style="direction:ltr;">
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
           <input type="text" class="validate val_surname" name="Surname/Family Name" id="surname">
            <p class = "valid_alert" id = "valid_surname"></p>
           <label for="surname">שם משפחה</label>
          </div>
          <div class="input-field col s6">
           <input type="text" class="validate val_given_name" name="Given Name" id="given_name">
            <p class = "valid_alert" id = "valid_given_name"></p>
           <label for="given_name">שם פרטי</label>
          </div>
      </div>


      <div class="row">
       <div class="col s6">
          <input type="checkbox" name="changed Surname Check" id="changed_surname_check" />
          <label for="changed_surname_check">האם אי פעם שינית את שם משפחתך? אם כן סמן את התיבה</label>
       </div>
      </div>
     
      
	  <!-- Hidden fields area START -->
    <!-- אם המשתמש סימן את התיבה מעל, יש להציג את השדות הבאים  V-->
   <div id="changed_name">
	   <div class="row">
		  <div class="input-field col s6">
       <input type="text" class="validate val_prev_surname" name="Previous Surname" id="prev_surname">
        <p class = "valid_alert" id = "valid_prev_surname"></p>
		   <label for="prev_surname" id="prev_surname_label">שם משפחה קודם</label>
		  </div>
		  <div class="input-field col s6">
       <input type="text" class="validate val_prev_given_name" name="Previous Given Name" id="prev_given_name">
       <p class = "valid_alert" id = "valid_prev_given_name"></p>      
		   <label for="prev_given_name" id="prev_given_name_label">שם פרטי קודם</label>
		  </div>
     </div>
   </div>
	  <!-- Hidden fields / END V-->  
		  
      <div class="row">
        <div class="col s6">
          <select class="browser-default" name="Gender" id="gender">
            <option value="" disabled selected>בחר מין</option>
            <option value="M">זכר</option>
            <option value="F">נקבה</option>
            <option value="X">טרנסג'נדר</option>
          </select>
          <p class = "valid_alert" id = "valid_gender"></p>      
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
           <input type="text" class="validate validate_birth_place" name = "birth_place"  id = "birth_place">
           <p class = "valid_alert" id = "valid_birth_place"></p>      
           <label for="birth_place">עיר הולדתך</label>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
          <select class="browser-default" name="Country of birth" id="country_birth">
            <option value="" disabled selected>ארץ לידה</option>
			<!-- add here country list at the same format value = country code --> 
            <option value="ILS">Israel</option>
          </select>
          <p class = "valid_alert" id = "valid_country_birth"></p>      
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="number" class="validate" name="National Id No" id="national_id_number">
          <p class = "valid_alert" id = "valid_national_id_number"></p>      
          <label for="national_id_number">מספר תעודת זהות</label>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
          <select class="browser-default" name="Religion" id="religion">
            <option value="" disabled selected>דת</option>
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
          <input type="text" class="validate validate_identity_marks" name="Visible identification marks" id="identity_marks">
           <p class = "valid_alert" id = "valid_identity_marks"></p>      
          <label for="identity_marks">סימני זיהוי חיצוניים הנראים לעין (משקפיים, קעקועים או רשמו אין)</label>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
          <select class="browser-default" name="Education" id="education">
            <option value="" disabled selected>השכלה</option>
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
          <select class="browser-default" name="Nationality by birth" id="nationality_by_birth">
            <option value="" disabled selected>האם קיבלת אזרחות מלידה או התאזרחות?</option>
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
		      <select class="browser-default" name="Prev nationality" id="prev_nationality">
            <option value="" disabled selected>אזרחות קודמת, במידה ואין דלג על שדה זה</option>
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
          <input name="at_least_two_years" type="radio" id="at_least_two_years_yes" />
          <label for="at_least_two_years_yes">כן</label>
        </div>
       <div class="col s6">
          <input name="at_least_two_years" type="radio" id="at_least_two_years_no" checked />
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
          <input type="text" class="validate" id="passport_number">
          <p class = "valid_alert" id = "valid_passport_number"></p>      
          <label for="passport_number">מספר דרכון</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate validate_pass_issue_place" id="passport_issue_place">
          <p class = "valid_alert" id = "valid_pass_issue_place"></p>      
          <label for="passport_issue_place">מקום הנפקה</label>
        </div>
      </div>
      <div class="row">
        <div class="input-area col s6">
          <input type="text" class="datepicker datepicker_passport_issue_date" name="passport_issue_date" id="passport_issue_date" style="direction:ltr;">
          <p class = "valid_alert" id = "valid_passport_issue_date"></p>      
          <label for="passport_issue_date" data-error="wrong" data-success="right">תאריך הנפקת הדרכון</label>
        </div>
      </div>
      <div class="row">
        <div class="input-area col s6">
		      <input type="text" class="datepicker datepicker_passport_expiry_date" name="passport_expiry_date" id="passport_expiry_date" style="direction:ltr;">
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
          <input type="radio" name="other passport" value="YES" id="other_ppt_1"   />
          <label for="other_ppt_1">כן</label>
       </div>
       <div class="col s6">
          <input type="radio" name="other passport" value="NO" id="other_ppt_2" checked/>
          <label for="other_ppt_2">לא</label>
       </div>       
      </div>
	  
      <!-- Hidden fields area START -->	
      <!-- אם כן יש להציג את השדות הבאים V-->

    <div id="other_pass_fields">
      <div class="row">
        <div class="col s6">
          <select class="browser-default" id="other_ppt_country_issue">
            <option value="" disabled selected>מדינת הדרכון הנוסף</option>
            <option value="1">ארץ 1</option>
            <option value="2">ארץ 2</option>
          </select>
          <p class = "valid_alert" id = "valid_other_ppt_country_issue"></p>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="number" class="validate" id="other_ppt_no">
          <p class = "valid_alert" id = "valid_other_ppt_no"></p>
          <label for="other_ppt_no">מספר הדרכון הנוסף</label>
        </div>
      </div>
      <div class="row">
        <div class="input-area col s6">
		      <input type="text" class="datepicker datepicker_other_ppt_issue_date" name="other_ppt_issue_date" id="other_ppt_issue_date" style="direction:ltr;">
          <p class = "valid_alert" id = "valid_other_ppt_issue_date"></p>
          <label for="other_ppt_issue_date" data-error="wrong" data-success="right">תאריך הנפקת הדרכון הנוסף</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate validate_other_ppt_issue_place" id="other_ppt_issue_place">
           <p class = "valid_alert" id = "valid_other_ppt_issue_place"></p>
          <label for="other_ppt_issue_place">מקום הנפקת הדרכון הנוסף</label>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
          <select class="browser-default" id="other_ppt_nationality">
            <option value="" disabled selected>אזרחות הדרכון הנוסף כפי שרשומה בדרכון</option>
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
          <input type="text" class="validate validate_address" id="address">
           <p class = "valid_alert" id = "valid_address"></p>      
          <label for="address">כתובת מגורים ומספר בית (באנגלית בלבד)</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate validate_city_town_village" id="city_town_village">
           <p class = "valid_alert" id = "valid_city_town_village"></p>      
          <label for="city_town_village">שם העיר או הישוב (באנגלית בלבד)</label>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
          <select class="browser-default" id="pres_country">
            <option value="" disabled selected>מדינה</option>
            <option value="ILS">Israel</option>
          </select>
          <p class = "valid_alert" id = "valid_pres_country"></p>      
        </div>
      </div>  
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate validate_state_name" id="state_name">
           <p class = "valid_alert" id = "valid_state_name"></p>      
          <label for="state_name">מחוז (למשל: המרכז, הצפון...)</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="number" class="validate" id="pincode">
          <p class = "valid_alert" id = "valid_pincode"></p>      
          <label for="pincode">מיקוד</label>
        </div>
      </div> 
      <div class="row">
        <div class="input-field col s6">
          <input type="number" class="validate" id="pres_phone">
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
          <input type="text" class="validate validate_fthrname" id="fthrname">
           <p class = "valid_alert" id = "valid_fthrname"></p>      
          <label for="fthrname">שם האב (באנגלית בלבד)</label>
        </div>
      </div>     
	  <div class="row">
		 <div class="col s6">
          <select class="browser-default" id="father_nationality">
            <option value="" disabled selected>אזרחות האב</option>
            <option value="ILS">Israel</option>
          </select>
          <p class = "valid_alert" id = "valid_father_nationality"></p>      
		 </div>
    </div> 
      <div class="row">
        <div class="col s6">
          <select class="browser-default" id="father_previous_nationality">
            <option value="" disabled selected>אזרחות קודמת של האב (אם יש)</option>
            <option value="ILS">Israel</option>
          </select>
        </div>
      </div> 
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate validate_father_place_of_birth" id="father_place_of_birth">
           <p class = "valid_alert" id = "valid_father_place_of_birth"></p>  
          <label for="father_place_of_birth">עיר לידה</label>
        </div>
      </div> 
      <div class="row">
        <div class="col s6">
          <select class="browser-default" id="father_country_of_birth">
            <option value="" disabled selected>מדינת לידה של האב</option>
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
          <input type="text" class="validate validate_mother_name" id="mother_name">
           <p class = "valid_alert" id = "valid_mother_name"></p>  
          <label for="mother_name">שם האם (באנגלית בלבד)</label>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
          <select class="browser-default" id="mother_nationality">
            <option value="" disabled selected>אזרחות האם</option>
            <option value="ILS">Israel</option>
          </select>
          <p class = "valid_alert" id = "valid_mother_nationality"></p>   
        </div>
      </div> 
      <div class="row">
        <div class="col s6">
          <select class="browser-default" id="mother_previous_nationality">
            <option value="" disabled selected>אזרחות קודמת של האם (אם יש)</option>
            <option value="ILS">Israel</option>
          </select>
          <p class = "valid_alert" id = "valid_mother_nationality"></p>   
        </div>
      </div> 
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate validate_mother_place_of_birth" id="mother_place_of_birth">
           <p class = "valid_alert" id = "valid_mother_place_of_birth"></p>  
          <label for="mother_place_of_birth">עיר לידה</label>
        </div>
      </div> 
      <div class="row">
        <div class="col s6">
          <select class="browser-default" id="mother_country_of_birth">
            <option value="" disabled selected>מדינת לידה של האם</option>
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
          <select class="browser-default" id="marital_status">
            <option value="" disabled selected>מצב משפחתי</option>
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
          <input type="text" class="validate validate_spouse_name" id="spouse_name">
           <p class = "valid_alert" id = "valid_spouse_name"></p>  
          <label for="spouse_name">שם בן/בת הזוג</label>
        </div>
      </div> 
      <div class="row">
        <div class="col s6">
          <select class="browser-default" id="spouse_nationality">
            <option value="" disabled selected>אזרחות בן/בת הזוג</option>
            <option value="ILS">Israel</option>
          </select>
          <p class = "valid_alert" id = "valid_spouse_nationality"></p>  
        </div>
      </div>
	  
      <div class="row">
        <div class="col s6">
          <select class="browser-default" id="spouse_previous_nationality">
            <option value="" disabled selected>אזרחות קודמת של בן הזוג אם יש</option>
            <option value="ILS">Israel</option>
          </select>
          <p class = "valid_alert" id = "valid_spouse_previous_nationality"></p>  
        </div>
      </div> 
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate validate_spouse_place_of_birth" id="spouse_place_of_birth">
           <p class = "valid_alert" id = "valid_spouse_place_of_birth"></p>  
          <label for="spouse_place_of_birth">עיר לידה של בן/בת הזוג</label>
        </div>
      </div> 
      <div class="row">
        <div class="col s6">
          <select class="browser-default" id="spouse_country_of_birth">
            <option value="" disabled selected>ארץ לידה של בן/בת הזוג</option>
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
          <input name="grandparent_flag" type="radio" id="grandparent_flag1" />
          <label for="grandparent_flag1">כן</label>
       </div>
       <div class="col s6">
          <input name="grandparent_flag" type="radio" id="grandparent_flag2" />
          <label for="grandparent_flag2">לא</label>
       </div>       
      </div> 
	  
      <!-- Hidden fields area START V-->
	  <!-- אם כן -->
    <div id="pakistan_field">
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate validate_grandparent_details" id="grandparent_details">
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
          <input type="text" class="validate validate_occupation" id="occupation">
           <p class = "valid_alert" id = "valid_occupation"></p>
          <label for="occupation">מקצוע עבודה (למשל: רופא, עיתונאי, צלם, עקר\ת בית)</label>
		       <p>אם עקר/ת בית,/סטודנט/מובטל נא לציין זאת ולכתוב בנוסף את העיסוק של בן/בת הזוג או של אחד ההורים</p>
        </div>
      </div> 
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate validate_empname" id="empname">
           <p class = "valid_alert" id = "valid_empname"></p>
          <label for="empname">שם המעסיק</label>
        </div>
      </div> 
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate validate_empdesignation" id="empdesignation">
           <p class = "valid_alert" id = "valid_empdesignation"></p>
          <label for="empdesignation">תאור התפקיד</label>
        </div>
      </div>   
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate validate_empaddress" id="empaddress">
           <p class = "valid_alert" id = "valid_empaddress"></p>  
          <label for="empaddress">כתובת מקום העבודה</label>
        </div>
      </div>  
      <div class="row">
        <div class="input-field col s6">
          <input type="number" class="validate" id="empphone">
          <p class = "valid_alert" id = "valid_empphone"></p>  
          <label for="empphone">מספר הטלפון בעבודה (אם יש)</label>
        </div>
      </div>       

      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" id="previous_occupation">
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
          <input name="prev_org" type="radio" id="prev_org1" />
          <label for="prev_org1">כן</label>
       </div>
       <div class="col s6">
          <input name="prev_org" type="radio" id="prev_org2" />
          <label for="prev_org2">לא</label>
       </div>       
      </div> 

	  <!-- Hidden fields area START V-->
    <div id="army_field">
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate validate_previous_organization" id="previous_organization">
           <p class = "valid_alert" id = "valid_previous_organization"></p>          
          <label for="previous_organization">ציין את הארגון בו שירתת (צבא\משטרה אחר)</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate validate_previous_designation" id="previous_designation">
           <p class = "valid_alert" id = "valid_previous_designation"></p>          
          <label for="previous_designation">חיל</label>
        </div>
      </div> 
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate validate_previous_rank" id="previous_rank">
           <p class = "valid_alert" id = "valid_previous_previous_rank"></p>                    
          <label for="previous_rank">דרגה</label>
        </div>
      </div>      
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate validate_previous_posting" id="previous_posting">
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
          <input type="text" class="validate validate_visa_serreq_id_1" id="visa_serreq_id_1">
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
          <select class="browser-default" id="exitpoint">
            <option value="" disabled selected>נמל עזיבה</option>
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
          <input class="old_visa_flag1" name="old_visa_flag" type="radio" id="old_visa_flag1" />
          <label for="old_visa_flag1">כן</label>
       </div>
       <div class="col s6">
          <input name="old_visa_flag" type="radio" id="old_visa_flag2" checked />
          <label for="old_visa_flag2">לא</label>
       </div>       
      </div> 
      
	  
	  <!-- Hidden fields area START V-->
      <!-- אם כן -->      
     <div id="lastCiti">

       <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate validate_prv_visit_add1" id="prv_visit_add1">
           <p class = "valid_alert" id = "valid_prv_visit_add1"></p>
          <label for="prv_visit_add1">כתובת בה ביקרת</label>
        </div>
       </div> 
       <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate validate_visited_city" id="visited_city">
           <p class = "valid_alert" id = "valid_visited_city"></p>          
          <label for="visited_city">ערים בהן ביקרת</label>
        </div>
       </div>        
       <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" id="old_visa_no">
          <p class = "valid_alert" id = "valid_old_visa_no"></p>          
          <label for="old_visa_no">מספר ויזה הישנה</label>
        </div>
       </div>      
       <div class="row">
        <div class="col s6">
          <select class="browser-default" id="old_visa_type_id">
            <option value="" disabled selected>סוג הויזה הישנה</option>
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
          <input type="text" class="validate validate_oldvisaissueplace" id="oldvisaissueplace">
           <p class = "valid_alert" id = "valid_oldvisaissueplace"></p>      
          <label for="oldvisaissueplace">מקום הנפקת הויזה הקודמת</label>
        </div>
       </div>  
	     <div class="row">
	      <div class="input-area col s6">
	      <input type="text" class="datepicker datepicker_oldvisaissuedate" name="oldvisaissuedate" id="oldvisaissuedate" style="direction:ltr;">
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
          <input name="refuse_flag" type="radio" id="refuse_flag1" />
          <label for="refuse_flag1">כן</label>
       </div>
       <div class="col s6">
          <input name="refuse_flag" type="radio" id="refuse_flag2"  checked/>
          <label for="refuse_flag2">לא</label>
       </div>       
      </div>
      
	  <!-- Hidden fields area START V-->
      <!-- אם כן -->
      <div id="denied_field">
       <div class="row">
         <div class="input-field col s8">
          <input type="text" class="validate validate_refuse_details" id="refuse_details">
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
          <input type="text" class="validate validate_country_visited" id="country_visited">
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
        <input name="saarc_flag" type="radio" id="saarc_flag1" />
        <label for="saarc_flag1">כן</label>
     </div>
     <div class="col s6">
        <input name="saarc_flag" type="radio" id="saarc_flag2" checked />
        <label for="saarc_flag2">לא</label>
     </div>       
    </div>
      
	  <!-- Hidden fields area START V-->
      <!-- אם כן -->
	  <!-- יש לאפשר למשתמש להוסיף עוד שדות במידה והוא ביקר בעוד מדינות  v-->
    
    <div id="dynamic_fields">
      <div class="row">
       <div class="col s3">
          <select class="browser-default" id="saarcCountry1">
            <option value="" disabled selected>בחר מדינה</option>
            <option value="1">אפגניסטן</option>
            <option value="1">בוטן</option>
            <option value="1">פקיסטן</option>
            <option value="1">מלדיביים</option>
            <option value="1">בנגלדש</option>
            <option value="1">סרי לנקה</option>
            <option value="1">נפאל</option>
          </select>
          <p class = "valid_alert" id = "valid_saarcCountry1"></p>
       </div>
        <div class="col s3">
          <select class="browser-default" id="saarcYear1">
            <option value="" disabled selected>בחר שנה</option>
			<!-- להציג רק 4 שנים אחרונות V-->
            <option value="1">2017</option>
            <option value="1">2017</option>
            <option value="1">2017</option>
            <option value="1">2017</option>
          </select>
          <p class = "valid_alert" id = "valid_saarcYear1"></p>
        </div>
        <div class="col s3">
        <div class="row">
          <div class="input-field col s6" style="margin-top:0;">
            <input type="number" class="validate" id="saarcVisitNo" value="1">
            <p class = "valid_alert" id = "valid_saarcVisitNo"></p>
            <label for="saarcVisitNo">מספר ביקורים</label>
          </div>
        </div>
        </div>
        <div class="btn right teal lighten-3 col s2" id="add_fields">
       
          <span>הוסף</span>
      </div>    
      </div>
    </div>
 

      <!-- Hidden fields / END V--> 	  
    </div>   <!-- end of section -->
    
    <h5>פרטי איש הקשר בהודו</h5>
    <p id = "noContactPerson">במידה ואין לכם איש קשר, אנחנו נמלא את האיזור הזה עבורכם</p>
    <div class="section">      
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate validate_nameofsponsor_ind" id="nameofsponsor_ind">
           <p class = "valid_alert" id = "valid_nameofsponsor_ind"></p>
          <label for="nameofsponsor_ind">שם איש הקשר בהודו, אם אין השאירו ריק</label>
        </div>
      </div>    
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate validate_add1ofsponsor_ind" id="add1ofsponsor_ind">
           <p class = "valid_alert" id = "valid_add1ofsponsor_ind"></p>
          <label for="add1ofsponsor_ind">כתובת איש הקשר בהודו, אם  אין השאירו ריק</label>
        </div>
      </div>     
      <div class="row">
        <div class="input-field col s6">
          <input type="number" class="validate" id="phoneofsponsor_ind">
          <label for="phoneofsponsor_ind">טלפון של איש הקשר בהודו, אם אין, השאירו ריק</label>
        </div>
      </div> 
    </div>  <!-- end of section -->

    <h5>איש קשר בישראל</h5>
    <div class="section"> 
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate validate_nameofsponsor_msn" id="nameofsponsor_msn">
           <p class = "valid_alert" id = "valid_nameofsponsor_msn"></p>
          <label for="nameofsponsor_msn">שם איש הקשר בישראל</label>
        </div>
      </div>    
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate validate_add1ofsponsor_msn" for="add1ofsponsor_msn" id="add1ofsponsor_msn">
           <p class = "valid_alert" id = "valid_add1ofsponsor_msn"></p>
          <label>כתובת איש הקשר בישראל</label>
        </div>
      </div>     
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" id="phoneofsponsor_msn">
          <p class = "valid_alert" id = "valid_phoneofsponsor_msn"></p>
          <label for="phoneofsponsor_msn">מספר טלפון של איש הקשר בישראל</label>
        </div>
      </div> 
        <!-- Submit button   -->
        <div class="sub_butt">   
                <button class="btn waves-effect waves-light material-icons center" id = "submit" type="submit">
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
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/validFields.js"></script>
  <script src="js/splitedForm.js"></script>
  <script src="js/validateBeforeGo.js"></script>
  <script src="js/emailValid.js"></script>
  <script src="js/arrData.js"></script>
  </body>
</html>



