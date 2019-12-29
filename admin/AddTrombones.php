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
        if(isset($_POST) && !empty($_POST['brandName']) && !empty($_POST["inputTxt"])){
            $brand=$_POST["brandName"];
            $TromboneNumAdd = $_POST["inputTxt"];
            $q = "select * from Trombones where Brand='$brand'";
            if($conn->query($q)== true  ){
                $result =$conn->query($q)->fetch_assoc();
                if(isset($_POST["DeleteData"]) && !empty($_POST["DeleteData"])){
                    if($TromboneNumAdd<=$result["nAvailable"]){
                        $TromboneNumAdd *=-1;
                        
                        $nAvailable= $result["nAvailable"] + $TromboneNumAdd ;
                        $qChange= "UPDATE Trombones SET nAvailable = $nAvailable WHERE Brand= '$brand'";
                        if($conn->query($q)== true  ){
                            $conn->query($qChange);
                            echo '<script type="text/JavaScript">  
                            alert("Done!");</script>' ;
                            echo '<script type="text/JavaScript"> window.location.href="http://localhost/Trombones-website/AdminPage.php";</script>';
                            // echo "succefully purchased ".$nItems ." of ". $brand ."<br>";
                        }
                        else  {
                            echo "unfortuanelty we cant complete this operation .<br>";
                        }
                    }
                    else {
                        echo "can't remove this amount please provide suitable amount <br>";
                    }

                }
                else {
                    $nAvailable= $result["nAvailable"] + $TromboneNumAdd ;
                    $qChange= "UPDATE Trombones SET nAvailable = $nAvailable WHERE Brand= '$brand'";
                    if($conn->query($q)== true  ){
                        $conn->query($qChange);
                        echo '<script type="text/JavaScript">  
                        alert("Done!");</script>' ;
                        echo '<script type="text/JavaScript"> window.location.href="http://localhost/Trombones-website/AdminPage.php";</script>';
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
        }
        else {

            echo "please fill the form <br>";
        }

    }


?>