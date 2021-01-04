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

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">

                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="name" placeholder="User Name" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
                            </div>
                            <div class="form-group">
                                <!-- <label for="email"><i class="zmdi zmdi-email"></i></label> -->
                                <input type="text" name="Name" id="Name" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <!-- <label for="email"><i class="zmdi zmdi-email"></i></label> -->
                                <input type="text" name="Address" id="Address" placeholder="Your Address" />
                            </div>
                            <div class="form-group">
                                <!-- <label for="email"><i class="zmdi zmdi-email"></i></label> -->
                                <input type="number" name="Phone" id="Phone" placeholder="Your Phone Number" />
                            </div>
                            <div class="form-group">
                                <!-- <label for="email"><i class="zmdi zmdi-email"></i></label> -->
                                <input type="date" name="Birth" id="Birth" placeholder="Year Of Birth" />
                            </div>

                                <!-- <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label> -->
                                <input type="text" name="Username" id="name" placeholder="User Name" />
                            </div>
                            <div class="form-group">
                                <!-- <label for="email"><i class="zmdi zmdi-email"></i></label> -->
                               <input type="email"  name="email" id="email" placeholder="Your Email" />
                            </div>
                             <div class="form-group">
                                <!-- <label for="pass"><i class="zmdi zmdi-lock"></i></label> -->
                                <input type="password" name="pass" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <!-- <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label> -->
                                <input type="password" name="re_password" id="re_password" placeholder="Repeat your password" />
                            </div>
                            <div class="form-group">
                                <!-- <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label> -->
                                <input type="text" name="fullname" id="name" placeholder="Full Name" />
                            </div>
                            <div class="form-group">
                                <!-- <label for="email"><i class="zmdi zmdi-email"></i></label> -->
                                <input type="date" name="birth" id="Birth" placeholder="Year Of Birth" />
                            </div>
                            
                            <div class="form-group">
                                <!-- <label for="email"><i class="zmdi zmdi-email"></i></label> -->
                                <input type="text" name="address" id="Address" placeholder="Your Address" />
                            </div>
                            <div class="form-group">
                                <!-- <label for="email"><i class="zmdi zmdi-email"></i></label> -->
                                <input type="number" name="phone" id="Phone" placeholder="Your Phone Number" />
                            </div>
                            <div class="form-group">
                                <!-- <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label> -->
                                <input type="file" name="image" id="image" placeholder="Avatar" require />
                            </div>                      

                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">

                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />

                                <input type="submit" name="register" id="register" class="form-submit" value="Register" />

                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/Register-login.png" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>


</html>

</html>


<?php


    if(isset($_POST['register']))
    {
        $username = $_POST['Username'];
        $password = $_POST['password'];
        $repassword = $_POST['re_password'];
        $fullname = $_POST['fullname'];
        $birth = $_POST['birth'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name']; 
        $c_ip = getRealUserIp();

        move_uploaded_file($image_tmpe,"Security/customer_images/$image");
        $insert_customers = "insert into customers
        (username, email,passsword ,re_password ,fullname , address ,phone ,birthday, image, ip) values ('$username','$email','$password','$repassword','$fullname','$address','$phone','$birth','$image','$c_ip')";
        $run_customer = mysqli_query($con,$insert_customers);
        $sel_cart = "select * from cart where ip_add='$c_ip'";
        $run_cart = mysqli_query($con,$sel_cart);
        $check_card = mysqli_num_rows($run,$run_cart);
        if ($check_cart>0){

            $_SESSION['email']=$email;
            echo "<script>alert('You have been register Successfully ')</script>";
            echo "<script> window.open(chekout.php','_seld')</script>";
        }else
        {
         $_SESSION['email']=$email;
            echo "<script>alert('You have been register Successfully ')</script>";
            echo "<script> window.open(MainApp.php','_seld')</script>";

        }
    }
    

?> 
