<html>
<head>

<link rel="stylesheet" type="text/css" href="editUserPageStyle.css"/>

</head>
<body>

<script type="text/javascript" src="SignUpValidation.js"></script>

<header>
	<img src="icon.png" id="PageIcon"/>
	<h1 id="PageTitle">Original Trombones</h1>
	<ul id="PageTags"> 
		<li><input type="button" class="userButton" value="Back To Profile" onclick ="window.location.href = 'userPage.php'"/></li>
		<li><input type="button" class="userButton" value="Home Page" onclick="window.location.href = 'index.php'"/> </li>
	</ul> 
</header>

<div id="content">
	<form action="signUpPhp.php" method="POST" name="signUpForm" onsubmit="return(validate());">	
		<table border="0">
			<tr> 
				<td colspan="2" id="tabletitle" > Create a New Account to be able to buy from us </td> 
			</tr>
			
			<tr> 
				<td id = "infotxt">Name :</td>
				<td id = "formitems"> <input id = "inputTxt" type ="text" name ="username"/></td>
			</tr>
			
			<tr> 
				<td id = "infotxt">Email :</td>
				<td id = "formitems"> <input id = "inputTxt"  name ="email" type="e-mail"/></td>
			</tr>
		<!--
			<tr> 
				<td id = "infotxt">Age :</td>
				<td id = "formitems"><input id = "inputTxt" name="age" type="number"/></td>
			</tr>
		-->
			<tr> 
				<td id = "infotxt">Password :</td>
				<td id = "formitems"><input id = "inputTxt" name="password" type="Password"/></td>
			</tr>
			
			<tr> 
				<td id = "infotxt">confirm Password :</td>
				<td id = "formitems"> <input id = "inputTxt"  name ="password2" type="Password"/></td>
			</tr>
			
			
			<tr>
				<th colspan="2"> <input  type="submit" value="sign up" id ="updateBtn"/><th>
			</tr>
		</table>
	</form>
	
</div>
	

<!-- validate username & password inputs using (js and/or php) and go to userPaga.html -->
<!-- insert the new user in database -->
<!--
<form action="signup.php" method="post" name="signUpForm" onsubmit="return(validate());" id="signUpForm">

username : <input type ="text" name ="username" id="username"/> <br/> <br/>
email : <input type="email" name ="email" id="email"/> <br/> <br/>
password : <input type="password" name="password" id="password"/> <br/> <br/>
confirm Password : <input type="password" name="password2" id="password2"/> <br/> <br/>

<input name="add" value="add" type="submit"/>

</form>
-->
</body>
</html>

<?php session_start();

if(isset($_SESSION['errorMessage']) && !empty($_SESSION['errorMessage'])) {
	echo '<script type="text/JavaScript">  
    alert("'.$_SESSION['errorMessage'].'");</script>' ;
	unset($_SESSION['errorMessage']) ;
}
//echo("hello world");

 ?>