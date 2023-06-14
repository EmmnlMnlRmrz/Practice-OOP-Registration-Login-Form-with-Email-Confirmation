<?php

include "init.php";

    $dbQueries = new dbQueries;

    if(isset($_GET['forgot'])){

        $forgotCode = $_GET['forgot'];
        if($dbQueries->Query("SELECT * FROM forgotpassword WHERE code = ? ", [$forgotCode])){
            if($dbQueries->rowCount() > 0){
                //Code is found
                $row = $dbQueries->fetch();
                $userID = $row->userID;
                $_SESSION['requestUserID'] = $userID;
                if($dbQueries->Query("DELETE FROM forgotpassword WHERE code = ? ", [$forgotCode])){

                    header("location: newPassword.php");

                }
            }

        }

    } else {
                //Code not found
                $_SESSION['forgotWrongURL'] = "Sorry wrong forgot password request URL";
                header("location: message.php");
    }



?>