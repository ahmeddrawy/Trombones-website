<!--  author : Ahmed Hanafy   -->
<!--  Date : 27-12-2019  -->
<!--  User Data base manilpulation functions v1.0 -->
<?php
    include "/var/www/html/it-project/DataBase/DBcredentials.php";

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

        echo"hey";
    }



?>