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
        ["valid_date_of_birth", "date_of_birth"]
    
    ];

    // var email1 = document.forms["Form"][items[4][1]].value;
    // var email2 = document.forms["Form"][items[5][1]].value;
    // var aa = document.forms["Form"][items[0][1]].value;
    // var paraMail = document.getElementById(items[5][0]);
    // console.log(aa);
    // if (email1 != email2) {
    //     if(paraMail.textContent != "null"){  
    //         var textMail = document.createTextNode("מייל לא תואם");
    //         paraMail.appendChild(textMail);
    //     }
    // }
   
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

