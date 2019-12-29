<?php
/// todo need to edit the path 
    include "../DBcredentials.php";
    ini_set('display_errors', true);

?>



<?php

    // Create connection
    session_start();
    $dbname = "OriginalTrombones";
    $conn = connectToDB($dbname);
    $cantconnectmsg= "cant connect to  Datatbase currently <br>";
   
    if($conn->connect_error){
        echo '<script type="text/JavaScript">  
                     alert("'.$conn->connect_error.'");</script>' ;

        die($cantconnectmsg . $conn->connect_error);
    }
    else {
        if(isset($_POST) && !empty($_POST['brandName'])){
            $brand=$_POST["brandName"];
            $q = "select * from Trombones where Brand='$brand'";
            if($conn->query($q)== true  ){
                $result =$conn->query($q)->fetch_assoc();
/*
                echo $result["ID"]." <br>";
                echo $result["Brand"]." <br>";
                echo $result["nAvailable"]." <br>";
                echo $result["Price"]." <br>";
*/
                
                
            }
            else {
                echo "can't connect now  <br>";
            }
        }
        else {

            echo "please fill the form <br>";
        }



    }

?>

<html>
<head>

<Style>
*	{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Lato', sans-serif;
	}

body{
		background-color:#EEEEEE;
	}
	
header
{
	width:100%;
	background-color:#EEEEEE;
	height:80px;
	padding:15px;
	padding-top:15px;
	text-align:center;
	font-family: 'Lato', sans-serif;
	position:fixed;
	top:0px;
	z-index:1;
	border-bottom:2px black solid;
}

header > * {
	display:inline-block;
}

#PageTags{
	position:absolute;
	right:40px;
}

#PageTags > li {
	text-decoration:none;
	display:inline-block;
	margin-right:50px;
	margin-left:40px;
	z-index:1;	
}



a:link , a:active , a:visited , a:hover
{
	text-decoration:none;
	color:black;
}
	
#PageTitle
{
	font-size:30px;
	font-weight:bold;
	text-align:left;
	position:absolute;
	top:20px;
	left:75px;
}
	
#PageIcon
{
	position:absolute;
	left:10px;
	top: 15px;	
}

#content
{
	/*
	position:absolute;
	top:100px;
	margin:auto;
	border:2px red solid;
	left:200px;
	right:200px;
	
	background-color:#FAFAFA;
	position:absolute;
	
	padding:20px;
	border-bottom:30px solid #eee;
*/	
	width:auto;
	left:200px;
	right:200px;
	margin:auto;
	position:absolute;
	top:120px;

	background-color:#fafafa;
	border-radius: 12px;
	padding:20px;
	border-bottom:30px solid #eee;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 15px;
}
.row
{
	border-bottom:2px #ddd solid;
	margin-bottom:20px;
	padding-bottom:20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}


.userButton{
	width:120px;
	background-color:#f1c40f;
	font-size:15px;
	font-weight:bold;
	margin:0px;
	padding:7px;
	font-family: 'Lato', sans-serif;
	
	border-radius: 12px;
}

	form.center ,h1.center{
	display: block;
	margin-left: auto;
	margin-right: auto;
	}
	
	#tabletitle
	{text-align:center;
	padding-bottom:20px;
	margin:10px;
	font-size:25;
	font-weight:bold
	}
	
	table{
	width:100%;
	height:100%;
	position:relative;
	}
	
	
	#infotxt{
	text-align:right;
	margin:10px;
	margin-right:20px;
	width:50%;
	padding-bottom:20px;
	vertical-align:text-top;
	}
	
	#formitems{margin:10px;
	padding-left:15px;
	padding-bottom:20px;
	vertical-align:text-top;
	}
	
	#inputTxt{
	padding:7px;
	width:70%;
	background-color:#FFFFF;
	}
	
	#updateBtn
	{
	font-family:Arial;
	padding:20px;
	font-size:20px;
	background-color:#59ace0;
	color:white;
	border-radius: 12px;
	}
	
input{
	border-radius: 12px;
}	

.SelectBrand{
		padding:10px;
		margin-bottom:20px;
}
</Style>

</head>
<body>

<header>
	<img src="icon.png" id="PageIcon"/>
	<h1 id="PageTitle">Original Trombones</h1>
	<ul id="PageTags"> 
		<li><input type="button" class="userButton" value="your Profile" onclick="window.location.href = 'http://localhost/Trombones-website/AdminPage.php'"/> </li>
		<li><input type="button" class="userButton" value="Log Out" onclick="window.location.href = 'http://localhost/Trombones-website/index.php'"/> </li>
	</ul> 
</header>

<div id="content">
	<div class="row">
		<form name="addProduct" id="addProduct">	
			<table border="0">
				<tr> 
					<td colspan="2" id="tabletitle" name="BrandName"> <?php echo $brand; ?> </td> 
				</tr>
				
				<tr> 
					<td id = "infotxt">Price</td>
					<td id = "formitems" name="price"><?php echo $result["Price"]; ?></td>
				</tr>
				
				<tr> 
					<td id = "infotxt">Available number of Trombones </td>
					<td id = "formitems" name="nAvail"><?php echo $result["nAvailable"]; ?></td>
				</tr>
				
			</table>
		</form>
	</div>
</div>

</body>

</html>
