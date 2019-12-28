<html>
<head>

<link rel="stylesheet" type="text/css" href="editUserPageStyle.css"/>

</head>
<body>

<header>
	<img src="icon.png" id="PageIcon"/>
	<h1 id="PageTitle">Original Trombones</h1>
	<ul id="PageTags"> 
		<li><input type="button" class="userButton" value="Back To Profile" onclick ="window.location.href = 'userPage.php'"/></li>
		<li><input type="button" class="userButton" value="Log Out" onclick="window.location.href = 'index.php'"/> </li>
	</ul> 
</header>

<div id="content">
	<form action= "DataBase/editUser.php" method ="post">	
		<table border="0">
			<tr> 
				<td colspan="2" id="tabletitle" > You can update all your data now </td> 
			</tr>
			
			<tr> 
				<td id = "infotxt">Name :</td>
				<td id = "formitems"> <input id = "inputTxt" name ="username" type="text"/></td>
			</tr>
			
			<tr> 
				<td id = "infotxt">Email :</td>
				<td id = "formitems"> <input id = "inputTxt" name="newemail" type="e-mail"/></td>
			</tr>
			
			<tr> 
				<td id = "infotxt">Age :</td>
				<td id = "formitems"><input id = "inputTxt" name="age" type="number"/></td>
			</tr>
			<tr> 
				<td id = "infotxt">Password :</td>
				<td id = "formitems"><input id = "inputTxt" name="password" type="Password"/></td>
			</tr>
			
			<tr>
				<th colspan="2"> <input  type="submit" value="update Info" id ="updateBtn"/><th>
			</tr>
		</table>
	</form>
	
</div>
	
<!--
<form action= "DataBase/editUser.php" method ="post" id="editUserForm">

username :  <input type="text" name ="username" id="formitems">
age : 		<input type="number" name="age" id="formitems"/>
password :  <input type="password" name="password" id="formitems"/>
new Email : <input type="email" name="newemail" id="formitems"/>

<input type="submit" value="update Info" id ="updateBtn"/>

</form>
-->
</body>
</html>