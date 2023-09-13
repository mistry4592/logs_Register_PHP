<?php
session_start();
include "inc/config.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST["reg_btn"])) {
    $reg_uname = $_POST["reg_uname"];
    $reg_email = $_POST["reg_email"];
    $reg_pass = $_POST["reg_pass"];
    $reg_role = $_POST["reg_role"];

    if ($reg_uname == "" || $reg_email == "" || $reg_pass == "" || $reg_role == "Choose...") {
    	$_SESSION["status"] =
            "Fill All Fileds..";
        header("Location: register.php");
    }else{
    $sql_check = "SELECT * FROM `user` WHERE `uname` = '{$reg_uname}' or `email` = '{$reg_email}'";
    ($result_check = mysqli_query($con, $sql_check)) or die("Query Failed");

    if (mysqli_num_rows($result_check) > 0) {
        $_SESSION["status"] =
            "Username, email and Phone Number is already exist";
        header("Location: register.php");
    } else {
        $v_code = bin2hex(random_bytes(16));
        $reg_sql = "INSERT INTO `user`(`uname`, `email`, `pass`, `role`,`is_verify`, `tokens`) VALUES ('$reg_uname', '$reg_email',md5('$reg_pass'),'$reg_role', '0', '$v_code')";
        $reg_result = mysqli_query($con, $reg_sql) && endmail($reg_email, $v_code);

        if ($reg_result) {
        	$_SESSION["status"] =
            "Please verify Your Email..";
            header("Location: login.php");
        }
    }
}
}
//Email Verifications start....

function endmail($emails, $v_code)
{
    require "PHPMailer/Exception.php";
    require "PHPMailer/PHPMailer.php";
    require "PHPMailer/SMTP.php";

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    try {
        //Server settings                     //Enable verbose debug output
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = "smtp.gmail.com"; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = "@gmail.com"; //SMTP username
        $mail->Password = "Password"; //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
        $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure =

        //Recipients
        $mail->setFrom("chigs4592@gmail.com", "Chigs");
        $mail->addAddress($emails); //Add a recipient
        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = "Email verify From Chigs";
        $mail->Body = "Thank You For Register! Click The link below to  verify the email address http://192.168.0.102/user/verify.php?email=$emails&v_code=$v_code ";

        $mail->send();
        return true;
    } catch (Exception $e) {
        // return false;
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

//Email Verifications End....



//Login Code Start Here......

if (isset($_POST["log_sub"])) {
    $email = mysqli_real_escape_string($con, $_POST["log_mail"]);
    $pass = md5($_POST["log_pass"]);

    $sql = "SELECT * FROM `user` WHERE email = '{$email}' and pass = '{$pass}'";
    ($result = mysqli_query($con, $sql)) or die("Query Faild...");

    if (mysqli_num_rows($result) > 0) {
        $sql_ver = "SELECT * FROM `user` WHERE email='{$email}' and is_verify='1'";
        ($result_ver = mysqli_query($con, $sql_ver)) or die("Query Faild...");
        if (mysqli_num_rows($result_ver) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION["uname"] = $row["uname"];
                $_SESSION["id"] = $row["id"];
                $_SESSION["role"] = $row["role"];

                if ($_SESSION["role"] == "Admin") {
                    header("Location: Admin/index.php");
                } else {
                    header("Location: User/index.php");
                }
            }
        } else {
            $_SESSION["status"] = "Account is not activate";
            header("Location: login.php");
        }
    } else 
 {       $_SESSION["status"] = "Username and Password Not Found";
        header("Location: login.php");
        // echo '<div class="alert alert-danger"> Username and Password Not Found</div>';
    }
}

//Login Code End Here.....

?>
