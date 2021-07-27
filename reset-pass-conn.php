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
//$password = $_POST['password'];
$sql=$con->prepare("SELECT * FROM client WHERE 
 email=?");
$sql->execute(array($email));
$row=$sql->fetch();
//print_r($row);
$count=$sql->rowCount();
	
//echo "<br>".$count;
if($email != ""){
	
	
if($count>0){
    
	//$na = $_POST["name"];
    //$pa = $_POST["pass"];
    //session_start();
    $sql = $con->prepare("SELECT * FROM client");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $pat["role"] != 4)
        {
            header('Location:reset-pass.php');
        }
        elseif($email == $pat["email"])
        {
            $_SESSION['id'] = $pat['id'];
			$_SESSION['email'] = $pat['email'];
			/*$_SESSION['lname'] = $pat['last_name'];
			$_SESSION['password'] = $pat['admin_password'];
			$_SESSION['img'] = $pat['image'];*/
            header('Location:new-pass.php');
        }
    }
    $con=null;
    echo "wrong password or email";
	
	
	
   
} else{
	
	
		
      //========= Start Table Customer Servant==========================================//
	
	
	
$sql=$con->prepare("SELECT * FROM customer_servant WHERE 
 email=?");
$sql->execute(array($email));
$row=$sql->fetch();
//print_r($row);
$count=$sql->rowCount();
	
//echo "<br>".$count;
if($email != ""){
	
	
if($count>0){
    
	//$na = $_POST["name"];
    //$pa = $_POST["pass"];
    //session_start();
    $sql = $con->prepare("SELECT * FROM customer_servant");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $pat["role"] != 2)
        {
            header('Location:reset-pass.php');
        }
        elseif($email == $pat["email"])
        {
            $_SESSION['id'] = $pat['id'];
			$_SESSION['email'] = $pat['email'];
			/*$_SESSION['fname'] = $pat['first_name'];
			$_SESSION['lname'] = $pat['last_name'];
			$_SESSION['password'] = $pat['servant_password'];
			$_SESSION['img'] = $pat['image'];*/
            header('Location:new-pass.php');
        }
    }
    $con=null;
    echo "wrong password or email";
	
	
	
   
} else{
	
	
	
	//========= Start Table Deliverer==========================================//
	
	
	
$sql=$con->prepare("SELECT * FROM deliverer WHERE 
 email=?");
$sql->execute(array($email));
$row=$sql->fetch();
//print_r($row);
$count=$sql->rowCount();
	
//echo "<br>".$count;
if($email != ""){
	
	
if($count>0){
    
	//$na = $_POST["name"];
    //$pa = $_POST["pass"];
    //session_start();
    $sql = $con->prepare("SELECT * FROM deliverer");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $pat["role"] != 3)
        {
            header('Location:reset-pass.php');
        }
        elseif($email == $pat["email"])
        {
            $_SESSION['id'] = $pat['id'];
			$_SESSION['email'] = $pat['email'];
			/*$_SESSION['fname'] = $pat['first_name'];
			$_SESSION['lname'] = $pat['last_name'];
			$_SESSION['password'] = $pat['servant_password'];
			$_SESSION['img'] = $pat['image'];*/
            header('Location:new-pass.php');
        }
    }
    $con=null;
    echo "wrong password or email";
	
	
	
   
} else{
	
	
	
	//========= Start Table Admin==========================================//
	
	
	
$sql=$con->prepare("SELECT * FROM admin WHERE 
 email=?");
$sql->execute(array($email));
$row=$sql->fetch();
//print_r($row);
$count=$sql->rowCount();
	
//echo "<br>".$count;
if($email != ""){
	
	
if($count>0){
    
	//$na = $_POST["name"];
    //$pa = $_POST["pass"];
    //session_start();
    $sql = $con->prepare("SELECT * FROM admin");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $pat["role"] != 1)
        {
            header('Location:reset-pass.php');
        }
        elseif($email == $pat["email"])
        {
            $_SESSION['id'] = $pat['id'];
			$_SESSION['email'] = $pat['email'];
			/*$_SESSION['fname'] = $pat['first_name'];
			$_SESSION['lname'] = $pat['last_name'];
			$_SESSION['password'] = $pat['servant_password'];
			$_SESSION['img'] = $pat['image'];*/
            header('Location:new-pass.php');
        }
    }
    $con=null;
    echo "wrong password or email";
	
	
	
   
} else{
	
	
	
	
	
echo '

    <div class="grid_3 grid_5 w3ls">
	   <div class="alert alert-danger" role="alert">
	   
			<strong>Oh Error!</strong> Incorrect email and try submitting again.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
			
	   </div>
	</div>
	
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
	
	
	
	';
	
  
	  }}else{
	
	
	include('logt.php');
	include('login.php');
	
	//echo "Not found UserName or password";
}
	
	
//========= End Table Customer Servant==========================================//
	
	

	
  
	  }}else{
	
	
	include('logt.php');
	include('login.php');
	
	//echo "Not found UserName or password";
}
	
	
//========= End Table Deliverer==========================================//
	

	
  
	  }}else{
	
	
	include('logt.php');
	include('login.php');
	
	//echo "Not found UserName or password";
}
	
	
//========= End Table Customer Servant==========================================//
	
	
  
	  }}else{
	
	
	include('logt.php');
	include('login.php');
	
	//echo "Not found UserName or password";
}
	
	?>
    <script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/eye.js"></script>
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>	