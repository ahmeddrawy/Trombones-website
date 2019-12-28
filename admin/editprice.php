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
        print_r($_POST);
        if(isset($_POST) && !empty($_POST['brandName']) && !empty($_POST["TrombonePrice"])){
            $brand=$_POST["brandName"];
            $TrombonePrice = $_POST["TrombonePrice"];
            $q = "select * from Trombones where Brand='$brand'";
            if($conn->query($q)== true  ){
                $result =$conn->query($q)->fetch_assoc();
                $nAvailable= $result["nAvailable"];
                $qChange= "UPDATE Trombones SET Price = $TrombonePrice WHERE Brand= '$brand'";
                if($conn->query($q)== true  ){
                    $conn->query($qChange);
                    header('Location: http://localhost/Trombones-website/AdminPage.php');
                    // echo "succefully purchased ".$nItems ." of ". $brand ."<br>";
                }
                else  {
                    echo "unfortuanelty we cant complete this operation .<br>";
                }

                
                
            }
            else {
                echo "can't buy now  <br>";
            }
        }
        else {

            echo "please fill the form <br>";
        }

    }


?>