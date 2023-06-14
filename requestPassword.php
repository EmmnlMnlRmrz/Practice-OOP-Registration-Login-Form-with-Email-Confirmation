<?php 

    include "init.php";

    $validations = new validations;
    $dbQueries = new dbQueries;
    $emailObj = new email;
    if(isset($_POST['requestPassword'])){

        $validations->validate("email", "Email", "required");
        if($validations->run()){

            $email = $validations->input('email');

            if($dbQueries->Query("SELECT * FROM users WHERE email = ? ", [$email])){

                if($dbQueries->rowCount() > 0){
                //Email is found

                $row = $dbQueries->fetch();
                $userID = $row->id;
                $name = $row->fullName;
                $code = password_hash(rand(), PASSWORD_DEFAULT);
                $url = "http://" . $_SERVER['SERVER_NAME'] . "/prof/forgotPassword.php?forgot=".$code;
                if($dbQueries->Query("INSERT INTO forgotpassword (userID, code) VALUES (?,?)", [$userID, $code])){

                    if($emailObj->sendEmail($name, $email, $url, "FORGOT", "Forgot Password Request")){
                        
                        $_SESSION['forgotRequest'] = "Please check your email";
                        header("location: message.php");



                    }


                }

                    
                } else {
                //Email is not found
                    $validations->errors['email'] = "Sorry your email is not found";

                }

            }

        }


    }




?>

<html lang="en">
<head>
    <?php include "components/header.php"; ?>
    <title>Forgot Password Request</title>
</head>
<body>

    <?php include "components/nav.php"; ?>

    <section id="form">
        <?php include "components/requestPasswordForm.php" ?>
    </section>
    
</body>
</html>