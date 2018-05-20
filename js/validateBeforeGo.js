
// $(document).ready(function() {
//     items = arry_of_item.item; 
//     console.log(items)

// });


function validateForm() {
    type = "text/javascript"

    var items = arry_of_item.item;
    var businesss = arry_of_item.businesss;
    var prevName = arry_of_item.prevName;
    var otherPass = arry_of_item.otherPass;
    var marriedField = arry_of_item.marriedField;
    var pakistanField = arry_of_item.pakistanField;
    var armyField = arry_of_item.armyField;
    var lastCiti = arry_of_item.lastCiti;
    var deniedField = arry_of_item.deniedField;



    // var businesss = [
    //     ["valid_business_card_txt", "business_card_txt"],
    //     ["valid_business_prep", "business_prep"],
    //     ["valid_company_name", "company_name"],
    //     ["valid_company_address", "company_address"],
    //     ["valid_company_phone", "company_phone"],
    //     ["valid_company_website", "company_website"],
    //     ["valid_nature_of_company", "nature_of_company"],
    // ];

    // var prevName = [
    //     ["valid_prev_surname", "prev_surname"],
    //     ["valid_prev_given_name", "prev_given_name"]
    // ];

    // var otherPass = [
    //     ["valid_other_ppt_country_issue", "other_ppt_country_issue"],
    //     ["valid_other_ppt_no", "other_ppt_no"],
    //     ["valid_other_ppt_issue_date", "other_ppt_issue_date"],
    //     ["valid_other_ppt_issue_place", "other_ppt_issue_place"],
    //     ["valid_other_ppt_nationality", "other_ppt_nationality"],
    // ];
    // var marriedField = [
    //     ["valid_spouse_name", "spouse_name"],
    //     ["valid_spouse_nationality", "spouse_nationality"],
    //     ["valid_spouse_previous_nationality", "spouse_previous_nationality"],
    //     ["valid_spouse_place_of_birth", "spouse_place_of_birth"],
    //     ["valid_spouse_country_of_birth", "spouse_country_of_birth"],
    // ];

    // var pakistanField = [
    //     ["valid_grandparent_details", "grandparent_details"]
    // ];

    // var armyField = [
    //     ["valid_previous_organization", "previous_organization"],
    //     ["valid_previous_designation", "previous_designation"],
    //     ["valid_previous_previous_rank", "previous_rank"],
    //     ["valid_previous_posting", "previous_posting"]
    // ];

    // var lastCiti = [
    //     ["valid_prv_visit_add1", "prv_visit_add1"],
    //     ["valid_visited_city", "visited_city"],
    //     ["valid_old_visa_no", "old_visa_no"],
    //     ["valid_old_visa_type_id", "old_visa_type_id"],
    //     ["valid_oldvisaissueplace", "oldvisaissueplace"],
    //     ["valid_oldvisaissuedate", "oldvisaissuedate"]
    // ];

    // var deniedField = [
    //     ["valid_prv_visit_add1", "refuse_details"],
    //     ["valid_refuse_details", "visited_city"]
    // ];

    // var dynamicFields = [
    //     ["valid_saarcCountry1", "saarcCountry1"],
    //     ["valid_saarcYear1", "saarcYear1"]
    // ];

    if ($('#visa_type_fields').is(':visible')) {
        var items = items.concat(businesss);
    }

    if ($('#prev_surname').css('display') != 'none') {
        var items = items.concat(prevName);
    } else {

        var obj1 = document.getElementById(prevName[0][0]);
        obj1.innerText = '';

        var obj2 = document.getElementById(prevName[1][0]);
        obj2.innerText = '';
    }

    if ($('#other_pass_fields').is(':visible')) {
        var items = items.concat(otherPass);
    }

    if ($('#married_field').is(':visible')) {
        var items = items.concat(marriedField);
    }

    if ($('#pakistan_field').is(':visible')) {
        var items = items.concat(pakistanField);
    }

    if ($('#previous_posting').is(':visible')) {
        var items = items.concat(armyField);
    }

    if ($('#lastCiti').is(':visible')) {
        var items = items.concat(lastCiti);
    }

    if ($('#refuse_details').is(':visible')) {
        var items = items.concat(deniedField);
    }

    if ($('#dynamic_fields').is(':visible')) {
        var items = items.concat(dynamicFields);
    }

    var email1 = document.forms["Form"][items[7][1]].value;
    var email2 = document.forms["Form"][items[8][1]].value;
    var aa = document.forms["Form"][items[0][1]].value;
    var paraMail = document.getElementById(items[8][0]);
    console.log(aa);
    if (email1 != email2) {
        if (paraMail.textContent != "null") {
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
            //if there is comment already have error text dont error again
            testArr.push(j++);
            // var paragraph = document.getElementById(items[index][0]);
            if (paragraph.textContent != "שדה זה חייב להיות מלא") {
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

    if (testArr.length > 0 || email1 != email2) {
        // check if there empty fields
        return false;
    } else {
        return true;
    }

}



    




