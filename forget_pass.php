<?php
	include 'inc/head.php';
?>
<div class="container">
    <div class="m-5">
        <div class="card">
            <div class="card-header">
                <center>
                    <h4 class="card-title">Forget Password</h4>
                </center>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="log_mail">
                    </div>
                    <div class="mb-3">
                        <a href="login.php">Back to Login</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-primary" onclick="ClearFields()">Clear</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function ClearFields() {

    document.getElementsByName("log_mail").value = "";
}
</script>
<?php
	include 'inc/head.php';
?>