<?php include "init.php"; ?>
<?php

if(isset($_SESSION['userID'])):

    header("location: dashboard.php");

endif;

$validations = new validations;
$dbQueries = new dbQueries;
if(isset($_POST['newPasswordBtn'])){

    $validations->validate("newPassword", "New Password", "required|min_len|7");
    $validations->validate("confirmPassword", "Confirm Password", "required");
    if($validations->run()){

        $newPassword = $validations->input('newPassword');
        $confirmPassword = $validations->input('confirmPassword');
        if($newPassword !== $confirmPassword){
            $validations->errors['confirmPassword'] = "Please confirm your password";

        }else {
            $hashPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $userID = $_SESSION['requestUserID'];
            if($dbQueries->Query("UPDATE users SET password = ? WHERE id = ? ", [$hashPassword, $userID])){
                $_SESSION['passwordUpdated'] = "Your password has been updated successfully. Now <a href='login.php'>login</a>";
                header("location: message.php");

            }
        }

    }
    
}

?>

<html lang="en">
<head>
    <?php include "components/header.php"; ?>
    <title>New Password</title>
</head>
<body>

    <?php include "components/nav.php"; ?>
    <section id="form">
    <?php include "components/newPasswordForm.php"; ?>
    <?php if(isset($_SESSION['requestUserID'])): ?>
    <?php else: $_SESSION['accessForbidden'] = "Access Forbidden!"; header("location:message.php");?>
    <?php endif; ?>
</section>
</body>
</html>

