
//Remove alert text from DropDown 
function RemoveAlert(pElement) {
    var obj0 = document.getElementById(pElement);
    obj0.innerText = '';
}
//Remove alert text from numbers fields 

function RemoveAlertNum(value, select) {
    var re = /^[0-9]+$/;
    if (!re.test(value)) {
        var objNum = document.getElementById(select);
        objNum.innerText = 'יש להזין מספרים בלבד';
    } else {
        var objNum = document.getElementById(select);
        objNum.innerText = '';
    }
}
//Remove alert text from Datepicker fields fields 

function RemoveAlertDate(DateElement) {
    var objDate = document.getElementById(DateElement);
    objDate.innerText = '';
}

//Alerting for validate Ennglish only

function genValEng(value, select) {
    var re = /^[a-zA-Z0-9$@$!%*-?&#^-_. +]+$/;
    if (!re.test(value)) {
        var objEng = document.getElementById(select);
        objEng.innerText = 'יש להזין שדה זה באנגלית בלבד';
    } else {
        var objEng = document.getElementById(select);
        objEng.innerText = '';
    }
}
//Alerting for validate Ennglish and Hebrew

function genValEngHeb(value, select) {
    var re = /^[א-תa-zA-Z0-9$@$!%*-?&#^-_. +]+$/;
    if (!re.test(value)) {
        var objEngHeb = document.getElementById(select);
        objEngHeb.innerText = 'יש להזין שדה זה בעברית ו/או באנגלית בלבד';
    } else {
        var objEngHeb = document.getElementById(select);
        objEngHeb.innerText = '';
    }
}


