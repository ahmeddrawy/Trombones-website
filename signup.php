<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trombonedb";

// Create connection
session_start();

	$conn = mysqli_connect($servername, $username, $password ,$dbname );
if(isset($_POST["add"])){
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	else{
		echo "Connected successfully\n";
	}

	$name =mysql_real_escape_string( $_POST['username'] );
	$password = mysql_real_escape_string ($_POST['password']);
	$email = mysql_real_escape_string($_POST['email']);

	$sql = "INSERT INTO users (Name , Password , Email ) VALUES ('$name' , '$password' , '$email' )" ;

	if($conn->query($sql) == true)
	{
		$_SESSION['message'] = "you are now logged in"; 
		$_SESSION['email'] = $email;
		echo "table updated\n" ;
		header('Location: http://localhost/Trombones-website/');
	}
	else
	{
		echo "Error updating table: " . $conn->error;
		$_SESSION['errorMessage'] = $conn->error;
		header('Location: http://localhost/Trombones-website/signup.php');
		//echo "<script type='text/javascript'>alert('$conn->error');</script>";

	}

	if(isset($_SESSION['errorMessage']) && !empty($_SESSION['errorMessage'])) {
		echo '<script type="text/JavaScript">  
	    alert("'.$_SESSION['errorMessage'].'");</script>' ;
		unset($_SESSION['errorMessage']) ;
	}

	$conn->close();
}
?>

<html>
<head>

<script>
/*	
	var errorMsg = <?php echo $_SESSION['errorMessage'] ?>;
	alert("here");
	if(errorMsg != ''){
    	<?php unset($_SESSION['errorMessage']) ?>;
    	alert (errorMsg);
	}
	*/
function validate()
{
	var name = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var password2 = document.getElementById("password2").value;
	var email = document.getElementById("email").value;
		
 	var illegalChars = /\W/; // allow letters, numbers, and underscores

	
	if( name == "" ) {
            alert( "Please provide your name!" );
            document.signUpForm.username.focus() ;
            return false;
         }
    else if( email == "") {
        alert( "Please provide your Email!" );
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

	else if(illegalChars.test(name)){
		alert("The username contains illegal characters.\n");
		document.signUpForm.username.focus() ;
            return false;
	}
	/*else if (!email.match(/\S+@\S+\.\S+/) ) {
		alert( "Please provide a correct Email!" );
        document.signUpForm.email.focus() ;
           return false;
	}*/
	else
	{
		//document.form['myForm'].submit();
		return true;
	}

}

</script>

</head>
<body>
<!-- validate username & password inputs using (js and/or php) and go to userPaga.html -->
<!-- insert the new user in database -->
<form action="signup.php" method="post" name="signUpForm" onsubmit="return(validate());">
username : <input type ="text" name ="username" id="username"/> <br/> <br/>
password : <input type="password" name="password" id="password"/> <br/> <br/>
confirm Password : <input type="password" name="password2" id="password2"/> <br/> <br/>
email : <input type="email" name ="email" id="email"/> <br/> <br/>

<input  type="submit" value="add" name = "add" />

</form>

</body>
</html>

