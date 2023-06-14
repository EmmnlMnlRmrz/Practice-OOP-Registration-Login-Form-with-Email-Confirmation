<div class="form-section">
            <div class="form--header">
                <h2>Registration Form</h2>
                <p>Subic Bay Colleges Inc.</p>
            </div>
            <!-- Close form--header -->
            <div class="form--body">

                <form action="" method="POST">
                <div class="group">

                    <label for="name" class="form--label">Full Name</label>

                    <input 
                         type="text"
                         name="fullName" 
                         class="control"
                         placeholder="Name"
                       />

                       <div class="error">
                        <?php if($validations->errors['fullName']): ?>
                        <?php echo $validations->errors['fullName']; ?>
                        <?php endif; ?>
                       </div>

                </div>
                <!-- Close group -->
                <div class="group">

                    <label for="email" class="form--label">Email</label>

                    <input 
                        type="text"
                        name="email"
                        class="control"
                        placeholder="Email"
                        >

                        <div class="error">
                        <?php if($validations->errors['email']): ?>
                        <?php echo $validations->errors['email']; ?>
                        <?php endif; ?>
                       </div>

                </div>
                <!-- Close group -->
                <div class="group">
                    
                    <label for="password" class="form--label">Password</label>

                    <input 
                         type="password"
                         name="password"
                         class="control"
                         placeholder="New Password"
                        >

                        <div class="error">
                        <?php if($validations->errors['password']): ?>
                        <?php echo $validations->errors['password']; ?>
                        <?php endif; ?>
                       </div>

                </div>
                <!-- Close group -->
                <div class="group">
                    <input 
                    type="submit" 
                    name="signup" 
                    id="" 
                    class="btn btn-sweet" 
                    value="Sign Up">
                </div>
                <!-- Close group -->
            </form>
            </div>
            <!-- Close form--body -->
        </div>