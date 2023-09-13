<?php
    session_start();
	include 'inc/head.php';
?>
<div class="container">
    <div class="m-5">
        <div class="card">
            <div class="card-header">
                <center>
                    <h4 class="card-title">Login Page</h4>
                </center>
            </div>
            <div class="card-body">
                <?php
                if (isset($_SESSION['status'])) {
                    echo '<div class="alert alert-danger container m-2">
                  <strong>Danger!  </strong>' .$_SESSION['status']. '</div>';
                  session_destroy();
                }
            ?>
                <form action="code.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="log_mail">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="log_pass" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <a href="forget_pass.php">Forget Password</a>
                    </div>
                    <div class="mb-3">
                        <a href="register.php">Register Now</a>
                    </div>
                    <button type="submit" class="btn btn-primary" name="log_sub">Submit</button>
                    <button class="btn btn-primary" onclick="ClearFields()">Clear</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function ClearFields() {

    document.getElementsByName("log_mail").value = "";
    document.getElementsByName("log_pass").value = "";
}
</script>
<?php
	include 'inc/head.php';
?>