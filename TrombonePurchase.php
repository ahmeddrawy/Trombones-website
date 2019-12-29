<html>
<head>

<link rel="stylesheet" type="text/css" href="Style Pages/editUserPageStyle.css"/>
<style>

#radioInput
{
	margin-bottom:13px;
}

#nItems
{
	padding:10px;
}

.userButton
{
	width:auto;
}


</style>

</head>
<body>


<header>
	<img src="icon.png" id="PageIcon"/>
	<h1 id="PageTitle">Original Trombones</h1>
	<ul id="PageTags"> 
		<li><input type="button" class="userButton" value="Back to your Profile" onclick="window.location.href = 'userPage.php'"/> </li>
	</ul> 
</header>

<div id="content">
	<form name="PurchaseForm" action ="TrombonePurchaseForm.php" method="post">	
		<table border="0">
			<tr> 
				<td colspan="2" id="tabletitle" > Buy and enjoy playing on our Trombones </td> 
			</tr>
			<tr> 
				<td id = "infotxt">Brand Name</td>
				<td id = "formitems">
					<input type="radio" name="brandName" value="Yamaha" class ="SelectBrand" id="radioInput"/> Yamaha<br>
					<input type="radio" name="brandName" value="Mendini" class ="SelectBrand" id="radioInput"/> Mendini<br>
					<input type="radio" name="brandName" value="Bach" class ="SelectBrand" id="radioInput"/> Bach	
				</td>
			</tr>
				
			<tr> 
				<td id = "infotxt">Write the number of Trombones you need </td>
				<td id = "formitems"> <input type="number" id="nItems" name="nItems"/></td>
			</tr>
			
			<tr> 
				<td id = "infotxt">what's you payment method </td>
				
				<td id = "formitems">
					<input type="radio" name="PayMethod" value="CridtCard" id="radioInput"/> CridtCard<br>
					<input type="radio" name="PayMethod" value="Cash" id="radioInput"/> Cash <br>
				</td>
			</tr>
			
			<tr>
				<th colspan="2"> <input  type="submit" value="Buy Now" id ="updateBtn"/><th>
			</tr>
		</table>
	</form>
	
</div>
	

<!--Delete number of items in the database-->
<!--
<form name="PurchaseForm">
Write the number of Trombones you need : <input type="number" id="nItems"/><br>
How you will pay : <br/>
<input type="radio" name="PayMethod" value="CridtCard"> CridtCard<br>
<input type="radio" name="PayMethod" value="Cash"> Cash <br>
<input type="submit" value="Buy Now"/>

</form>

<input type="submit" value="back to your home page" onclick="window.location.href = 'userPage.html'">
-->
</body>
</html>