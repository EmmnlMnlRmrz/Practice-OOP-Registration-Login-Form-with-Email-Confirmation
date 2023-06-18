<?php include "init.php" ?>
<?php 
include "authorized.php";
$profile = new profile;


?>
<html lang="en">
<head>
    <?php include "components/header.php"; ?>
    <title>Dasboard</title>
</head>
<body>
    
    <?php include "components/nav.php"; ?>
    
    <div class="container">
    <div class="dashboard">
    <?php include "components/card.php"; ?>
    <div class="content">
    <?php include "components/content.php"; ?>
    </div>
    <!-- Close content -->
    </div>
    <!-- Close dashboard -->
</div>
<!-- Close container -->

</body>
</html>