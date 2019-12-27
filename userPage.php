<?php session_start();

if(isset($_SESSION['Email']) && !empty($_SESSION['Email'])) {
	echo '<script type="text/JavaScript">  
    alert("'.$_SESSION['Email'].'");</script>' ;
}
//echo("hello world");

 ?>
<html>
<head>


</head>
<body>

<!-- go to Purchase.html-->
<input type="button" value="Buy a Yamaha" id="YamahaBtn" name="Yamaha" onclick="window.location.href = 'TrombonePurchase.html'"/>
<input type="button" value="Buy a Bach" id="BachBtn" name="Bach" onclick="window.location.href = 'TrombonePurchase.html'"/>
<input type="button" value="Buy a Mendini" id="MendiniBtn" name="Mendini" onclick="window.location.href = 'TrombonePurchase.html'"/>

<input type="button" value="Log Out" onclick="window.location.href = 'index.html'"/>
<input type="button" value="Edit Profile" onclick ="window.location.href = 'editUserPage.html'"/>

</body>
</html>