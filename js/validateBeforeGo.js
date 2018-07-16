
//Validate js by pressing on submit
function validateForm() {
    type = "text/javascript"

    var sctions = arry_of_item.sctions;
    var items = arry_of_item.item;
    var businesss = arry_of_item.businesss;
    var prevName = arry_of_item.prevName;
    var otherPass = arry_of_item.otherPass;
    var marriedField = arry_of_item.marriedField;
    var pakistanField = arry_of_item.pakistanField;
    var armyField = arry_of_item.armyField;
    var lastCiti = arry_of_item.lastCiti;
    var deniedField = arry_of_item.deniedField;
    // var dynamicFields = arry_of_item.dynamicFields; /TBD

 //Arry of all the arry in arrData.js
    var sctions = [
        ["#visa_type_fields", businesss],
        ["#other_pass_fields", otherPass],
        ["#married_field", marriedField],
        ["#pakistan_field", pakistanField],
        ["#previous_posting", armyField],
        ["#lastCiti", lastCiti],
        ["#refuse_details", deniedField],
        // ["#dynamic_fields", dynamicFields], /TBD
    ];

    // Conacatinate data to arry acording to the apearance in the form
    for (index1 = 0; index1 < sctions.length; index1++) {

        if ($(sctions[index1][0]).is(':visible')) {
            var items = items.concat(sctions[index1][1]);
        }
    } 

    console.log(items);
    ////////////////////////////////////
    if ($('#prev_surname').css('display') != 'none') {
        var items = items.concat(prevName);
    } else {

        var obj1 = document.getElementById(prevName[0][0]);
        obj1.innerText = '';

        var obj2 = document.getElementById(prevName[1][0]);
        obj2.innerText = '';
    }
    ////////////////////////////////////

  
   



    var email1 = document.forms["Form"][items[7][1]].value;
    var email2 = document.forms["Form"][items[8][1]].value;
    var aa = document.forms["Form"][items[0][1]].value;
    var paraMail = document.getElementById(items[8][0]);
    console.log(aa);
    console.log(email1);
    console.log(email2);
    console.log(paraMail.textContent);
    
    if (email1 != email2) {
        if (paraMail.textContent == "null" || paraMail.textContent == "") {
            var textMail = document.createTextNode("מייל לא תואם");
            paraMail.appendChild(textMail);
        }
        var mailElement = document.getElementById(items[8][1]);
        mailElement.scrollIntoView();
    }

    var testArr = []; // indication array for if threr is fields that empty
    var j = 0;
    for (index = 0; index < items.length; index++) {
        var a = document.forms["Form"][items[index][1]].value;
        var paragraph = document.getElementById(items[index][0]);
        if (a == null || a == "") {
            testArr.push(j++);
            if (paragraph.textContent == "" || paragraph.textContent == null ) {
                var text = document.createTextNode("שדה זה חייב להיות מלא");
                paragraph.appendChild(text);
            }
            var elmnt = document.getElementById(items[index][1]);
            elmnt.scrollIntoView();
        } else {
            if (paragraph.textContent == "שדה זה חייב להיות מלא") {
                var obj = document.getElementById(items[index][0]);
                obj.innerText = '';
            }
        }

    }
    console.log(testArr.length);

    if (testArr.length > 0 || email1 != email2) {
        // check if there empty fields
        return false;
    } else {
        return true;
    }

}



    




