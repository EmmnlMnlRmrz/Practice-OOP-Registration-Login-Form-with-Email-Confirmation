<?php include "init.php";
      include "authorized.php";
      $profile = new profile;
      $validations = new validations;
      $dbQueries = new dbQueries;
      if(isset($_POST['addJobBtn'])){

        $validations->validate('addJob', "Job", "required");
        if($validations->run()){

            $job = $validations->input('addJob');
            $userID = $_SESSION['userID'];
            if($dbQueries->Query("UPDATE users SET job = ? WHERE id = ? ", [$job, $userID])){

                $_SESSION['jobAdded'] = "Your job has been saved successfully";
                header("location: dashboard.php");

            }

        }
      }
      
?>

<html lang="en">
<head>
    <?php include "components/header.php"; ?>
    <title>Add Job</title>
</head>
<body>

<?php include "components/nav.php"; ?>

    <div class="container">
    <div class="dashboard">
    <?php include "components/card.php"; ?>
    <div class="content">
    <?php include "components/addJobForm.php"; ?>
    </div>
    <!-- Close content -->
    </div>
    <!-- Close dashboard -->
</div>
<!-- Close container -->
    
</body>
</html>