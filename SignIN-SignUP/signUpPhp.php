<?php
    include "../DBcredentials.php";
    ini_set('display_errors', true);

    $dbname = "OriginalTrombones";

	session_start();

    $conn = connectToDB($dbname);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	else{
		echo "Connected successfully\n";
	}

	$name = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	$sql = "INSERT INTO Users (Name , Password , Email ) VALUES ('$name' , '$password' , '$email' )" ;

	if($conn->query($sql) == true)
	{
		$_SESSION['message'] = "you are now logged in"; 
		$_SESSION['email'] = $email;
		echo "table updated\n" ;
		header('Location: http://localhost/Trombones-website/userPage.php');
	}
	else
	{
		echo "Error updating table: " . $conn->error;
		$_SESSION['errorMessage'] = $conn->error;
		header('Location: http://localhost/Trombones-website/SignIN-SignUP/signup.php');
		//echo "<script type='text/javascript'>alert('$conn->error');</script>";

	}

	$conn->close();

?>
