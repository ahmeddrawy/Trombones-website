<html>
<head>

<link rel="stylesheet" type="text/css" href="UserPageStyle.css"/>
	
</head>
<body>

<header>
	<img src="icon.png" id="PageIcon"/>
	<h1 id="PageTitle">Original Trombones</h1>
	<ul id="PageTags"> 
		<li><input type="button" class="userButton" value="Edit Profile" onclick ="window.location.href = 'editUserPage.php'"/></li>
		<li><input type="button" class="userButton" value="Log Out" onclick="window.location.href = 'index.php'"/> </li>
	</ul> 
</header>


<div id="Navigator">
<ul id="NavigatorList">
  <li id="NavigatorItem" class="first"><a href="#" onclick="GetYamahaInfo();">Yamaha Trombones</a></li>
  <li id="NavigatorItem"><a href="#" onclick="GetMendiniInfo();">Mendini Trombones</a></li>
  <li id="NavigatorItem"><a href="#" onclick="GetBachInfo();">Bach Trombones</a></li>
</ul>
</div>

<div id="Products">

<div class="row">
  <div class="column side">
	
	<div class="gallery">
		<a target="_blank" href="Bach2.png" id="TrombonesImg">
		<img src="Bach2.png" alt="Bach" width="600" height="400">
		</a>
		<div class="desc" id="imgName">Bach Trombones<br/>
			<li id="nAvail">Available : xxx</li>
			<li id="Price">Price : xxx</li>
		</div>
		
	</div>

  </div>
  
  <div class="column middle">
  		<h2>Listen and enjoy</h2><br/>
	<video width="100%" height="100%" id="DesVideo" controls>
	<source src="Bach2.mp4" type="video/mp4">
		Your browser does not support the video tag.
	</video>
  </div>
  
  <div class="column side" >
  
	</ul>
 </div>
</div>

<div id="buying">
 	<input class="buyButton" type="button" value="Buy a Yamaha" id="YamahaBtn" name="Yamaha" onclick="window.location.href = 'TrombonePurchase.php'"/>
	<input class="buyButton" type="button" value="Buy a Bach" id="BachBtn" name="Bach" onclick="window.location.href = 'TrombonePurchase.php'"/>
	<input class="buyButton" type="button" value="Buy a Mendini" id="MendiniBtn" name="Mendini" onclick="window.location.href = 'TrombonePurchase.php'"/>
</div>
<br/>
</div>


</body>
</html>