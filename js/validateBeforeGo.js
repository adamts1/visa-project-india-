
type = "text/javascript"
function validateForm() {
    var items = [
        ["valid_company_name", "company_name"],
        ["valid_company_address", "company_address"],
        ["valid_birth_place", "birth_place"]
    ];
    //Array of all feilds
    var testArr = []; // indication array for if threr is fields that empty
    var yearStart = 0;
    for (index = 0; index < items.length; index++) {
        var a = document.forms["Form"][items[index][1]].value;
        if (a == null || a == "") { 
            //if there is comment already have error text dont error again
            testArr.push(yearStart++); 
            var paragraph = document.getElementById(items[index][0]);
            if(paragraph.textContent != "שדה זה חייב להיות מלא"){  
            var text = document.createTextNode("שדה זה חייב להיות מלא");
            paragraph.appendChild(text);
            }
            var elmnt = document.getElementById(items[index][1]);
            elmnt.scrollIntoView();
        } 
        
    }
    if (testArr.length > 0) { 
        // check if there empty fields
        return false;
    } else {
        return true;
    }

}

