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
                echo $result["ID"]." <br>";
                echo $result["Brand"]." <br>";
                echo $result["nAvailable"]." <br>";
                echo $result["Price"]." <br>";

                
                
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