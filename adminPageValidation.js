function validate()
{
	var radios = document.getElementsByName("brandName");
	var input = document.getElementsByName('inputTxt');

	var value;
	var flag = false;
	for (var i = 0; i < radios.length; i++) {
	    if (radios[i].type === 'radio' && radios[i].checked) {
	        value = radios[i].value; 
	        flag = true;
	    }
	}
	if(!flag)
	{
		alert("please choose an instrument!");
		return false;
	}

	flag = false;
	for (var i = 0; i < input.length; i++) {
	    if (input[i].value!= "") {
	        flag = true;
	    }
	}
	if(!flag)
	{
		alert("please enter an amount!");
		return false;
	}

}