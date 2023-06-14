<?php 
    include "init.php";
    $validations = new validations;
    $dbQueries  = new dbQueries;
    $emailObj    = new email;

    if(isset($_POST['signup'])){

        $validations->validate("fullName", "Full Name", "required|alphabetic");
        $validations->validate("email", "Email", "required|uniqueEmail|users");
        $validations->validate("password", "Password", "required|min_len|7");

        if($validations->run()){

            $fullname = $validations->input('fullName');
            $email    = $validations->input('email');
            $password = $validations->input('password');
            $password = password_hash($password, PASSWORD_DEFAULT);
            $status   = 0;
            $code     = password_hash(time(), PASSWORD_DEFAULT);
            $url      = "http://" . $_SERVER['SERVER_NAME'] . "/prof/verify.php?confirmation=" . $code;

        if($dbQueries->Query("INSERT INTO users (fullName, email, password, status) VALUES (?, ?, ?, ?)", 
                             [$fullname, $email, $password, $status])){

            if($dbQueries->Query("INSERT INTO email_confirmation(email, confirmationCode) 
            VALUES (?, ?)", [$email,$code])){
                
                if($emailObj->sendEmail($fullname, $email, $url, "CONFIRM", "Please confirm your email")){

                    $_SESSION['accountCreated'] = "Your account has been created please verify your email";
                   header("location: message.php");

                }


            }

        }

            

        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "components/header.php"; ?>

    <title>Create new account</title>
</head>
<body>

    <?php include "components/nav.php"; ?>
    <!-- Close Nav -->


    <section id="form">
       
    <?php include "components/signupForm.php"; ?>
        <!-- Close form-section -->
    </section>
    <!-- Close Form -->
</body>
</html>