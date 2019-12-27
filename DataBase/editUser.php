<!--  author : Ahmed Hanafy   -->
<!--  Date : 27-12-2019  -->
<!--  User Data base manilpulation functions v1.0 -->
<?php
    include "/var/www/html/it-project/DataBase/DBcredentials.php";
    include "/var/www/html/it-project/DataBase/emailcheck.php";

    ini_set('display_errors', true);

?>

<?php

    
    $dbname = "it-project";
    print_r($_POST);
    $conn = connectToDB($dbname);
    $cantconnectmsg= "cant connect to  Datatbase currently <br>";
    if($conn->connect_error){
        die($cantconnectmsg . $conn->connect_error);
    }
    else {
        updateUser();
        // deleteUser();
        // query goes here
    }

?>
<?php

    function updateUser(){
        global $conn ; 
        $tmpmail="ahmedhanfy1111@gmail.com"; /// Todo to be removed and added the session mail
        if(emailfound($tmpmail) == true){
            $uid = getUserByEmail($tmpmail);
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
                $q.=" WHERE UID =$uid";
                if($conn->query($q)==true){
                    echo"done updated";

                }
                else {
                    echo "can't update now <br>";
                }
            }
            else {
                echo "not valid";
            }
        }

    }
?>