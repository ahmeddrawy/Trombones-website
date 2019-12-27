<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trombonedb";

// Create connection
$conn = mysqli_connect($servername, $username, $password ,$dbname );

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
	echo "Connected successfully\n";
}

echo $_POST;
$name = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO users (Name , Password , Email ) VALUES ('$name' , '$password' , '$email' )" ;

if($conn->query($sql) == true)
{
	echo "table updated\n";
	header('Location: http://localhost/IT_Project/');
}
else
{
	echo "Error updating table: " . $conn->error;
	//header('Location: http://localhost/IT_Project/signup.html');
	//echo "<script type='text/javascript'>alert('$conn->error');</script>";

}

$conn->close();

?>
