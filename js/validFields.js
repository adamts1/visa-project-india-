(function($){

  $(document).ready(function () {

    var $mail_reg = /^[a-zA-Z0-9]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    var $english_reg = /^[a-zA-Z0-9$@$!%*-?&#^-_. +]+$/;
    var $eng_heb_reg = /^[א-תa-zA-Z0-9$@$!%*-?&#^-_. +]+$/;



    $('.validate_country_visited').first().keyup(function () {  //validate refuse details eng heb 
      var $value = this.value;
      var $reg = $eng_heb_reg;
      var $select = "#valid_country_visited";
      var $text = "יש להזין שדה זה בעברית ו/או באנגלית בלבד";
      GenricValidate($value,$reg,$select,$text);
  });

    $('.validate_refuse_details').first().keyup(function () {  //validate refuse details eng heb 
      var $value = this.value;
      var $reg = $eng_heb_reg;
      var $select = "#valid_refuse_details";
      var $text = "יש להזין שדה זה בעברית ו/או באנגלית בלבד";
      GenricValidate($value,$reg,$select,$text);
  });

    $('.validate_oldvisaissueplace').first().keyup(function () {  //validate prv visit eng heb 
      var $value = this.value;
      var $reg = $eng_heb_reg;
      var $select = "#valid_oldvisaissueplace";
      var $text = "יש להזין שדה זה בעברית ו/או באנגלית בלבד";
      GenricValidate($value,$reg,$select,$text);
  });

    $('.validate_visited_city').first().keyup(function () {  //validate visited city eng heb 
      var $value = this.value;
      var $reg = $eng_heb_reg;
      var $select = "#valid_visited_city";
      var $text = "יש להזין שדה זה בעברית ו/או באנגלית בלבד";
      GenricValidate($value,$reg,$select,$text);
  });

    $('.validate_prv_visit_add1').first().keyup(function () {  //validate prv visit eng heb 
      var $value = this.value;
      var $reg = $eng_heb_reg;
      var $select = "#valid_prv_visit_add1";
      var $text = "יש להזין שדה זה בעברית ו/או באנגלית בלבד";
      GenricValidate($value,$reg,$select,$text);
  });

   $('.validate_visa_serreq_id_1').first().keyup(function () {  //validate visa serreq eng heb 
      var $value = this.value;
      var $reg = $eng_heb_reg;
      var $select = "#valid_visa_serreq_id_1";
      var $text = "יש להזין שדה זה בעברית ו/או באנגלית בלבד";
      GenricValidate($value,$reg,$select,$text);
  });

    $('.validate_previous_rank').first().keyup(function () {  //validate previous rank eng heb 
      var $value = this.value;
      var $reg = $eng_heb_reg;
      var $select = "#valid_previous_previous_rank";
      var $text = "יש להזין דרגה בעברית ו/או באנגלית בלבד";
      GenricValidate($value,$reg,$select,$text);
  });

    $('.validate_previous_designation').first().keyup(function () {  //validate previous designation eng heb 
      var $value = this.value;
      var $reg = $eng_heb_reg;
      var $select = "#valid_previous_designation";
      var $text = "יש להזין שדה זה בעברית ו/או באנגלית בלבד";
      GenricValidate($value,$reg,$select,$text);
  });
    
    $('.validate_previous_organization').first().keyup(function () {  //validate previous organization eng heb 
      var $value = this.value;
      var $reg = $eng_heb_reg;
      var $select = "#valid_previous_organization";
      var $text = "יש להזין את האירגון בו שירתת בעברית ו/או באנגלית בלבד";
      GenricValidate($value,$reg,$select,$text);
  });
      
    $('.validate_empdesignation').first().keyup(function () {  //validate job description eng heb 
      var $value = this.value;
      var $reg = $eng_heb_reg;
      var $select = "#valid_empdesignation";
      var $text = "יש להזין את תאור התפקיד בעברית ו/או באנגלית בלבד";
      GenricValidate($value,$reg,$select,$text);
  });
 
    $('.validate_empname').first().keyup(function () {  //validate employer name eng heb 
      var $value = this.value;
      var $reg = $eng_heb_reg;
      var $select = "#valid_empname";
      var $text = "יש להזין את שם המעסיק בעברית ו/או באנגלית בלבד";
      GenricValidate($value,$reg,$select,$text);
  });

    $('.validate_occupation').first().keyup(function () {  //validate occupation details eng heb 
      var $value = this.value;
      var $reg = $eng_heb_reg;
      var $select = "#valid_occupation";
      var $text = "יש להזין שדה זה בעברית ו/או באנגלית בלבד";
      GenricValidate($value,$reg,$select,$text);
  });

    $('.validate_grandparent_details').first().keyup(function () {  //validate grandparent details eng heb 
      var $value = this.value;
      var $reg = $eng_heb_reg;
      var $select = "#valid_grandparent_details";
      var $text = "יש להזין שדה זה בעברית ו/או באנגלית בלבד";
      GenricValidate($value,$reg,$select,$text);
  });

  
    $('.validate_state_name').first().keyup(function () {  //validate state name eng heb 
      var $value = this.value;
      var $reg = $eng_heb_reg;
      var $select = "#valid_state_name";
      var $text = "יש להזין מחוז בעברית ו/או באנגלית בלבד";
      GenricValidate($value,$reg,$select,$text);
  });

    $('.validate_other_ppt_issue_place').first().keyup(function () {  //validate other ppt issue place eng heb 
      var $value = this.value;
      var $reg = $eng_heb_reg;
      var $select = "#valid_other_ppt_issue_place";
      var $text = "יש להזין מקום הנפקת דרכון בעברית ו/או באנגלית בלבד";
      GenricValidate($value,$reg,$select,$text);
  });

    $('.validate_identity_marks').first().keyup(function () {  //validate identity_marks eng heb 
      var $value = this.value;
      var $reg = $eng_heb_reg;
      var $select = "#valid_identity_marks";
      var $text = "יש להזין סימני זיהוי בעברית ו/או באנגלית בלבד";
      GenricValidate($value,$reg,$select,$text);
  });

    $('.validate_birth_place').first().keyup(function () {  //validate birth place eng heb 
      var $value = this.value;
      var $reg = $eng_heb_reg;
      var $select = "#valid_birth_place";
      var $text = "יש להזין את עיר בעברית ו/או באנגלית בלבד";
      GenricValidate($value,$reg,$select,$text);
  });
     

    $('.validate_business_prep').first().keyup(function () {  //validate business prep eng heb
      var $value = this.value;
      var $reg = $eng_heb_reg;
      var $select = "#valid_business_prep";
      var $text = "יש להזין בעברית ו/או באנגלית בלבד";
      GenricValidate($value,$reg,$select,$text);
  });

  $('.validate1').first().keyup(function () {  //validate first email path 
    var $value = this.value;
    var $reg = $mail_reg;
    var $select = "#valid_email_1";
    var $text = "שדה זה חייב להכיל כתובת מייל תקני";
    GenricValidate($value,$reg,$select,$text);
});

 $('.validate2').first().keyup(function () {  //validate 2en email path
    var $value = this.value;
    var $reg = $mail_reg;
    var $select = "#valid_email_2";
    var $text = "שדה זה חייב להכיל כתובת מייל תקני בלבד";
    GenricValidate($value,$reg,$select,$text);
 });

 $('.val_surname').first().keyup(function () {  //validate sure name English only
    var $value = this.value;
    var $reg = $english_reg;
    var $select = "#valid_surname";
    var $text = "יש להזין שם משפחה באנגלית בלבד";
    GenricValidate($value,$reg,$select,$text);
  });

  $('.val_given_name').first().keyup(function () {  //validate given name English only
    var $value = this.value;
    var $reg = $english_reg;
    var $select = "#valid_given_name";
    var $text = "יש להזין שם פרטי באנגלית בלבד";
    GenricValidate($value,$reg,$select,$text);
  });

  $('.val_prev_surname').first().keyup(function () {  //validate previous sure name English only
    var $value = this.value;
    var $reg = $english_reg;
    var $select = "#valid_prev_surname";
    var $text = "יש להזין שם משפחה קודם באנגלית בלבד";
    GenricValidate($value,$reg,$select,$text);
  });

  $('.val_prev_given_name').first().keyup(function () {  //validate previous sure name English only
    var $value = this.value;
    var $reg = $english_reg;
    var $select = "#valid_prev_given_name";
    var $text = "יש להזין שם פרטי קודם באנגלית בלבד";
    GenricValidate($value,$reg,$select,$text);
  });

  $('.validate_pass_issue_place').first().keyup(function () {  //validate passport place English only
    var $value = this.value;
    var $reg = $english_reg;
    var $select = "#valid_pass_issue_place";
    var $text = "יש להזין מקום הנפקה באנגלית בלבד";
    GenricValidate($value,$reg,$select,$text);
  });


  $('.validate_address').first().keyup(function () {  //validate address English only
    var $value = this.value;
    var $reg = $english_reg;
    var $select = "#valid_address";
    var $text = "יש להזין מקום הנפקה באנגלית בלבד";
    GenricValidate($value,$reg,$select,$text);
  });

  $('.validate_city_town_village').first().keyup(function () {  //validate city\village English only
    var $value = this.value;
    var $reg = $english_reg;
    var $select = "#valid_city_town_village";
    var $text = "עיר/ישוב יש להזין באנגלית בלבד";
    GenricValidate($value,$reg,$select,$text);
  });

  
  $('.validate_fthrname').first().keyup(function () {  //validate father name English only
    var $value = this.value;
    var $reg = $english_reg;
    var $select = "#valid_fthrname";
    var $text = "יש להזין את שם האב באנגלית בלבד";
    GenricValidate($value,$reg,$select,$text);
  });

  $('.validate_father_place_of_birth').first().keyup(function () {  //validate father place of birth English only
    var $value = this.value;
    var $reg = $english_reg;
    var $select = "#valid_father_place_of_birth";
    var $text = "יש להזין את עיר הלידה של האב באנגלית בלבד";
    GenricValidate($value,$reg,$select,$text);
  });

  $('.validate_mother_name').first().keyup(function () {  //validate mother name English only
    var $value = this.value;
    var $reg = $english_reg;
    var $select = "#valid_mother_name";
    var $text = "יש להזין את שם האם באנגלית בלבד";
    GenricValidate($value,$reg,$select,$text);
  });

  $('.validate_mother_place_of_birth').first().keyup(function () {  //validate mother place of birth English only
    var $value = this.value;
    var $reg = $english_reg;
    var $select = "#valid_mother_place_of_birth";
    var $text = "יש להזין את עיר הלידה של האם באנגלית בלבד";
    GenricValidate($value,$reg,$select,$text);
  });

  $('.validate_spouse_name').first().keyup(function () {  //validate spouse name English only
    var $value = this.value;
    var $reg = $english_reg;
    var $select = "#valid_spouse_name";
    var $text = "יש להזין את שם בן/בת הזוג באנגלית בלבד";
    GenricValidate($value,$reg,$select,$text);
  });

  $('.validate_empaddress').first().keyup(function () {  //validate place of work English only
    var $value = this.value;
    var $reg = $english_reg;
    var $select = "#valid_empaddress";
    var $text = "יש להזין את כתובת מקום העבודה באנגלית בלבד";
    GenricValidate($value,$reg,$select,$text);
  });

  $('.validate_nameofsponsor_ind').first().keyup(function () {  //validate name of sponsor in india English only
    var $value = this.value;
    var $reg = $english_reg;
    var $select = "#valid_nameofsponsor_ind";
    var $text = "יש להזין שם איש קשר בהודו באנגלית בלבד";
    GenricValidate($value,$reg,$select,$text);
  });

  $('.validate_add1ofsponsor_ind').first().keyup(function () {  //validate address of sponsor in india name English only
    var $value = this.value;
    var $reg = $english_reg;
    var $select = "#valid_add1ofsponsor_ind";
    var $text = "יש להזין את כתובת איש קשר בהודו באנגלית בלבד";
    GenricValidate($value,$reg,$select,$text);
  });

  $('.validate_nameofsponsor_msn').first().keyup(function () {  //validate name of sponsor in israel  English only
    var $value = this.value;
    var $reg = $english_reg;
    var $select = "#valid_nameofsponsor_msn";
    var $text = "יש להזין את שם איש קשר בישראל באנגלית בלבד";
    GenricValidate($value,$reg,$select,$text);
  });

  $('.validate_add1ofsponsor_msn').first().keyup(function () {  //validate address of sponsor in israel English only
    var $value = this.value;
    var $reg = $english_reg;
    var $select = "#valid_add1ofsponsor_msn";
    var $text = "יש להזין את כתובת איש קשר בישראל באנגלית בלבד";
    GenricValidate($value,$reg,$select,$text);
  });

  $('.validate_company_name').first().keyup(function () {  //validate co name English only
    var $value = this.value;
    var $reg = $english_reg;
    var $select = "#valid_company_name";
    var $text = "יש להזין את שם החברה באנגלית בלבד";
    GenricValidate($value,$reg,$select,$text);
  });

  $('.validate_company_address').first().keyup(function () {  //validate co name English only
    var $value = this.value;
    var $reg = $english_reg;
    var $select = "#valid_company_address";
    var $text = "יש להזין את כתובת החברה באנגלית בלבד (אפשרות למספרים)";
    GenricValidate($value,$reg,$select,$text);
  });

  $('.validate_company_website').first().keyup(function () {  //validate co name English only
    var $value = this.value;
    var $reg = $english_reg;
    var $select = "#valid_company_website";
    var $text = "יש להזין את אתר האינטרנט החברה באנגלית בלבד";
    GenricValidate($value,$reg,$select,$text);
  });
function GenricValidate(value,reg,select,text) {
    if (!reg.test(value)) {
        $(select).text(text);
    } else {
        $(select).text("");
        
    }
}
$('#date_of_birth').pickadate({ 
  isRTL: true,
  // format: 'dd/mm/yyyy',
  max: true,
  selectYears: 100,
  selectMonths: true,
  isRTL: true,
  months: ['ינואר','פברואר','מרץ','אפריל','מאי','יוני','יולי','אוגוסט','ספטמבר','אוקטובר','נובמבר','דצמבר'],
  monthsShort: ['ינואר','פברואר','מרץ','אפריל','מאי','יוני','יולי','אוגוסט','ספטמבר','אוקטובר','נובמבר','דצמבר'],
  weekdaysShort: ['ראשון','שני','שלישי','רביעי','חמישי','שישי','שבת'],
  today: 'היום',
	clear: 'נקה בחירה',
	close: 'אישור',
  closeOnSelect: false // Close upon selecting a date,
});


$('.datepicker_expected_arrival_date').pickadate({ 
  format: 'dd/mm/yyyy',
  min: true,
  selectMonths: true,
  // closeOnSelect: true,
  selectYears: 2,
  selectMonths: true,
  months: ['ינואר','פברואר','מרץ','אפריל','מאי','יוני','יולי','אוגוסט','ספטמבר','אוקטובר','נובמבר','דצמבר'],
  monthsShort: ['ינואר','פברואר','מרץ','אפריל','מאי','יוני','יולי','אוגוסט','ספטמבר','אוקטובר','נובמבר','דצמבר'],
  weekdaysShort: ['ראשון','שני','שלישי','רביעי','חמישי','שישי','שבת'],
  today: 'היום',
	clear: 'נקה בחירה',
	close: 'אישור',
  closeOnSelect: false // Close upon selecting a date,
});
  



$('.datepicker_expected_arrival_date').pickadate({   //תאריך נחיתה משואר
  format: 'dd/mm/yyyy',
  min: true,
  selectMonths: true,
  selectYears: 2,
  months: ['ינואר','פברואר','מרץ','אפריל','מאי','יוני','יולי','אוגוסט','ספטמבר','אוקטובר','נובמבר','דצמבר'],
  monthsShort: ['ינואר','פברואר','מרץ','אפריל','מאי','יוני','יולי','אוגוסט','ספטמבר','אוקטובר','נובמבר','דצמבר'],
  weekdaysShort: ['ראשון','שני','שלישי','רביעי','חמישי','שישי','שבת'],
  today: 'היום',
	clear: 'נקה בחירה',
	close: 'אישור',
  closeOnSelect: false // Close upon selecting a date,
  
  // closeOnClear: false,
});

$('.datepicker_expected_arrival_date').pickadate({   //תאריך הנפקת דרכון
  format: 'dd/mm/yyyy',
  max: true,
  selectMonths: true,
  selectYears: 10,
  months: ['ינואר','פברואר','מרץ','אפריל','מאי','יוני','יולי','אוגוסט','ספטמבר','אוקטובר','נובמבר','דצמבר'],
  monthsShort: ['ינואר','פברואר','מרץ','אפריל','מאי','יוני','יולי','אוגוסט','ספטמבר','אוקטובר','נובמבר','דצמבר'],
  weekdaysShort: ['ראשון','שני','שלישי','רביעי','חמישי','שישי','שבת'],
  today: 'היום',
	clear: 'נקה בחירה',
	close: 'אישור',
  closeOnSelect: false // Close upon selecting a date,
});

$('.datepicker_passport_expiry_date').pickadate({   //תוקף דרכון
  format: 'dd/mm/yyyy',
  min: true,
  selectMonths: true,
  // closeOnSelect: true,
  selectYears: 15,
  // closeOnClear: false,
  months: ['ינואר','פברואר','מרץ','אפריל','מאי','יוני','יולי','אוגוסט','ספטמבר','אוקטובר','נובמבר','דצמבר'],
  monthsShort: ['ינואר','פברואר','מרץ','אפריל','מאי','יוני','יולי','אוגוסט','ספטמבר','אוקטובר','נובמבר','דצמבר'],
  weekdaysShort: ['ראשון','שני','שלישי','רביעי','חמישי','שישי','שבת'],
  today: 'היום',
	clear: 'נקה בחירה',
	close: 'אישור',
  closeOnSelect: false // Close upon selecting a date,
});

$('.datepicker_other_ppt_issue_date').pickadate({   //  תאריך הנפקת דרכון נוסף
  format: 'dd/mm/yyyy',
  max: true,
  selectMonths: true,
  selectYears: 20,
  months: ['ינואר','פברואר','מרץ','אפריל','מאי','יוני','יולי','אוגוסט','ספטמבר','אוקטובר','נובמבר','דצמבר'],
  monthsShort: ['ינואר','פברואר','מרץ','אפריל','מאי','יוני','יולי','אוגוסט','ספטמבר','אוקטובר','נובמבר','דצמבר'],
  weekdaysShort: ['ראשון','שני','שלישי','רביעי','חמישי','שישי','שבת'],
  today: 'היום',
	clear: 'נקה בחירה',
	close: 'אישור',
  closeOnSelect: false // Close upon selecting a date,
});

$('.datepicker_oldvisaissuedate').pickadate({   //  תאריך הנפקת הויזה הישנה
  format: 'dd/mm/yyyy',
  max: true,
  selectMonths: true,
  selectYears: 100,
  months: ['ינואר','פברואר','מרץ','אפריל','מאי','יוני','יולי','אוגוסט','ספטמבר','אוקטובר','נובמבר','דצמבר'],
  monthsShort: ['ינואר','פברואר','מרץ','אפריל','מאי','יוני','יולי','אוגוסט','ספטמבר','אוקטובר','נובמבר','דצמבר'],
  weekdaysShort: ['ראשון','שני','שלישי','רביעי','חמישי','שישי','שבת'],
  today: 'היום',
	clear: 'נקה בחירה',
	close: 'אישור',
  closeOnSelect: false // Close upon selecting a date,
});

$('#passport_issue_date').pickadate({   //  תאריך הנפקת הויזה הישנה
  format: 'dd/mm/yyyy',
  min: true,
  selectMonths: true,
  selectYears: 10,
  months: ['ינואר','פברואר','מרץ','אפריל','מאי','יוני','יולי','אוגוסט','ספטמבר','אוקטובר','נובמבר','דצמבר'],
  monthsShort: ['ינואר','פברואר','מרץ','אפריל','מאי','יוני','יולי','אוגוסט','ספטמבר','אוקטובר','נובמבר','דצמבר'],
  weekdaysShort: ['ראשון','שני','שלישי','רביעי','חמישי','שישי','שבת'],
  today: 'היום',
	clear: 'נקה בחירה',
	close: 'אישור',
  closeOnSelect: false // Close upon selecting a date,
});

});

})(jQuery); // end of jQuery name space
