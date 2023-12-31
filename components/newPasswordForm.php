<div class="form-section">
<div class="form--header">
                <h2>New Password Form</h2>
                <p>Please create a new password</p>
            </div>
            <!-- Close form--header -->
            <div class="form--body">
            <form action="" method="POST">
            <div class="group">
                    
                    <label for="password" class="form--label">New Password</label>

                    <input 
                         type="password"
                         name="newPassword"
                         class="<?php if($validations->errors['newPassword']): echo 'borderRed'; endif; ?> control"
                         placeholder="New Password"
                         value="<?php if($validations->setValue('newPassword')): echo $validations->setValue('newPassword'); endif; ?>"
                         />
                         <div class="error">
                            <?php if($validations->errors['newPassword']): echo $validations->errors['newPassword']; endif; ?>
                         </div>
            </div>
            <!-- Close group -->
            <div class="group">
                    
                    <label for="password" class="form--label">Confirm Password</label>

                    <input 
                         type="password"
                         name="confirmPassword"
                         class="<?php if($validations->errors['confirmPassword']): echo 'borderRed'; endif; ?> control"
                         placeholder="Confirm Password"
                         value="<?php if($validations->setValue('confirmPassword')): echo $validations->setValue('newPassword'); endif; ?>"
                         />
                         <div class="error">
                            <?php if($validations->errors['confirmPassword']): echo $validations->errors['confirmPassword']; endif; ?>
                         </div>
            </div>
            <!-- Close group -->
            <div class="group">
                    <input 
                    type="submit" 
                    name="newPasswordBtn" 
                    id="" 
                    class="btn btn-sweet" 
                    value="Confirm">
                </div>
            </form>
            </div>
            <!-- Close form--body -->
</div>
<!-- Close form-section -->