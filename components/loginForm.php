<div class="form-section">
            <div class="form--header">
                <h2>Sign In to SBCI</h2>
                <p>Enter your details</p>
                
            </div>
            <!-- Close form--header -->
            <div class="form--body">
                <form action="" method="POST">
                <div class="group">
                    <label for="email" class="form--label">Email</label>
                    <input type="text" name="email" id="email" class="control" placeholder="Email">
                    <div class="error">
                        <?php if($validations->errors['email']): ?>
                        <?php echo $validations->errors['email']; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Close group -->
                <div class="group">
                    <label for="password" class="form--label">Password</label>
                    <input type="password" name="password" id="password" class="control" placeholder="Enter Password">
                    <div class="error">
                        <?php if($validations->errors['password']): ?>
                        <?php echo $validations->errors['password']; ?>
                        <?php endif; ?>
                    </div>
                    <span class="forgotPassword">
                        <a href="requestPassword.php">Forgot password?</a>
                    </span>
                </div>
                <!-- Close group -->
                <div class="group">
                    <input type="submit" name="loginBtn" id="" class="btn btn-sweet" value="Sign In">
                </div>
                <!-- Close group -->
            </form>
            </div>
            <!-- Close form--body -->
        </div>
        <!-- Close form-section -->