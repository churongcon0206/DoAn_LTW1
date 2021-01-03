<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login Form</title>

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
                        <a href="registration.php" style = "text-decoration : none; font-size : 25px;" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
<<<<<<< HEAD
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
=======
                                <input type="submit" name="login" id="login" class="form-submit" value="Log in" />
>>>>>>> af6df39eb2c085ef534ad4b94a4fdc84fe3ffd57
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

<<<<<<< HEAD
</html>
=======
</html>
<?php 
if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $select_customer = "select * from customers where email='$email' AND password='$password'";

    $run_customer = mysqli_query($con,$select_customer);

    $get_ip = getRealUserIp();

    $check_customer = mysqli_num_rows($run_customer);

    $select_cart = "select *from cart ip_add='$get_ip'";

    $run_cart = mysqli_query($con,$select_cart);

    $check_cart = mysqli_num_rows($run_cart);

    if($check_customer==0){
        echo "<script> alert('Your email or password is wrong')</script>";
        exit();
    }
    if($check_customer==1 AND $check_cart==0){
        $_SESSION['email']=$email;
        echo "<script> alert('You are Logged in')</script>";
        echo "<script>window.open('You are Logged in')</script>";// chưa xong phần này....
    }else{
        $_SESSION['email']=$email;
        echo "<script> alert('You are Logged in')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";// chưa xong phần này....
    }
}

?>
>>>>>>> af6df39eb2c085ef534ad4b94a4fdc84fe3ffd57
