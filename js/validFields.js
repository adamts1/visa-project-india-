(function($){
  $(document).ready(function () {

    var $mail_reg = /^[a-zA-Z0-9]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    
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
  // format: 'dd/mm/yyyy',
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



