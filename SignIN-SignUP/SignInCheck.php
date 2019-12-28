<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trombonedb";

if(isset($_POST['loginBTN'])){
	$conn = mysqli_connect($servername, $username, $password ,$dbname );

	$password = $_POST['password'];
	$email = $_POST['email'];

	$sql = "SELECT * FROM users WHERE Password = '$password' AND Email = '$email' " ;

	$result = mysqli_query($conn, $sql);
	$num_of_rows =  mysqli_num_rows($result);
	
	if($num_of_rows != 0 )
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

			echo '<script type="text/JavaScript"> window.location.href="http://localhost/Trombones-website/";</script>';
			//header('Location: http://localhost/Trombones-website/');
		}
		
	}

	$conn->close();
}
?>