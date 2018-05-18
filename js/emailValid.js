type="text/javascript"
language="JavaScript"

function checkEmail(theForm) {
	if (theForm.email1.value != theForm.email1.value)
	{
		alert('Those emails don\'t match!');
		return false;
	} else {
		return true;
	}
}
