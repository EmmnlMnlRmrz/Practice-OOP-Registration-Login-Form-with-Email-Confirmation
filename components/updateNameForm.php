<div class="content--section">
                <h1 class="dashboard--heading">Update Name</h1>
                <div>
                </div>
                <form action="" method="post">
                <div class="group">
                    <label for="name" class="form--label">Add Name</label>
                    <input type="text" name="fullName" id="name" class="<?php if($validations->errors['fullName']): echo 'borderRed'; endif; ?> control" placeholder="Update Name"
                    value="<?php echo $profile->fullName(); ?>">
                    <div class="error">
                        <?php if($validations->errors['fullName']): echo $validations->errors['fullName']; endif; ?>
                    </div>
                </div>
                <!-- Close group -->
                

                <div class="group">
                    <input type="submit" name="updateNameBtn" id="" class="btn btn-sweet" value="Update Name">
                </div>
                <!-- Close group -->
                </form>

            </div>
            <!-- Close content--section -->