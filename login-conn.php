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
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="icon" href="./images/title.png">
    <!-- Main css -->
    <link rel="stylesheet" href="css/reg.css">
	<link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>
<?php


    session_start();

    include('C:/xampp/htdocs/hatly/Connection/connection.php');  
    


//print_r($_POST);
$email = $_POST['email'];
$password = $_POST['password'];
$sql=$con->prepare("SELECT * FROM client WHERE 
 email=? AND client_password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
//print_r($row);
$count=$sql->rowCount();
	
//echo "<br>".$count;
if($email != "" && $password != ""){
	
	
if($count>0){
    
	//$na = $_POST["name"];
    //$pa = $_POST["pass"];
    //session_start();
    $sql = $con->prepare("SELECT * FROM client");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $password == $pat["client_password"] && $pat["role"] != 4)
        {
            header('Location:register.php');
        }
        elseif($email == $pat["email"] && $password == $pat["client_password"])
        {
            $_SESSION['id'] = $pat['id'];
			$_SESSION['fname'] = $pat['first_name'];
			$_SESSION['lname'] = $pat['last_name'];
			$_SESSION['password'] = $pat['client_password'];
			$_SESSION['img'] = $pat['image'];
			$_SESSION['add'] = $pat['address'];
			$_SESSION['mail'] = $pat['email'];
			$_SESSION['phone'] = $pat['phone_number'];
			$_SESSION['role'] = $pat['role'];
			$_SESSION['age'] = $pat['age'];
            header('Location:profile_user/index.php');
        }
    }
    $con=null;
    echo "wrong password or email";
	
	
	
   
} else{
	
	
	//========= Start Table Deliverer==========================================//
	
	
	
$sql=$con->prepare("SELECT * FROM deliverer WHERE 
 email=? AND deliverer_password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
//print_r($row);
$count=$sql->rowCount();
	
//echo "<br>".$count;
if($email != "" && $password != ""){
	
	
if($count>0){
    
	//$na = $_POST["name"];
    //$pa = $_POST["pass"];
    //session_start();
    $sql = $con->prepare("SELECT * FROM deliverer");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $password == $pat["deliverer_password"] && $pat["role"] != 3)
        {
            header('Location:register.php');
        }
        elseif($email == $pat["email"] && $password == $pat["deliverer_password"])
        {
            $_SESSION['id'] = $pat['id'];
			$_SESSION['fname'] = $pat['first_name'];
			$_SESSION['lname'] = $pat['last_name'];
			$_SESSION['password'] = $pat['deliverer_password'];
			$_SESSION['img'] = $pat['image'];
			$_SESSION['add'] = $pat['address'];
			$_SESSION['age'] = $pat['age'];
			$_SESSION['tel'] = $pat['phone_number'];
			$_SESSION['gender'] = $pat['gender'];
			$_SESSION['mail'] = $pat['email'];
            header('Location:profile_deliverer/index.php');
        }
    }
    $con=null;
    echo "wrong password or email";
	
	
	
   
} else{
	
	
	  //========= Start Table Admin==========================================//
	
	
	
$sql=$con->prepare("SELECT * FROM admin WHERE 
 email=? AND admin_password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
//print_r($row);
$count=$sql->rowCount();
	
//echo "<br>".$count;
if($email != "" && $password != ""){
	
	
if($count>0){
    
	//$na = $_POST["name"];
    //$pa = $_POST["pass"];
    //session_start();
    $sql = $con->prepare("SELECT * FROM admin");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $password == $pat["admin_password"] && $pat["role"] != 1)
        {
            header('Location:register.php');
        }
        elseif($email == $pat["email"] && $password == $pat["admin_password"])
        {
            $_SESSION['id'] = $pat['id'];
			$_SESSION['fname'] = $pat['first_name'];
			$_SESSION['lname'] = $pat['last_name'];
			$_SESSION['password'] = $pat['admin_password'];
			$_SESSION['img'] = $pat['image'];
			
			
		
			$_SESSION['super'] = $pat['super'];
			$_SESSION['age'] = $pat['age'];
			$_SESSION['email'] = $pat['email'];
			$_SESSION['address'] = $pat['address'];
			$_SESSION['phone'] = $pat['phone_number'];
			
            header('Location:profile_admin/main-page.php');
        }
    }
    $con=null;
    echo "wrong password or email";
	
	
	
   
} else{
	
	
	  //========= Start Table Customer Servant==========================================//
	
	
	
$sql=$con->prepare("SELECT * FROM customer_servant WHERE 
 email=? AND servant_password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
//print_r($row);
$count=$sql->rowCount();
	
//echo "<br>".$count;
if($email != "" && $password != ""){
	
	
if($count>0){
    
	//$na = $_POST["name"];
    //$pa = $_POST["pass"];
    //session_start();
    $sql = $con->prepare("SELECT * FROM customer_servant");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $password == $pat["servant_password"] && $pat["role"] != 2)
        {
            header('Location:register.php');
        }
        elseif($email == $pat["email"] && $password == $pat["servant_password"])
        {
            $_SESSION['id'] = $pat['id'];
			$_SESSION['fname'] = $pat['first_name'];
			$_SESSION['lname'] = $pat['last_name'];
			$_SESSION['password'] = $pat['servant_password'];
			$_SESSION['img'] = $pat['image'];
			
			
			$_SESSION['age'] = $pat['age'];
			$_SESSION['email'] = $pat['email'];
			$_SESSION['address'] = $pat['address'];
			$_SESSION['phone'] = $pat['phone_number'];
			
			
			$_SESSION['add'] = $pat['address'];
			$_SESSION['mail'] = $pat['email'];
			//$_SESSION['phone'] = $pat['phone_number'];
			$_SESSION['role'] = $pat['role'];
			//$_SESSION['age'] = $pat['age'];
			
			
            header('Location:profile_customer_servant/index.php');
        }
    }
    $con=null;
    echo "wrong password or email";
	
	
	
   
} else{
	
	
	
	
	
echo '

    
	
<div class="alert alert-danger role="alert">
  <strong>Oh Error!</strong> Incorrect email or password and try submitting again.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	
	<div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="register.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form action="login-conn.php" method="POST" class="register-form login100-form validate-form" id="login-form">
                            <div class="form-group wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                                <label for="your_email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="email" class="input100" id="email" placeholder="Your E-mail"/>
                            </div>
                            <!--<div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                            </div>-->
							<div class="form-group wrap-input100 validate-input" data-validate = "Enter Your Password">
							    <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" class="form-input input100" name="password" id="password" placeholder="Password"/>
                                <span toggle="#password" class="zmdi zmdi-eye-off field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
								<a href="reset-pass.php" class="link">Forget Password?</a>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="http://www.facebook.com"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="http://www.twitter.com"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="http://www.google.com"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>';
	
  
	  }}else{
	
	
	include('logout.php');
	include('login.php');
	
	//echo "Not found UserName or password";
}
	
	
//========= End Table Customer Servant==========================================//
	

  
	  }}else{
	
	
	include('logout.php');
	include('login.php');
	
	//echo "Not found UserName or password";
}
	
	
//========= End Table admin==========================================//	
	
	

	
  
	  }}else{
	
	
	include('logout.php');
	include('login.php');
	
	//echo "Not found UserName or password";
}
	
	
//========= End Table Deliverer==========================================//	
	
	

	
  
	  }}else{
	
	
	include('logout.php');
	include('login.php');
	
	//echo "Not found UserName or password";
}
	
	    
?>
	
	
	
	
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/eye.js"></script>
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	
	
	
	</body>
</html>