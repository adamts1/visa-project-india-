type = "text/javascript"
function validateForm() {
    var items = [
        ["valid_passport_type", "passport_type"],
        ["valid_nationality", "nationality"],
        ["valid_port_of_arrival", "port_of_arrival"],
        ["valid_visa_type", "visa_type"],
        ["valid_purpose_of_visit", "purpose_of_visit"],
        ["valid_passport_image_txt", "passport_image_txt"],
        ["valid_selfi_image", "selfi_image"],
        ["valid_email_1", "email1"],
        ["valid_email_2", "email2"],
        ["valid_date_of_birth", "date_of_birth"],
        ["valid_expected_arrival_date", "expected_arrival_date"],
        ["valid_surname", "surname"],
        ["valid_given_name", "given_name"],
        ["valid_gender", "gender"],
        ["valid_birth_place", "birth_place"],
        ["valid_country_birth", "country_birth"],
        ["valid_national_id_number", "national_id_number"],
        ["valid_religion", "religion"],
        ["valid_identity_marks", "identity_marks"],
        ["valid_education", "education"],
        ["valid_nationality_by_birth", "nationality_by_birth"],
        ["valid_passport_number", "passport_number"],
        ["valid_pass_issue_place", "passport_issue_place"],
        ["valid_passport_issue_date", "passport_issue_date"],
        ["valid_passport_expiry_date", "passport_expiry_date"],
        ["valid_address", "address"],
        ["valid_city_town_village", "city_town_village"],
        ["valid_pres_country", "pres_country"],
        ["valid_state_name", "state_name"],
        ["valid_pincode", "pincode"],
        ["valid_pres_phone", "pres_country"],
        ["valid_pres_country", "pres_phone"],
        ["valid_fthrname", "fthrname"],
        ["valid_father_nationality", "father_nationality"],
        ["valid_father_place_of_birth", "father_place_of_birth"],
        ["valid_father_country_of_birth", "father_country_of_birth"],
        ["valid_mother_nationality", "mother_nationality"],
        ["valid_mother_place_of_birth", "mother_place_of_birth"],
        ["valid_mother_country_of_birth", "mother_country_of_birth"],
        ["valid_marital_status", "marital_status"],
        ["valid_occupation", "occupation"],
        ["valid_empname", "empname"],
        ["valid_empdesignation", "empdesignation"],
        ["valid_empaddress", "empaddress"],
        ["valid_occupation", "occupation"],
        ["valid_visa_serreq_id_1", "visa_serreq_id_1"],
        ["valid_exitpoint", "exitpoint"],
        ["valid_nameofsponsor_msn", "nameofsponsor_msn"],
        ["valid_add1ofsponsor_msn", "add1ofsponsor_msn"],
        ["valid_phoneofsponsor_msn", "phoneofsponsor_msn"]
  

    ];

    var email1 = document.forms["Form"][items[7][1]].value;
    var email2 = document.forms["Form"][items[8][1]].value;
    var aa = document.forms["Form"][items[0][1]].value;
    var paraMail = document.getElementById(items[8][0]);
    console.log(aa);
    if (email1 != email2) {
        if(paraMail.textContent != "null"){  
            var textMail = document.createTextNode("מייל לא תואם");
            paraMail.appendChild(textMail);
        }
    }
   
    var testArr = []; // indication array for if threr is fields that empty
    var j = 0;
    for (index = 0; index < items.length; index++) {
        var a = document.forms["Form"][items[index][1]].value;
        var paragraph = document.getElementById(items[index][0]);
        if (a == null || a == "") { 
            //if there is comment already have error text dont error again
            testArr.push(j++); 
            // var paragraph = document.getElementById(items[index][0]);
            if(paragraph.textContent != "שדה זה חייב להיות מלא"){  
            var text = document.createTextNode("שדה זה חייב להיות מלא");
            paragraph.appendChild(text);
            }
            var elmnt = document.getElementById(items[index][1]);
            elmnt.scrollIntoView();
        }else{
            if(paragraph.textContent == "שדה זה חייב להיות מלא"){
                var obj = document.getElementById(items[index][0]);
                obj.innerText = '';
            }
        } 
        
    }
 
    if (testArr.length > 0) { 
        // check if there empty fields
        return false;
    } else {
        return true;
    }

}

