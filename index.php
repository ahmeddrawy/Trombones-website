<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trombonedb";

//if(isset($_POST['submit'])){

// Create connection

	// Check connection
if(isset($_POST['loginBTN'])){
	$conn = mysqli_connect($servername, $username, $password ,$dbname );

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	else{
		//echo "Connected successfully\n";
	}


	$password = $_POST['password'];
	$email = $_POST['email'];

	$sql = "SELECT * FROM users WHERE Password = '$password' AND Email = '$email' " ;

	$result = mysqli_query($conn, $sql);
	$num_of_rows =  mysqli_num_rows($result);
	
	//validation kind of:
	if( $email == "" ) {
        echo '<script type="text/JavaScript">  
	    alert("Please provide your Email!");</script>' ;
	   

     }
    else if( $password == ""  ) {
    	echo '<script type="text/JavaScript"> alert("Please provide your Password!");</script>' ;
    	    }
	else if($num_of_rows != 0 )
	{
		$_SESSION['Email'] = $email;
		header('Location: http://localhost/Trombones-website/userPage.php');
	}
	else
	{
		$_SESSION['errorMessage'] = "Email / Password combination is incorrect";
		if(isset($_SESSION['errorMessage']) && !empty($_SESSION['errorMessage'])) {
			echo '<script type="text/JavaScript">  
		    alert("'.$_SESSION['errorMessage'].'");</script>' ;
			unset($_SESSION['errorMessage']) ;
		//header('Location: http://localhost/Trombones-website/');
		}
		//header('Location: http://localhost/IT_Project/signup.html');
		//echo "<script type='text/javascript'>alert('$conn->error');</script>";

	}

	$conn->close();
}
//echo '<script type="text/JavaScript"> alert("");</script>' ;
?>

<html>
<head>

<title> Home Page </title>

</head>
<body>


<form name="loginForm" action="index.php" method="POST">
Email : <input type="text" id="email" name="email" /> <br/>
password : <input type="password" id="password" name="password" /> <br/>
<input type="submit" value="login" id="loginBtn" name = "loginBTN"/> <br/>
</form>

<!-- go to signup.html -->
<form name="signupForm" action="signup.php" method="POST">
<input type="submit" value="signup" id="signupBtn"/> <br/>
</form>


</body>
</html>