<?php 
    function emailfound($email){
        
        if(!empty($email)){
            global $conn ; 
            $qcheck = "select * from Users where Email='{$email}' ";
            if($conn->query($qcheck)== true ){
               
                $result =$conn->query($qcheck);
                if($result->num_rows>0){  
                    return true ;
                }
                
            }
            else {
            
                echo "account not found  <br>";
            }
        }
        else {
            echo "provide email <br>";
        }
        return false;
    }
    function getUserByEmail($email){
        global $conn;
        if(emailfound($email)){
            $qcheck = "select * from Users where Email='{$email}' ";
            $result =$conn->query($qcheck)->fetch_assoc();
            return $result['UID'];
        }
        else return -1;

    }
    
?>