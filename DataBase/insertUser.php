<!--  author : Ahmed Hanafy   -->
<!--  Date : 27-12-2019  -->
<!--  User Data base manilpulation functions v1.0 -->
<?php
    include "/var/www/html/it-project/DataBase/DBcredentials.php";

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
        insertUser();
        // query goes here
    }



?>
<?php
    function insertUser(){
        global $conn;
        
        $q = "INSERT INTO Users (UID, Name, Email, Password) VALUES (NULL, '{$_POST['username']}', '{$_POST['email']}', '{$_POST['password']}')";
     //   echo"$q";
        if($conn->query($q)==true){
            echo "signed up successfully <br>";
        }
        else {
            echo "error while signing up <br>"; 
        }

    }
    function emailIsRegisered($email){
        
        /// todo 

    }
    


?>