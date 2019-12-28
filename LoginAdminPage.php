<html>


<head>
<link rel="stylesheet" type="text/css" href="editUserPageStyle.css"/>

</head>


<body>
<header>
	<img src="icon.png" id="PageIcon"/>
	<h1 id="PageTitle">Original Trombones</h1>
	<ul id="PageTags"> 
		<li><input type="button" class="userButton" value="Back To Home Page" onclick="window.location.href = 'index.php'"/> </li>
	</ul> 
</header>

<div id="content">
	<form name="loginAdminForm" id="loginAdminForm" action="AdminPage.php" >	
		<table border="0">
			<tr> 
				<td colspan="2" id="tabletitle" > You can login here if you're admin</td> 
			</tr>
			
			<tr> 
				<td id = "infotxt">Email :</td>
				<td id = "formitems"> <input id = "inputTxt"  name ="adminMail" type="e-mail"/></td>
			</tr>
			
			<tr> 
				<td id = "infotxt">Password :</td>
				<td id = "formitems"><input id = "inputTxt" name="adminPassword" type="Password"/></td>
			</tr>
			
			<tr>
				<th colspan="2"> <input  type="submit" value="login" id ="updateBtn"/><th>
			</tr>
		</table>
	</form>
	
</div>
	

<!--
<form name="loginAdminForm" id="loginAdminForm" action="AdminPage.php" >

email <input type="email" name="adminMail" id="adminMail"/>
password <input type="password" name="adminPassword" id="adminPassword"/>

<input type="submit" value="login"/>

</form>
-->
</body>
</html>