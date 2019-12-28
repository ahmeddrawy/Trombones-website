<?php
    $username="root";
    $password = "S";
    $server="localhost";
    function connectToDB($dbname){
        global $server ,$password , $username;

        return new mysqli($server , $username , $password,$dbname);
    }

?>
