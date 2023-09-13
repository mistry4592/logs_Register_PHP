<?php
    include 'inc/head.php';
?>
<div class="container">
    <div class="m-5">
        <div class="card">
            <div class="card-header">
                <center>
                    <h4 class="card-title">Register Page</h4>
                </center>
            </div>
            <div class="card-body">
                <form action="code.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="reg_uname">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="reg_email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="c">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">User Role</label>
                        <select class="form-select" name="reg_role">
                            <option selected>Choose...</option>
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                    <button type="submit" name="reg_btn" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-primary">Clear</button>
                    <div class="m-3">
                        <a href="login.php">Already Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    include 'inc/head.php';
?>