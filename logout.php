<?php 
    echo '<script type="text/JavaScript"> alert("you have signed out");</script>' ;
	
	session_start();
	session_destroy();
	if(isset ($_SESSION["Email"])){
		unset($_SESSION["Email"]);
	}
	if(isset ($_SESSION["username"])){
		unset($_SESSION["username"]);
	}
	
	echo '<script type="text/JavaScript"> window.location.href="http://localhost/Trombones-website/";</script>';

 ?>