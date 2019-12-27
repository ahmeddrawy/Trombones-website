<html>

<head>

<title> Home Page </title>
<link rel="stylesheet" type="text/css" href="HomePageStyle.css"/>
	
</head>

<body>

<header>
	<img src="icon.png" id="PageIcon"/>
	<h1 id="PageTitle">Original Trombones</h1>
	<ul id="PageTags"> 
		<li> <a href="#Features">Features</a></li>
		<li> <a href="#How it works"> How It Works</a></li>
		<li> <a href="#pricing">Pricing</a></li>
	</ul> 
</header>


<div id="content">

<form name="loginForm" id="loginForm"> 

<h1>Yamaha, Bach and Mendini Trombones.</h1>
<br/>
<h2>Sign in to Buy Now.</h2>

username <input type="text" id="username" /> <br/>
password <input type="password" id="password"/> <br/>


<input type="button" class="loginBtn" id="loginBtn" value="login" onclick = "window.location.href = 'userPage.php'"/> <br/>
<!--
New Customer? Sign up Now. <input type="submit" value="signup" id="signupBtn"  class="loginBtn"/> <br/>
-->
</form>

<form name="GoToSignupForm" id="GoToSignupForm" action="signup.php">

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
