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
                        <form method="POST" enctype="multipart/form-data" class="register-form login100-form validate-form" id="login-form">
                            <!--<div class="form-group">
                                <label for="your_password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="your_password" id="your_password" placeholder="Your New Password"/>
                            </div>-->
							<div class="form-group wrap-input100 validate-input" data-validate = "Enter Your New Password">
							    <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" class="form-input input100" name="password" id="password" placeholder="Your New Password"/>
                                <span toggle="#password" class="zmdi zmdi-eye-off field-icon toggle-password"></span>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Reset"/>
                            </div>
                        </form>
						<?php
						
						
						session_start();

                        $id = $_SESSION['id'];
						$email = $_SESSION['email'];
						
						//echo $email;
						
						include('C:/xampp/htdocs/hatly/Connection/connection.php');
						
						
						//============ Table client======//	
					
					    if($email != ""){		
						if(isset($_POST['submit'])){
						$sql = $con->prepare("SELECT * FROM client");
                        $sql->execute();
                        $rows = $sql->fetchAll();

                        foreach($rows as $pat)
                        {
						
						if($email == $pat['email']){	
							
						
						include('C:/xampp/htdocs/hatly/Connection/connection.php');
						
						$password = $_POST['password'];
						
						$sql = "UPDATE client SET client_password='$password'  WHERE id=$id";

                        $con->exec($sql);
    
                        //header('Location:logout.php');
                        header('Location:login-conn.php');
						

                        $con=null;
						
						}
						}
						}
						}else{
							
							
							include("logt.php");
							include("reset-pass.php");
							
						}
						
						//============ Table client======//		
						//============ Table Deliverer======//
						include('C:/xampp/htdocs/hatly/Connection/connection.php');
			            if($email != ""){
						if(isset($_POST['submit'])){
						$sql = $con->prepare("SELECT * FROM deliverer");
                        $sql->execute();
                        $rows = $sql->fetchAll();

                        foreach($rows as $pat)
                        {
						
						if($email == $pat['email']){	
							
						
						include('C:/xampp/htdocs/hatly/Connection/connection.php');
						
						$password = $_POST['password'];
						
						$sql = "UPDATE deliverer SET deliverer_password='$password'  WHERE id=$id";

                        $con->exec($sql);
    
                        //header('Location:logout.php');
                        header('Location:login-conn.php');

                        $con=null;
						
						}
						}
						}
						}else{
							
							include("logt.php");
							include("reset-pass.php");
							
							
						}
						
						//============ Table Deliverer======//	
						//============ Table admin======//	
						
						include('C:/xampp/htdocs/hatly/Connection/connection.php');
						if($email != ""){
						if(isset($_POST['submit'])){
						$sql = $con->prepare("SELECT * FROM admin");
                        $sql->execute();
                        $rows = $sql->fetchAll();

                        foreach($rows as $pat)
                        {
						
						if($email == $pat['email']){	
							
						
						include('C:/xampp/htdocs/hatly/Connection/connection.php');
						
						$password = $_POST['password'];
						
						$sql = "UPDATE admin SET admin_password='$password'  WHERE id=$id";

                        $con->exec($sql);
    
    
					    //header('Location:logout.php');		
                        header('Location:login-conn.php');

                        $con=null;
						
						}
						}
						}
						}else{
							
							
							include("logt.php");
							include("reset-pass.php");
							
							
						}
							
						//============ Table admin======//
						//============ Table customer_servant======//
						
						include('C:/xampp/htdocs/hatly/Connection/connection.php');
							
						if($email != ""){	
						if(isset($_POST['submit'])){
						$sql = $con->prepare("SELECT * FROM customer_servant");
                        $sql->execute();
                        $rows = $sql->fetchAll();

                        foreach($rows as $pat)
                        {
						
						if($email == $pat['email']){	
							
						
						include('C:/xampp/htdocs/hatly/Connection/connection.php');
						
						$password = $_POST['password'];
						
						$sql = "UPDATE customer_servant SET servant_password='$password'  WHERE id=$id";

                        $con->exec($sql);
    
                        //header('Location:logout.php');
                        header('Location:login-conn.php');

                        $con=null;
						
						}
						}
						}
						}else{
							
							
							include("logt.php");
							include("reset-pass.php");
							
						}
						//============ Table customer_servant======//	
							
						?>
						
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