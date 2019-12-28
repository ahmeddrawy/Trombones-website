<html>

<head>

<title> Home Page </title>

<link rel="stylesheet" type="text/css" href="HomePageStyle.css"/>
	
</head>

<body>

<script type="text/javascript" src="SignInValidation.js"></script>

<header>
	<img src="icon.png" id="PageIcon"/>
	<h1 id="PageTitle">Original Trombones</h1>
	<ul id="PageTags"> 
		<li> <a href="#Features">Features</a></li>
		<li> <a href="#How it works"> Login as Admin
						<input type="button" class="loginBtn" id="AdminloginBtn" value="login" onclick = "window.location.href = 'LoginAdminPage.php'"/> <br/>
		</a></li>
	</ul> 
</header>


<div id="content">

<form name="loginForm" id="loginForm" action="SignInCheck.php" method="POST" onsubmit="return(validate());" >


<h1>Yamaha, Bach and Mendini Trombones.</h1>
<br/>
<h2>Sign in to Buy Now.</h2>

Email <input type="text" id="username" name="email"/> <br/>
Password <input type="password" id="password" name="password"/> <br/>

<input type="submit" class="loginBtn" id="loginBtn" value="login" name = "loginBTN"/> <br/>
<!--
New Customer? Sign up Now. <input type="submit" value="signup" id="signupBtn"  class="loginBtn"/> <br/>
-->

</form>

<form name="GoToSignupForm" id="GoToSignupForm" action="signup.php" method="POST">

New Customer? Sign up Now. <input type="submit" value="signup" id="signupBtn"  class="loginBtn"/> <br/>

</form>


<table id="Features" border="0">
<tr>
<td id="FeatureIcon"><img src="Material.png"/></td>
<td id="FeatureDesc"><h2>Premium Materials</h2>
Our trombones use the shiniest brass which is sourced locally. This will increase the longevity of your purchase

</td>
</tr>

<tr>
<td id="FeatureIcon"><img src="Shipping.png"/></td>
<td id="FeatureDesc"><h2><a name="Features"></a>Fast Shipping</h2>
We make sure you recieve your trombone as soon as we have finished making it.
We also provide free returns if you are not satisfied.
</td>
</tr>

<tr>
<td id="FeatureIcon"><img src="Assurance.png"/></td>
<td id="FeatureDesc"><h2>Quality Assurance</h2>
For every purchase you make, 
we will ensure there are no damages or faults and we will check and test the pitch of your instrument
</td>
</tr>
</table>

</div>


</body>
</html>
