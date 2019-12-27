<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trombonedb";

// Create connection
session_start();

$conn = mysqli_connect($servername, $username, $password ,$dbname );

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

$sql = "INSERT INTO users (Name , Password , Email ) VALUES ('$name' , '$password' , '$email' )" ;

if($conn->query($sql) == true)
{
	$_SESSION['message'] = "you are now logged in"; 
	$_SESSION['email'] = $email;
	echo "table updated\n" ;
	header('Location: http://localhost/IT_Project/');
}
else
{
	echo "Error updating table: " . $conn->error;
	$_SESSION['errorMessage'] = $conn->error;
	echo($_SESSION['errorMessage']);
	header('Location: http://localhost/Trombones-website/signup.php');
	//echo "<script type='text/javascript'>alert('$conn->error');</script>";

}

$conn->close();

?>
