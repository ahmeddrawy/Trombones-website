<html>
<head>

<link rel="stylesheet" type="text/css" href="AdminPageStyle.css"/>

</head>
<body>

<script type="text/javascript" src="adminPageValidation.js"></script>

<header>
	<img src="icon.png" id="PageIcon"/>
	<h1 id="PageTitle">Original Trombones</h1>
	<ul id="PageTags"> 
		<li><input type="button" class="userButton" value="Log Out" onclick="window.location.href = 'index.php'"/> </li>
	</ul> 
</header>

<div id="content">
	<div class="row">
		<form action ="admin/AdminPageCheck.php" onsubmit="return(validate());" method = "POST" name="addProduct" id="addProduct" >	
			<table border="0">
				<tr> 
					<td colspan="2" id="tabletitle" > Add more Trombones </td> 
				</tr>
				
				<tr> 
					<td id = "infotxt">Brand Name</td>
					<td id = "formitems">
						<input type="radio" name="brandName" value="Yamaha" class ="SelectBrand"> Yamaha<br>
						<input type="radio" name="brandName" value="Mendini" class ="SelectBrand"> Mendini<br>
						<input type="radio" name="brandName" value="Bach" class ="SelectBrand"> Bach	
					</td>
				</tr>
				
				<tr> 
					<td id = "infotxt">number of new Trombones </td>
					<td id = "formitems"> <input id = "inputTxt" name="inputTxt" type="number"/></td>
				</tr>
				
				<tr>
					<th colspan="2"> <input  type="submit" value="update Info" id ="updateBtn"/></th>
				</tr>
			</table>
		</form>
	</div>
	
	<div class="row">
		<form name="EditPrice" id="EditPrice" action ="admin/editprice.php" method="post" onsubmit="return(validate());" >	

			<table border="0">
				<tr> 
					<td colspan="2" id="tabletitle" > Edit Brand Price </td> 
				</tr>
				
				<tr> 
					<td id = "infotxt">Brand Name</td>
					<td id = "formitems">
						<input type="radio" name="brandName" value="Yamaha" class ="SelectBrand"> Yamaha<br>
						<input type="radio" name="brandName" value="Mendini" class ="SelectBrand"> Mendini<br>
						<input type="radio" name="brandName" value="Bach" class ="SelectBrand"> Bach	
					</td>
				</tr>
				
				<tr> 
					<td id = "infotxt">New Price </td>
					<td id = "formitems"> <input id = "inputTxt" name="inputTxt" type="number"/></td>
				</tr>
				
				<tr>
					<th colspan="2"> <input  type="submit" value="update Info" id ="updateBtn"/></th>
				</tr>
			</table>
		</form>
	</div>
	
	<div class="row">
		<form action ="AddTrombones.php" onsubmit="return(validate());" method = "POST" name="addProduct" id="addProduct" >	
			<table border="0">
				<tr> 
					<td colspan="2" id="tabletitle" > Delete Trombones </td> 
				</tr>
				
				<tr> 
					<td id = "infotxt">Brand Name</td>
					<td id = "formitems">
						<input type="radio" name="brandName" value="Yamaha" class ="SelectBrand"> Yamaha<br>
						<input type="radio" name="brandName" value="Mendini" class ="SelectBrand"> Mendini<br>
						<input type="radio" name="brandName" value="Bach" class ="SelectBrand"> Bach	
					</td>
				</tr>
				
				<tr> 
					<td id = "infotxt">number of Deleted Trombones </td>
					<td id = "formitems"> <input id = "inputTxt" name="inputTxt" type="number"/></td>
				</tr>
				
				<tr>
					<th colspan="2"> <input  type="submit" value="update Info" id ="updateBtn"/></th>
				</tr>
			</table>
		</form>
	</div>
	<div class="row">
		<form name="ShowProducts" action = "admin/showData.php"  method="post">	
			<table border="0">
				<tr> 
					<td colspan="2" id="tabletitle" > Show Data of one brand </td> 
				</tr>
				
				<tr> 
					<td id = "infotxt">Brand Name</td>
					<td id = "formitems">
						<input type="radio" name="brandName" value="Yamaha" class ="SelectBrand"> Yamaha<br>
						<input type="radio" name="brandName" value="Mendini" class ="SelectBrand"> Mendini<br>
						<input type="radio" name="brandName" value="Bach" class ="SelectBrand"> Bach	
					</td>
				</tr>
				
				<tr>
					<th colspan="2"> <input  type="submit" value="update Info" id ="updateBtn"/></th>
				</tr>
			</table>
		</form>
	</div>
		
</div>

<!--
<form name="addProduct" id="addProduct">
Brand Name 
<br/><input type="radio" name="brandName" value="Yamaha"> Yamaha<br>
<input type="radio" name="brandName" value="Mendini"> Mendini<br>
<input type="radio" name="brandName" value="Bach"> Bach<br>

number of new Trombones : <input type="number" name="nNewTrombones" id="number" value="0"/>
<input type="submit" value="submit"/>
</form>
/****************************************************/



<form name="EditPrice" id="EditPrice">
Brand Name 
<br/><input type="radio" name="brandName" value="Yamaha"> Yamaha<br>
<input type="radio" name="brandName" value="Mendini"> Mendini<br>
<input type="radio" name="brandName" value="Bach"> Bach<br>

New Price <input type="number" name="TrombonePrice" id="number" value="0"/>
<input type="submit" value="submit"/>
</form>

/******************************************************************/


<form name="DeleteTrombones" id="DeleteTrombones">
Brand Name 
<br/><input type="radio" name="brandName" value="Yamaha"> Yamaha<br>
<input type="radio" name="brandName" value="Mendini"> Mendini<br>
<input type="radio" name="brandName" value="Bach"> Bach<br>

number of new Trombones : <input type="number" name="nDeletedTrombones" id="number" value="0"/>
<input type="submit" value="submit"/>
</form>

/********************************************************************/

<form name="ShowProducts">
Brand Name 
<br/><input type="radio" name="brandName" value="Yamaha"> Yamaha<br>
<input type="radio" name="brandName" value="Mendini"> Mendini<br>
<input type="radio" name="brandName" value="Bach"> Bach<br>

<input type="submit" value="submit"/>
</form>

-->

</body>
</html>