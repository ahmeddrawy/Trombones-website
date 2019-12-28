<?php
    include "DBcredentials.php";
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
       if(isset($_POST) && !empty($_POST['brandName']) && !empty($_POST["PayMethod"] ) &&!empty($_POST["nItems"])){
            $brand=$_POST["brandName"];
            $PayMethod = $_POST["PayMethod"];
            $nItems = $_POST["nItems"];
            $q = "select * from Trombones where Brand='$brand'";
            if($conn->query($q)== true  ){
                $result =$conn->query($q)->fetch_assoc();
                $nAvailable= $result["nAvailable"];

                if($nItems >$nAvailable ){
                    echo "we currently have this number of items , you can choose another brand or buy ".$nAvailable." <br>";
                    
                }
                else {
                    $nwAva= $nAvailable - $nItems;
                    $qChange= "UPDATE Trombones SET nAvailable = $nwAva WHERE Brand= '$brand'";
                    if($conn->query($q)== true  ){
                        $conn->query($qChange);
                        header('Location: http://localhost/Trombones-website/userPage.php');
                        // echo "succefully purchased ".$nItems ." of ". $brand ."<br>";
                    }
                    else  {
                        echo "unfortuanelty we cant complete this operation .<br>";
                    }

                }
                
            }
            else {
                echo "can't buy now  <br>";
            }
                // deleteUser();
                // query goes here
        }
        else {

            echo "please fill the form <br>";
        }
    }

?>
