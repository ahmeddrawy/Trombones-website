<!--  author : Ahmed Hanafy   -->
<!--  Date : 27-12-2019  -->
<!--  User Data base manilpulation functions v1.0 -->
<?php
    include "DBcredentials.php";

    ini_set('display_errors', true);

?>

<?php

    // Create connection
    session_start();


    $dbname = "OriginalTrombones";
    print_r($_POST);
    
    $conn = connectToDB($dbname);

    $cantconnectmsg= "cant connect to  Datatbase currently <br>";
   
    if($conn->connect_error){
        echo '<script type="text/JavaScript">  
                     alert("'.$conn->connect_error.'");</script>' ;

        die($cantconnectmsg . $conn->connect_error);
    }
    else {
        updateTromboneNumber();
    }

    function updateTromboneNumber(){
    /*  global $conn ; 

        if(emailfound($email) == true){
            $uid = getUserByEmail($email);
            if($uid >-1){
                $q = "UPDATE Users SET ";
                $cnt= 0 ;
                if(!empty($_POST['username'])){
                    $q.="Name = '{$_POST['username']}'";
                    ++$cnt;  
                }
               if(!empty($_POST['newemail'])){
                    if($cnt>0)
                        $q.=" , ";
                    $q.="Email = '{$_POST['newemail']}'";
                    ++$cnt;  
                }
               if(!empty($_POST['password'])){
                    if($cnt>0)
                        $q.=" , ";
                    $q.="Password = '{$_POST['password']}'";
                    ++$cnt;  
                }
                else {
                    echo '<script type="text/JavaScript">  
                     alert("Sorry Something went wrong");</script>' ;
                    header('Location: http://localhost/Trombones-website/editUserPage.php');
                    
                }
              
            $q.=" WHERE UID =$uid";
              if($conn->query($q)==true){
                $_SESSION['Email'] = !isempty($_POST['newemail'])?$_POST['newemail'] :$_SESSION['Email'] ;
                
                echo"done updated";
                echo '<script type="text/JavaScript"> window.location.href="http://localhost/Trombones-website/userPage.php";</script>';
                }
                else {
                    echo '<script type="text/JavaScript">  
                     alert("Sorry Something went wrong");</script>' ;
                    header('Location: http://localhost/Trombones-website/editUserPage.php');
                    
                }
            }
            else {
                echo '<script type="text/JavaScript">  
                     alert("Sorry Something went wrong");</script>' ;
                    header('Location: http://localhost/Trombones-website/editUserPage.php');
            }
        }
        else {
                echo '<script type="text/JavaScript">  
                     alert("Sorry Something went wrong");</script>' ;
                    header('Location: http://localhost/Trombones-website/editUserPage.php');
            }
*/
    }
?>