<?php include "init.php"; ?>
<?php

$messages = new messages;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "components/header.php"; ?>

    <title>Create new account</title>
</head>
<body class="messageBg">

    <?php include "components/nav.php"; ?>
    <!-- Close Nav -->

    <div class="messageBox">
    <div class="messageBoxContainer">
    
    <?php $messages->showMessage("accountCreated", "success"); ?>
    <!-- Invalid URL -->
    <?php $messages->showMessage("invalidURL", "error"); ?>
    <!-- Verify Email -->
    <?php $messages->showMessage("verify", "verify"); ?>
    <!-- Not verified -->
    <?php $messages->showMessage('notVerified', "error"); ?>
    <!-- Forgot Password Request -->
    <?php $messages->showMessage("forgotRequest", "success"); ?>
    <!-- Forgot password request URL -->
    <?php $messages->showMessage("forgotWrongURL", "error"); ?>

        </div>
        <!-- Close messageBoxContainer -->
         </div>
        <!-- Close messageBox -->

    <script>

    let verify = document.querySelector(".verify-box");        
    setTimeout(() => {
        verify.classList.add("showVerify")
    }, 3000);
    </script>
</body>
</html>