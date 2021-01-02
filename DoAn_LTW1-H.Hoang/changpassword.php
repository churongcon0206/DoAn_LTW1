<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/login.png" alt="sing up image " height="750px"></figure>
                        <a href="#" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Change Password</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_pass_old"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="old_pass" id="old_pass" placeholder="Old Password" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass_new"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_new_pass" id="your_new_pass" placeholder="New Pass Word" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass_new"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="confirm_your_new_pass" id="your_new_pass" placeholder="New Pass Word" />
                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="changePasssword" id="changePasssword" class="form-submit" value="Submit" />
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- JS -->
    <script src="js/jquery.min.js "></script>
    <script src="js/main.js "></script>
</body>

</html>

<?php
 require_once '../Function.php';
session_start();
$id = $_SESSION["id"];/* userid of the user */
$con = mysqli_connect('127.0.0.1:3306','root','','admin') or die('Unable To connect');
if(count($_POST)>0) {
$result = mysqli_query($con,"SELECT *from customers WHERE name='" . $id . "'");
$row=mysqli_fetch_array($result);
if($_POST["old_pass"] == $row["password"] && $_POST["your_new_pass"] == $row["confirm_your_new_pass"] ) {
mysqli_query($con,"UPDATE customers set password='" . $_POST["your_new_pass"] . "' WHERE name='" . $id . "'");
$message = "Password Changed Sucessfully";
} else{
 $message = "Password is not correct";
}
}
?>
