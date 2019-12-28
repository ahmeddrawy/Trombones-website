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
	<form action="AdminLoginCheck.php" method="POST" name="loginAdminForm" id="loginAdminForm" onsubmit="return(validate());" >
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
				<td id = "formitems"><input id = "inputTxt" name="password" type="Password"/></td>
			</tr>
			
			<tr>
				<th colspan="2"> <input  type="submit" value="login" id ="updateBtn" name = "loginBTN"/><th>
			</tr>
		</table>
	</form>
	
</div>
	
	<script>
		function validate()
		{
			
			var password = document.getElementsByName("password")[0].value;
			var email = document.getElementsByName("adminMail")[0].value;
						
		 	var illegalChars = /\S+@\S+\.\S+/; // allow letters, numbers, and underscores

		    if( email == "") {
		        alert( "Please provide your Email!" );
		        return false;
		     }
		    if( password == "" ) {
		        alert( "Please provide your Password!" );
		        return false;
		    }

			if(!illegalChars.test(email)){
				alert("The email is not written correctly.\n");
		        return false;
			}
			else
			{
				return true;
			}

		}	
	</script>
</body>
</html>