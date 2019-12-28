<?php
    $username="root";
    $password = "Socrat_1234";
    $server="localhost";
    function connectToDB($dbname){
        global $server ,$password , $username;

        return new mysqli($server , $username , $password,$dbname);
    }

?>