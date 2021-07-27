<?php 

  ini_set('mysql.connect_timeout' , 300);
  ini_set('default_socket_timeout' , 300);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HATLY | Ecommerce Online Shopping Website</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link rel="icon" href="./images/title.png">
    <!-- Main css -->
    <link rel="stylesheet" href="css/reg.css">
	<link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>
   
	<?php 
	
	    include('C:/xampp/htdocs/hatly/Connection/connection.php');
	    
	
   ?>
	
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action="register-conn.php" method="POST" enctype="multipart/form-data" class="register-form login100-form validate-form" id="register-form">
                            <div class="form-group wrap-input100 validate-input" data-validate = "Enter Your First Name">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="fname" class="input100" id="name" placeholder="First Name"/>
                            </div>
							<div class="form-group wrap-input100 validate-input" data-validate = "Enter Your Last Name">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="lname" class="input100" id="name" placeholder="Last Name"/>
                            </div>
                            <div class="form-group wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="email" class="input100" id="email" placeholder="Your Email"/>
                            </div>
                            <!--<div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
								<span toggle="#password" class="zmdi zmdi-eye-off field-icon toggle-password"></span>
                            </div>-->
						    <div class="form-group wrap-input100 validate-input" data-validate = "Enter Your Password">
							    <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" class="form-input input100" name="password" id="password" placeholder="Password"/>
                                <span toggle="#password" class="zmdi zmdi-eye-off field-icon toggle-password"></span>
                            </div>
                            <!--<div class="form-group wrap-input100 validate-input" data-validate = "Repeat Password">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" class="input100" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>-->
							<div class="form-group wrap-input100 validate-input" data-validate = "Enter Your Age">
                                <label for="age"><i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i></label>
                                <input type="text" name="age" class="input100" id="age" placeholder="Your Age"/>
                            </div>
							<div class="form-group wrap-input100 validate-input" data-validate = "Enter Your telephone Number">
                                <label for="tel"><i class="zmdi zmdi-phone material-icons-phone"></i></label>
                                <input type="text" name="tel" id="tel" class="input100" placeholder="Your Tel"/>
                            </div>
							<div class="form-group wrap-input100 validate-input" data-validate = "Enter Your Address">
                                <label for="address"><i class="zmdi zmdi-home material-icons-home"></i></label>
                                <input type="text" name="address" class="input100" id="address" placeholder="Your Address"/>
                            </div>
							<div class="input-group" data-validate = "Choice Your Gender">
								    <label for="gender"><i class="zmdi zmdi-account material-icons-home"></i></label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled">Gender</option>
                                            <option selected="selected">Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                            </div>
							<div class="form-group wrap-input100 validate-input" data-validate = "Enter Your Profile Image">
                                <label for="image"><i class="zmdi zmdi-file material-icons-file"></i></label>
                                <input type="file" name="image" class="input100" id="image" placeholder="Your image"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
							<!--<div class="form-group form-button">
						           <button type="submit" name="signup" id="signup" class="form-submit">
							          Register
						          </button>
					        </div>-->
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
						<h1>HATLY<span>.com</span></h1>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/eye.js"></script>
	<script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>