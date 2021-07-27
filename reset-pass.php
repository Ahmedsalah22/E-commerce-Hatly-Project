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

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Reset Password</h2>
                        <form method="POST" action="reset-pass-conn.php" enctype="multipart/form-data" class="register-form login100-form validate-form" id="login-form">
                            <div class="form-group wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                                <label for="your_email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="email" class="input100" id="email" placeholder="Your E-mail"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="reset" class="form-submit" value="Reset"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/eye.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>