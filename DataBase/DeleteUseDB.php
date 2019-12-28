<!--  author : Ahmed Hanafy   -->
<!--  Date : 27-12-2019  -->
<!--  User Data base manilpulation functions v1.0 -->
<?php
    include "/var/www/html/it-project/DataBase/DBcredentials.php";
    include"/var/www/html/it-project/DataBase/emailcheck.php";
    ini_set('display_errors', true);

?>

<?php


    $dbname = "it-project";
    $conn = connectToDB($dbname);
    $cantconnectmsg= "cant connect to  Datatbase currently <br>";
    if($conn->connect_error){
        die($cantconnectmsg . $conn->connect_error);
    }
    else {
        deleteUser();
        // deleteUser();
        // query goes here
    }

?>
<?php
    function deleteUser(){
        if(isset($_POST['email'])){
            global $conn ; 
            $qcheck = "select * from Users where Email='{$_POST['email']}' ";
            if($conn->query($qcheck)== true  ){
                $result =$conn->query($qcheck)->fetch_assoc();
                if(!emailfound()){
                    echo "account not found ";
                    return ;
                }
                $dquery = "delete from Users where UID= {$result['UID']}";
                if($conn->query($dquery)==true){
                    echo"deleted";
                }
                else {
                    echo "cant delete";
                }
                
            }
            else {
                echo "can't delete this account <br>";
            }
        }
    }
    

?>