function validate()
{
	var name = document.getElementsByName("username")[0].value;
	var password = document.getElementsByName("password")[0].value;
	var password2 = document.getElementsByName("password2")[0].value;
	var email = document.getElementsByName("email")[0].value;
		
 	var illegalChars = /\W/; // allow letters, numbers, and underscores
 	var EmailForm = /\S+@\S+\.\S+/ ;

	if( name == "" ) {
        alert( "Please provide your name!" );
        document.signUpForm.username.focus() ;
        return false;
    }
    else if(illegalChars.test(name)){
		alert("The username contains illegal characters.");
		document.signUpForm.username.focus() ;
        return false;
	}
    else if( email == "") {
        alert( "Please provide your Email!" );
        document.signUpForm.email.focus() ;
            return false;
         }
    else if (!EmailForm.test(email) ) {
		alert( "Please provide a correct Email!" );
        document.signUpForm.email.focus() ;
           return false;
	}
    else if( password == "" || password2 == "" ) {
        alert( "Please provide your Password!" );
        return false;
    }

	else if(password != password2)
	{
		alert("Password confirmation does not match");
		document.signUpForm.password.focus() ;
		return false;
	}
	else
	{
		return true;
	}

}
