<div class="card">
         <?php $profile->showImage(); ?>
         <!-- Close card--img -->
         <div class="card--name">
            <p><?php echo $profile->fullName() ?></p>
         </div>
         <!-- Close card--name -->
         <div class="card--job">
            <p><?php echo $profile->fethJob(); ?></p>
         </div>
         <!-- Close card--jobb -->
         <div class="card--skills">
            <?php $profile->showSkills(); ?>
         </div>
         <!-- Close card--skills -->
         <div class="card--intro">
            <p><?php echo $profile->fetchBio(); ?></p>
         </div>
         <!-- Close card--intro -->
         <div class="card--setting">
            <a href="dashboard.php" class="btn btn-card">Setting <span class="icon">&rarr;</span></a>
         </div>
         <!-- Close card--setting -->
        </div>
        <!-- Close card -->