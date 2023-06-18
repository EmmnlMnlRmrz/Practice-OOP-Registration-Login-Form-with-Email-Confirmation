<div class="content--section">
                <?php $profile->bioHeading(); ?>
                <div>
                <form action="" method="post">
                <div class="group">
                    <label for="bio" class="form--label">Add Bio</label>
                    <textarea name="bio" id="" 
                              cols="30" 
                              rows="10" 
                              class="<?php if($validations->errors['bio']): echo 'borderRed'; endif; ?> control" placeholder="Enter Bio.."
                              maxlength="68"><?php if($validations->setValue('bio')): echo $validations->setValue('bio'); else: echo $profile->fetchBio(); endif; ?></textarea>
                              <div class="error">
                              <?php if($validations->errors['bio']): echo $validations->errors['bio']; endif; ?>
                              </div>
                </div>
                <!-- Close group -->
                

                <div class="group">
                    <input type="submit" name="bioBtn" id="" class="btn btn-sweet" value="Save Bio">
                </div>
                <!-- Close group -->
                </form>
            </div>
            <!-- Close content--section -->
            </div>