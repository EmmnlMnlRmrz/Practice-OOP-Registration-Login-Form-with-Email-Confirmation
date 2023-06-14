<?php
include "init.php";
$dbQueries = new dbQueries;

if(isset($_GET['confirmation'])){

    $confirmationCode = $_GET['confirmation'];
    if($dbQueries->Query("SELECT * FROM email_confirmation WHERE confirmationCode = ? ", [$confirmationCode])){
        if($dbQueries->rowCount() > 0){

            $row = $dbQueries->fetch();
            $userEmail = $row->email;
            if($dbQueries->Query("SELECT * FROM users WHERE email = ?", [$userEmail])){

                $userRow = $dbQueries->fetch();
                $userID  = $userRow->id;
                $status  = 1;
                if($dbQueries->Query("UPDATE users SET status = ? WHERE id = ? ", [$status, $userID])){
                if($dbQueries->Query("DELETE FROM email_confirmation WHERE confirmationCode = ? ", [$confirmationCode])){
                        
                        $_SESSION['userID'] = $userID;
                        $_SESSION['verify'] = "Your account has been verified successfully";
                        header("location: message.php");

                    }
                }
            }

        }else{
            $_SESSION['invalidURL'] = "Invalid URL, check your confirmation URL";            
            header("location: message.php");
        }
    }

}
?>