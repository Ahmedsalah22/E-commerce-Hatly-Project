<?php

session_start();
if(!(isset($_SESSION['password']))){
	header('Location:login.php');
}

/*$opp = $_SESSION["opp"];	 
$ig = $_SESSION["ig"];
$n = $_SESSION["n"];
$de = $_SESSION["de"];
$pr = $_SESSION["pr"];*/

$check = $_SESSION["checks"];


if($check == "Clothes"){
		 
		   $opp = $_SESSION["opp"];	 
           $ig = $_SESSION["ig"];
           $n = $_SESSION["n"];
           $de = $_SESSION["de"];
           $pr = $_SESSION["pr"];
			   
			   
		
			   
	$width = 	 $_SESSION["w"];	 
	$height = 	 $_SESSION["h"];
	$depth = 	 $_SESSION["d"];
	$quality =	 $_SESSION["q"];
	$packeting = $_SESSION["p"];	
	$box =  	 $_SESSION["b"];
		 		   
			   
			   
			   
		   }else if($check == "Vegetables And Meats"){
			   
			   
		   $opp = $_SESSION["opp"];	 
           $ig = $_SESSION["ig"];
           $n = $_SESSION["n"];
           $de = $_SESSION["de"];
           $pr = $_SESSION["pr"];
			   
			   
		
			   
	$weight = 	 $_SESSION["e"];	 
	$fresh = 	 $_SESSION["f"];
		 
			   
			   
		   }else if($check == "Computers"){
			   
			   
		   $opp = $_SESSION["opp"];	 
           $ig = $_SESSION["ig"];
           $n = $_SESSION["n"];
           $de = $_SESSION["de"];
           $pr = $_SESSION["pr"];
			   
			   
		
			   
		$size =  $_SESSION["s"];	 
		$ram =  $_SESSION["r"];
		$processor =  $_SESSION["o"];	 
		$card =  $_SESSION["c"];
		$core =  $_SESSION["C"];	 
		$camera =  $_SESSION["M"];
		$battery =  $_SESSION["B"];	 
		$type =  $_SESSION["T"];
		$inches =  $_SESSION["N"];	 
		 	   
			   
			   
		   }else if($check == "Flash Memories"){
			   
			   
		   $opp = $_SESSION["opp"];	 
           $ig = $_SESSION["ig"];
           $n = $_SESSION["n"];
           $de = $_SESSION["de"];
           $pr = $_SESSION["pr"];
			   
			   
		
			   
		 $Type = $_SESSION["py"];	 
		 $Size = $_SESSION["z"];
		 
			   
			   
			   
		   }else if($check == "Screens And Tv"){
			   
			   
		   $opp = $_SESSION["opp"];	 
           $ig = $_SESSION["ig"];
           $n = $_SESSION["n"];
           $de = $_SESSION["de"];
           $pr = $_SESSION["pr"];
			   
			   
		
			   
		 $TYpe = $_SESSION["tp"];	 
		 $Inches =  $_SESSION["es"];
			   
			   
		   }else if($check == "Other"){
	
	
	
	       $opp = $_SESSION["opp"];	 
           $ig = $_SESSION["ig"];
           $n = $_SESSION["n"];
           $de = $_SESSION["de"];
           $pr = $_SESSION["pr"];
	
	
}


$_SESSION["yu"] = $opp;
$_SESSION["jh"] = $ig;
$_SESSION["jk"] = $n;
$_SESSION["jl"] = $pr;




$id = $_SESSION['id'];

?>
<!DOCTYPE html>
<html>
<head>
<title>HATLY | Ecommerce Online Shopping Website</title>
<link rel="icon" href="./images/title.png">		
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->		
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<!-- main css -->
<link rel="stylesheet" href="css/single.css">
<link rel="stylesheet" href="css/responsive.css">
<link href="css/lang.css" rel="stylesheet">	
<style>
	
	#button{
		
		
		
		display: none;
		background-color: #fda30e;
		width: 50px;
		height: 50px;
		text-align: center;
		border-radius: 4px;
		margin: 30px;
		position: fixed;
		bottom: 30px;
		right: 30px;
		z-index: 1000
		
	}
	#button:hover{
		
		
		cursor: pointer;
		background-color: #333
		
	}
	#button:active{
		
		background-color: #555
		
	}
	#button::after{
		
		content: "\f077";
		font-family: FontAwesome;
		font-weight: normal;
		font-style: normal;
		font-size: 2em;
		line-height: 50px;
		color: #fff
		
	}
		
	.prof{
			
			border-radius: 160px;
			
			
		}
	
	.hy{
		
		
		margin-top: 20px
		
	}
	
	
</style>	
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- single -->
<script src="js/imagezoom.js"></script>
<script src="js/jquery.flexslider.js"></script>
<!-- single -->
<!-- cart -->
	<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="js/jquery.easing.min.js"></script>
</head>
<body>
<!-- header 
<div class="header">
	<div class="container">
		<ul>
			<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Free and Fast Delivery</li>
			<li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Free shipping On all orders</li>
			<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot 
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="index.html"><img src="images/logo3.jpg"></a></h1>
		</div>
		<div class="col-md-6 header-middle">
			<form>
				<div class="search">
					<input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
				</div>
				<div class="section_room">
					<select id="country" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">All categories</option>
						<option value="null">Electronics</option>     
						<option value="AX">kids Wear</option>
						<option value="AX">Men's Wear</option>
						<option value="AX">Women's Wear</option>
						<option value="AX">Watches</option>
					</select>
				</div>
				<div class="sear-sub">
					<input type="submit" value=" ">
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
		<div class="col-md-3 header-right footer-bottom">
			<ul>
				<li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a>
					
				</li>
				<li><a class="fb" href="#"></a></li>
				<li><a class="twi" href="#"></a></li>
				<li><a class="insta" href="#"></a></li>
				<li><a class="you" href="#"></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- header -->
<div class="header" id="home">
	<div class="container">
		<ul>
		    <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
			<li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
			<li><i class="fa fa-phone" aria-hidden="true"></i> Call : +2 392 3929 210
</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@hatlydomain.com">info@hatlydomain.com</a></li>
			<li><i class="fa fa-truck" aria-hidden="true"></i>Free and Fast Delivery</li>
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			<form action="search.php" method="post">
					<input type="search" name="search" placeholder="Search here..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="index.php"><span class="li"><span class="e">H</span>atly</span> Shoppy <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
			</div>
        <!-- header-bot -->
		<div class="col-md-4 agileits-social top_content">
						<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						                                   <li class="share">Share On : </li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
			
			<!-- Languages files -->
			
			 <span class="custom-dropdown">
				  
				  
	         	  <a href="#" class="dropdown-toggle lin" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-flag"></i><span>Language</span><i class="fa fa-chevron-down fla"></i></a>
				  
				  <!--<select class="sel">-->
					  <!--<option class="op">-->
					   <ul class="sel dropdown-menu">
						   
						
							
					    <a href="#"><li class="ui"><img src="images/flag-1.png" width="16px" height="14px">
					    <span class="active">English</span></li></a>
					   
					  <!--</option>-->
				
					  
					     <a href="#"><li class="ui"><img src="images/flag5.png" width="16px" height="14px">
							 <span>Arabic</span></li></a>
					  
					  
					  
					  
					    <a href="#"><li class="ui"><img src="images/flag6.png" width="16px" height="14px">
					    <span>French</span></li></a>
					  
					  
					  
						<a href="#"><li><img src="images/flag7.png" width="16px" height="14px">
					    <span>Italian</span></li></a>
							
					  
				  </ul>
					  
				  <!--</select>-->
				  
			  </span>
			
			
			 <!-- Languages files -->



		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->		
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item "><a class="menu__link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">men's wear <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.php"><img src="images/men/suit-shirt/u%20(7).jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="mens.php">Mix Clothing</a></li>
											<li><a href="t-shirts.php">T-shirts</a></li>
											<li><a href="sweatar.php">Jackets</a></li>
											<li><a href="trouser.php">Trousers</a></li>
											<li><a href="suits.php">Suits</a></li>
											<li><a href="chemise.php">Chemises</a></li>
											<li><a href="shortss.php">Shorts</a></li>
											<li><a href="sportive-shorts.php">Sportive Shorts</a></li>
											<li><a href="sportive-tools.php">Sportive Tools</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="suit-shirt.php">Suit shirts</a></li>
											<li><a href="homely.php">Homely Clothes</a></li>
											<li><a href="inside-clothes.php">Inside Clothes</a></li>
											<li><a href="skarv.php">Skarvs</a></li>
											<li><a href="socks.php">Socks</a></li>
											<li><a href="sportive-clothes.php">Sportive Clothes</a></li>
											<li><a href="islamic.php">Islamic Clothes</a></li>
											<li><a href="summerly.php">Summerly Clothes</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">women's wear <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.php">Mix Clothing</a></li>
											<li><a href="blouses.php">Blouses</a></li>
											<li><a href="dress.php">Dresses</a></li>
											<li><a href="party.php">Party Clothes</a></li>
											<li><a href="geeba.php">Geeba</a></li>
											<li><a href="trousers.php">Trousers</a></li>
											<li><a href="sweaters.php">Jackets</a></li>
											<li><a href="t-shirt.php">T-shirts</a></li>
											<li><a href="islamic-clothes.php">Islamic Clothes</a></li>
											<li><a href="sports.php">Sportive Clothes</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="abayat.php">Abayatt</a></li>
											<li><a href="suit-shirtss.php">Suit Shirts</a></li>
											<li><a href="insides.php">Inside Clothes</a></li>
											<li><a href="marriage.php">Marriage Dresses</a></li>
											<li><a href="mohaggabat.php">Mohaggabatt</a></li>
											<li><a href="sockk.php">Socks</a></li>
											<li><a href="sportivee.php">Sportive Shorts</a></li>
											<li><a href="sportive-tools.php">Sportive tools</a></li>
											<li><a href="summerlyy.php">Summerly Clothes</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.php"><img src="images/women/blouse/v%20(1).jpeg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<!--<li class=" menu__item"><a class="menu__link" href="electronics.php">Electronics</a></li>
					<li class=" menu__item"><a class="menu__link" href="furniture.php">Furniture</a></li>-->
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Electronics <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="labtops.php">Labtops</a></li>
											<li><a href="camera.php">Camera</a></li>
											<li><a href="computers.php">Computers</a></li>
											<li><a href="earphone.php">Earphone's Computers</a></li>
											<li><a href="camera-ghyar.php">Camera Ghyar Slices</a></li>
											<li><a href="computer-ghyar.php">Computer Ghyar Slices</a></li>
											<li><a href="mobil-ghyar.php">Mobil Ghyar Slices</a></li>
											<li><a href="hand-free.php">Hand Free</a></li>
											<li><a href="computer-Acc.php">Computer's Accessories</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="loaders.php">Loaders</a></li>
											<li><a href="mouse.php">Mouses & Keyboards</a></li>
											<li><a href="mobil.php">Mobil Phones</a></li>
											<li><a href="playstation.php">Play Stations</a></li>
											<li><a href="printers.php">Printers</a></li>
											<li><a href="screen.php">Screens</a></li>
											<li><a href="tablets.php">Tablets</a></li>
											<li><a href="tv.php">Televisions</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="loaders.php"><img src="images/mobil/labtop/a%20(1).gif" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>  
				    <li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Schools <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="school-uniform.php">School Uniform</a></li>
											<li><a href="school-bags.php">School Bags</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="school-tools.php">School Tools</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="school-bags.php"><img src="images/school/clerkly-tools/f%20(18).jpeg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>	  
					<li class=" menu__item"><a class="menu__link" href="contact.php">contact</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<!--<div class="top_nav_right">
			<div class="cart box_1">
						<a href="checkout.php">
							<h3> <div class="total">
								<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
								
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						
			</div>	
		</div>-->
		
		<?php
				
						
						         $total = 0;
						
						
		                               include('C:/xampp/htdocs/hatly/Connection/connection.php');		
				
		                                 $sql = $con->prepare("SELECT * FROM checkout WHERE client_id = '$id'");
                                         $sql->execute();
                                         $rows = $sql->fetchAll();
                                         $count=$sql->rowCount();
		
                                         foreach($rows as $pat)
										 {
						
											 
											 $total += $pat["price"];
											 
							
										 }
						
						
						?>
		                     
		<div class="top_nav_right">
			<div class="cart box_1">
						<a href="checkout_2.php">
							<h3> <div class="total">
								<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i><span><?php if($total > 0){ echo "$" . $total . ".00";}else{echo "0.00";} ?></span> (<span id="simpleCart_quantity"><?php  if($count > 0){ echo $count;}else{echo "0";} ?></span> items)</div>
								
							</h3>
						</a>
						<p><a href="checkout_1.php" class="simpleCart_empty">Empty Cart</a></p>
						
			</div>	
		</div>
		
		
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
<!-- Start Modals -->
	
	<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
									<form action="login-conn.php" method="post" enctype="multipart/form-data">
							<div class="styled-input agile-styled-input-top">
								<input type="email" name="email" required="">
								<label>Email</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="password" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign In">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->
<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
						 <form action="register-conn.php" method="post" enctype="multipart/form-data">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="fname" required="">
								<label>First Name</label>
								<span></span>
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="lname" required="">
								<label>Last Name</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="email" name="email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="password" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<!--<div class="styled-input">
								<input type="password" name="Confirm Password" required=""> 
								<label>Confirm Password</label>
								<span></span>
							</div>-->
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="tel" required="">
								<label>Tel-Number</label>
								<span></span>
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="age" required="">
								<label>Age</label>
								<span></span>
							</div> 
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="address" required="">
								<label>Address</label>
								<span></span>
							</div>
							<div class="styled-input agile-styled-input-top">
								<select class="sel" name="gender" required="">
                                      <option selected>Gender</option>
                                      <option value="male">male</option>
									  <option value="female">female</option>
                                </select>
								
								<span></span>
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="file" name="image" required="">
								<span></span>
							</div>  
							<input type="submit" name="signup" value="Sign Up">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#">By clicking register, I agree to your terms</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<!--<img src="images/log_pic.jpg" alt=" "/>-->
							<img src="images/pro5.jpg" alt=" "/>
							<img src="images/pro2.jpg" alt=" "/>
							<img src="images/pro9.jpg" alt=" "/>
							<img src="images/pro2.jpg" alt=" "/>
							<img src="images/pro5.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal2 -->
	
	
	
	
<!-- End Modals  -->	
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>Single</h3>
	</div>
</div>
<!-- //banner -->
<!-- single -->
<div class="single">
	<div class="container">
		<div class="col-md-6 single-right-left animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					<!-- FlexSlider -->
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
					<!-- //FlexSlider-->
					<ul class="slides">
						<li data-thumb="<?php  echo 'data:image;base64,' . $ig; ?>">
							<div class="thumb-image"> <!--<img src="images/d2.jpg" data-imagezoom="true" class="img-responsive">-->
							
							<?php echo '<img data-imagezoom="true" class="img-responsive" width="399px" height="467px" src="data:image;base64,' . $ig  . '">';  ?>
							
							</div>
						</li>
						<li data-thumb="<?php  echo 'data:image;base64,' . $ig; ?>">
							<div class="thumb-image"> <!--<img src="images/d1.jpg" data-imagezoom="true" class="img-responsive">-->
							
							<?php echo '<img data-imagezoom="true" class="img-responsive" width="399px" height="467px" src="data:image;base64,' . $ig  . '">';  ?>
							
							
							</div>
						</li>	
						<li data-thumb="<?php  echo 'data:image;base64,' . $ig; ?>">
							<div class="thumb-image"> <!--<img src="images/d3.jpg" data-imagezoom="true" class="img-responsive">-->
							
							
							<?php echo '<img data-imagezoom="true" class="img-responsive" width="399px" height="467px" src="data:image;base64,' . $ig  . '">';  ?>
							
							</div>
						</li>
						<li data-thumb="<?php  echo 'data:image;base64,' . $ig; ?>">
							<div class="thumb-image"> <!--<img src="images/d4.jpg" data-imagezoom="true" class="img-responsive">-->
							
							<?php echo '<img data-imagezoom="true" class="img-responsive" width="399px" height="467px" src="data:image;base64,' . $ig  . '">';  ?>
							
							
							</div>
						</li>	
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<div class="col-md-6 single-right-left simpleCart_shelfItem animated wow slideInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
					<!--<h3>Asics Gel Zaraca 4 Blue Sport Shoes</h3>-->
			
			        <h3><?php echo $n;   ?></h3>
			      
					<p><span class="item_price"><?php echo "$" . $pr;  ?></span> <del>- $900</del></p>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="description">
						<h5>Check delivery, payment options and charges at your location</h5>
						<input type="text" value="Enter pincode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter pincode';}" required="">
						<input type="submit" value="Check">
					</div>
					<div class="color-quality">
						<div class="color-quality-right">
							<h5>Quality :</h5>
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null">5 Qty</option>
								<option value="null">6 Qty</option> 
								<option value="null">7 Qty</option>					
								<option value="null">10 Qty</option>								
							</select>
						</div>
					</div>
					<div class="occasional">
						<h5>Types :</h5>
						<!--<div class="colr ert">
							<label class="radio"><input type="radio" name="radio" checked=""><i></i>Casual</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Sports</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Formal</label>
						</div>-->
						
						
						<?php 
							
							if($check == "Clothes"){
							
								echo '<div class="colr ert">
							<label class="radio"><input type="radio" name="radio" checked=""><i></i>Casual ' . $n . '</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Sports ' . $n . '</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Formal ' . $n . '</label>
						</div>';
							
								
							}else if($check == "Vegetables And Meats"){
								
								
								
								echo '<div class="colr ert">
							<label class="radio"><input type="radio" name="radio" checked=""><i></i>Cereals</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Oils</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Vegetables</label>
						</div>';
								
							}else if($check == "Computers"){
								
								
								echo '<div class="colr ert">
							<label class="radio"><input type="radio" name="radio" checked=""><i></i>Flash Memories</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>TVs</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Screens</label>
						</div>';
								
								
							}else if($check == "Flash Memories"){
								
								
								echo '<div class="colr ert">
							<label class="radio"><input type="radio" name="radio" checked=""><i></i>Tablets</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Phones</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Accessories</label>
						</div>';
								
								
								
							}else if($check == "Screens And Tv"){
								
								
								echo '<div class="colr ert">
							<label class="radio"><input type="radio" name="radio" checked=""><i></i>LG</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Toshipa</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Margy</label>
						</div>';
								
								
							}else if($check == "Other"){
								
								echo '<div class="colr ert">
							<label class="radio"><input type="radio" name="radio" checked=""><i></i>Abajoura</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Lumba</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Taps</label>
						</div>';
								
								
							}
							
							?>
						
						
						<div class="clearfix"> </div>
					</div>
					<div class="occasion-cart">
						<a href="checkout.php" class="item_add hvr-outline-out button2">Add to cart</a>
					</div>
					
		</div>
				<div class="clearfix"> </div>

				<!--<div class="bootstrap-tab animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
							<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Reviews(1)</a></li>
							<li role="presentation" class="dropdown">
								<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Information <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
									<li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">cleanse</a></li>
									<li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">fanny</a></li>
								</ul>
							</li>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home" aria-labelledby="home-tab">
								<h5>Product Brief Description</h5>
								<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
									<span>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
							</div>
							<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="profile" aria-labelledby="profile-tab">
								<div class="bootstrap-tab-text-grids">
									<div class="bootstrap-tab-text-grid">
										<div class="bootstrap-tab-text-grid-left">
											<img src="images/men3.jpg" alt=" " class="img-responsive">
										</div>
										<div class="bootstrap-tab-text-grid-right">
											<ul>
												<li><a href="#">Admin</a></li>
												<li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>Reply</a></li>
											</ul>
											<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
												suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem 
												vel eum iure reprehenderit.</p>
										</div>
										<div class="clearfix"> </div>
									</div>
									
									<div class="add-review">
										<h4>add a review</h4>
										<form>
											<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
											<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="" style="margin-top: 20px; margin-left: 10px">
											
											<textarea type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
											<input type="submit" value="SEND">
										</form>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown1" aria-labelledby="dropdown1-tab">
								<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
							</div>
							<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown2" aria-labelledby="dropdown2-tab">
								<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
							</div>
						</div>
					</div>
				</div>-->
		
		<!--================Product Description Area =================-->
        <section class="product_description_area text-center">
        	<div class="container">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="col-md-2 nav-item" data-class=".tab-one">
					<!--<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>-->Description
					</li>
					<li class="col-md-2 nav-item" data-class=".tab-two">
					<!--<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Specification</a>-->Specification
					</li>
					<li class="col-md-2 nav-item" data-class=".tab-three">
					<!--<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Comments</a>-->Comments
					</li>
					<li class="col-md-2 nav-item selected" data-class=".tab-four">
					<!--<a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews</a>-->Reviews
					</li>
				</ul>
				<div class="tabs-content">
					<div class="tab-one">
						<!--<p>Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in Reading at the age of 15, where she went to secretarial school and then into an insurance office. After moving to London and then Hampton, she eventually married her next door neighbour from Reading, John Cook. He was an officer in the Merchant Navy and after he left the sea in 1956, they bought a pub for a year before John took a job in Southern Rhodesia with a motor company. Beryl bought their young son a box of watercolours, and when showing him how to use it, she decided that she herself quite enjoyed painting. John subsequently bought her a child’s painting set for her birthday and it was with this that she produced her first significant work, a half-length portrait of a dark-skinned lady with a vacant expression and large drooping breasts. It was aptly named ‘Hangover’ by Beryl’s husband and</p>
						<p>It is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing more and more recipe books and Internet websites that are dedicated to the act of cooking for one. Divorce and the death of spouses or grown children leaving for college are all reasons that someone accustomed to cooking for more than one would suddenly need to learn how to adjust all the cooking practices utilized before into a streamlined plan of cooking that is more efficient for one person creating less</p>-->
						
						
						<p><?php echo $de;  ?></p>
						
						
					</div>
					<div class="tab-two">
						<div class="table-responsive">
							
							
							<?php 
							
							if($check == "Clothes"){
							
							echo '<table class="table">
								<tbody>
									<tr>
										<td>
											<h5>Width</h5>
										</td>
										<td>
											<h5>' . $width . " m" .  '</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Height</h5>
										</td>
										<td>
											<h5>' . $height . " m" . '</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Depth</h5>
										</td>
										<td>
											<h5>' . $depth . " m" . '</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Quality checking</h5>
										</td>
										<td>
											<h5>' . $quality . '</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>When packeting</h5>
										</td>
										<td>
											<h5>' . $packeting . '</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Each Box contains</h5>
										</td>
										<td>
											<h5>' . $box . " pcs" . '</h5>
										</td>
									</tr>
								</tbody>
							</table>';
								
							}else if($check == "Vegetables And Meats"){
								
								
								echo '<table class="table">
								<tbody>
									<tr>
										<td>
											<h5>Weight</h5>
										</td>
										<td>
											<h5>' . $weight . " Kgm" . '</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Freshness Duration</h5>
										</td>
										<td>
											<h5>' . $fresh . " days" . '</h5>
										</td>
									</tr>
									
								</tbody>
							</table>';
								
								
								
							}else if($check == "Computers"){
								
								
								echo '<table class="table">
								<tbody>
									<tr>
										<td>
											<h5>Size (Hard Disk)</h5>
										</td>
										<td>
											<h5>' . $size . " Gbytes" .  '</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>RAM</h5>
										</td>
										<td>
											<h5>' . $ram . " Gbytes" . '</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Processor</h5>
										</td>
										<td>
											<h5>' . $processor . " GHz" . '</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Screen Card</h5>
										</td>
										<td>
											<h5>' . $card . '</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Core</h5>
										</td>
										<td>
											<h5>' . $core . '</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Camera</h5>
										</td>
										<td>
											<h5>' . $camera . " Mega pixels" . '</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Battery</h5>
										</td>
										<td>
											<h5>' . $battery . " M Am" . '</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Type</h5>
										</td>
										<td>
											<h5>' . $type . '</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Inches</h5>
										</td>
										<td>
											<h5>' . $inches . " inches" . '</h5>
										</td>
									</tr>
								</tbody>
							</table>';
								
								
							}else if($check == "Flash Memories"){
								
								
								
								echo '<table class="table">
								<tbody>
									<tr>
										<td>
											<h5>Type</h5>
										</td>
										<td>
											<h5>' . $Type . '</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Size</h5>
										</td>
										<td>
											<h5>' . $Size . " Gbytes" . '</h5>
										</td>
									</tr>
									
								</tbody>
							</table>';
								
								
							}else if($check == "Screens And Tv"){
								
								
								echo '<table class="table">
								<tbody>
									<tr>
										<td>
											<h5>Type</h5>
										</td>
										<td>
											<h5>' . $TYpe . '</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Inches</h5>
										</td>
										<td>
											<h5>' . $Inches . " inches" . '</h5>
										</td>
									</tr>
									
								</tbody>
							</table>';
								
								
							}else if($check == "Other"){
								
								
								echo "<p style='text-align: center; margin-top: 100px'>No Specification about that product '$n' !!!!!!!!!!!!!</p>";
								
								
								
							}
							
							?>
							
						</div>
					</div>
					<div class="tab-three">
						
						
						<!-- Start Search  -->
			
						<form method="post" enctype="multipart/form-data">
						<div class="" id="chat-2-search">
                            <div class="container-xxl py-4 py-lg-6">

                                <div class="input-group">
                                    <input type="text" name="search" class="form-control form-control-lg" placeholder="Search about comments" aria-label="Search about comments" required="required">

                                    <div class="input-group-append">
                                        <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit" name="sub" style="margin-top: 10px">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
						</form>
						
						
						
						<!-- End Search -->
						
						
						<?php
									if(isset($_POST["comment"])){
									include('C:/xampp/htdocs/hatly/Connection/connection.php');
									
						
						//============ Table client======//	
						$name = $_POST["name"];
						$email = $_POST["email"];
						$address = $_POST["address"];
						$message = $_POST["message"];
									
									
						 $sql=$con->prepare("SELECT * FROM client WHERE 
                             email=? AND address=?");
                         $sql->execute(array($email , $address));
                         $row=$sql->fetch();
                         $count=$sql->rowCount();
   
                          if($email != "" && $address != ""){
	
	
                            if($count>0){			
						
						//if(isset($_POST['review'])){	
							
							
						$sql = $con->prepare("SELECT * FROM client");
                        $sql->execute();
                        $rows = $sql->fetchAll();

                        foreach($rows as $pat)
                        {
							
							$e = $pat['first_name'] . ' ' . $pat['last_name'];
						
						if($email == $pat['email'] && $name == $e && $address == $pat['address']){	
							
						
						//include('C:/xampp/htdocs/hatly/Connection/connection.php');
							
							
						$img = $pat["image"];	
						$id = $pat["id"];	
							
						$rev = "comment";	
							
					    $sql = "INSERT INTO feedback (name , gmail , address , message , client_id , state , image , opposer) VALUES ('$name', '$email', '$address', '$message' , '$id' , '$rev' , '$img' , '$opp')"; 		
						
                        $con->exec($sql);
							
						
						echo '
						
						     <div class="alert alert-success hy" role="alert">
	  
			                     <strong>Well done!</strong> Your Comment are sent successfully.
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
			
	                         </div>
				
						   ';
    					

                        $con=null;
						
						}
						}}else{
								
								
								echo '
						
						     <div class="alert alert-danger hy" role="alert">
	   
			                     <strong>Oh Error!</strong> That email or name or address is incorrect. Please enter a valid email or name or address.
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
			
	                         </div>
				
						   ';
								
								
							}}else{
							  
							  header("location: single.php");
							  
						  }
										
										
						$_POST["name"] = " ";
						$_POST["email"] = " ";
						$_POST["address"] = " ";
						$_POST["message"] = " ";
						}
						
									
										
						
						//============ Table client======//	
						?>
									
						<?php		
						
						     // Start Collapse
									
							
									if(isset($_POST["reply"])){
									include('C:/xampp/htdocs/hatly/Connection/connection.php');
									
						$op = $_SESSION["op"];
						//============ Table client======//	
						$name = $_POST["name"];
						$email = $_POST["email"];
						$address = $_POST["address"];
						$message = $_POST["message"];
									
									
						 $sql=$con->prepare("SELECT * FROM client WHERE 
                             email=? AND address=?");
                         $sql->execute(array($email , $address));
                         $row=$sql->fetch();
                         $count=$sql->rowCount();
   
                          if($email != "" && $address != ""){
	
	
                            if($count>0){			
						
						//if(isset($_POST['review'])){	
							
							
						$sql = $con->prepare("SELECT * FROM client");
                        $sql->execute();
                        $rows = $sql->fetchAll();

                        foreach($rows as $pat)
                        {
							
							$e = $pat['first_name'] . ' ' . $pat['last_name'];
						
						if($email == $pat['email'] && $name == $e && $address == $pat['address']){	
							
						
						//include('C:/xampp/htdocs/hatly/Connection/connection.php');
							
							
						$img = $pat["image"];	
						$id = $pat["id"];	
							
						$rev = "reply";	
							
					    $sql = "INSERT INTO feedback (name , gmail , address , message , client_id , state , image , opposer , reply) VALUES ('$name', '$email', '$address', '$message' , '$id' , '$rev' , '$img' , '$opp' , '$op')"; 		
						
                        $con->exec($sql);
							
						
						echo '
						
						     <div class="alert alert-success hy" role="alert">
	  
			                     <strong>Well done!</strong> Your Reply are sent successfully.
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
			
	                         </div>
				
						   ';
    					

                        $con=null;
						
						}
						}}else{
								
								
								echo '
						
						     <div class="alert alert-danger hy" role="alert">
	   
			                     <strong>Oh Error!</strong> That email or name or address is incorrect. Please enter a valid email or name or address.
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
			
	                         </div>
				
						   ';
								
								
							}}else{
							  
							  header("location: single.php");
							  
						  }
										
										
						$_POST["name"] = " ";
						$_POST["email"] = " ";
						$_POST["address"] = " ";
						$_POST["message"] = " ";
						}
						
									
										
						
						//============ Table client======//	
									
									?>
									
							
									
									<!-- End Collapse -->
						    
						
						<div class="row">
							<div class="col-lg-6">
								<div class="comment_list">
									
									<!-- Start Search -->
									
									
									<?php
	
						if(isset($_POST["sub"])){
						
	 include('C:/xampp/htdocs/hatly/Connection/connection.php');
	 
	 $search = $_POST["search"];
	
	 $sql = $con->prepare("SELECT * FROM feedback WHERE message LIKE '%$search%'");
     $sql->execute();
     $rows = $sql->fetchAll();
	 $count=$sql->rowCount();
	if($count > 0){
	 foreach($rows as $row){
		 
		 $id = $row['id'];
		 $namee = $row['name'];
		 $emaill = $row['gmail'];
		 $imagess = $row['image'];
		 $messagess = $row['message'];
		 $state = $row['state'];
		 
		 //echo $name;
		 
		 
		 if($row['message'] <= $search){
		 
		 $_SESSION["op"] = $row['id'];
		 $_SESSION["imge"] = $row['image'];
		 $_SESSION["name"] = $row['name'];
		 $_SESSION["email"] = $row['gmail'];
		 $_SESSION["message"] = $row['message'];
		 $_SESSION["state"] = $row['state'];
		
		 
		 
		 }
		 
		 
		 
		 
		 if($state == "comment"){
		 
		 echo '<div class="review_item">
										<div class="media">
											<div class="col-md-2 d-flex">
												<img class="prof" height="70" width="70" src="data:image;base64,' . $imagess  . '">
											</div>
											<div class="media-body">
												   <h4>' . $namee . '</h4>
												    <h5>12th Feb, 2017 at 05:56 pm</h5>
												
												<a class="reply_btn" data-toggle="collapse" data-target="#reply" style="cursor: pointer">Reply</a>
											</div>
										</div>
										<p>' . $messagess . '</p>
									</div>';
			 
			 
			 
			 
			 
			 
		 	 
			 
		 }else{
			 
			 
			 //echo "<div style='text-align: center; margin-top: 100px; margin-bottom: 100px'>No Data is found " . $fname . "</div>";
			 
			 
			 
		 }
		 
	 }
	}else{}
									
									
		                $op = $_SESSION["op"];	
									
						$sql = $con->prepare("SELECT * FROM feedback WHERE opposer = '$opp' AND reply = '$op'");
                        $sql->execute();
                        $rows = $sql->fetchAll();

                        foreach($rows as $pat)
                        {
							
							//$e = $pat['first_name'] . ' ' . $pat['last_name'];
							
							
						if($pat['state'] == "reply"){
							
							
							//$op = $_SESSION["op"];
							
							//if($pat["reply"] == $op){
							
						/*$sqll = $con->prepare("SELECT * FROM feedback WHERE reply = '$op'");
                        $sqll->execute();
                        $row = $sqll->fetchAll();

                        foreach($row as $patt)
                        {*/
							
							//$e = $pat['first_name'] . ' ' . $pat['last_name'];
							
							
						//if($patt['state'] == "reply"){
							
							
							echo '
							
							
							         <div class="review_item reply">
										<div class="media">
											<div class="col-md-2 d-flex">
												<img class="prof" height="70" width="70" src="data:image;base64,' . $pat["image"]  . '">
											</div>
											<div class="media-body">
												<h4>' . $pat["name"] . '</h4>
												<h5>12th Feb, 2017 at 05:56 pm</h5>
												<a class="reply_btn" data-toggle="collapse" data-target="#reply" style="cursor: pointer">Reply</a>
											</div>
										</div>
										<p>' . $pat["message"] . '</p>
									</div>
						
							
							';
							
						}
						}							
									
									
						}
						
						
			?>			
					
			
									
									
									
									<!-- End Search  -->
									
									
									<div class="review_item">
										<div class="media">
											<div class="col-md-2 d-flex">
												<img src="images/review-1.png" alt="">
											</div>
											<div class="media-body">
												   <h4>Blake Ruiz</h4>
												    <h5>12th Feb, 2017 at 05:56 pm</h5>
												
												<a class="reply_btn" data-toggle="collapse" data-target="#reply" style="cursor: pointer">Reply</a>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
									</div>
									<div class="review_item reply">
										<div class="media">
											<div class="col-md-2 d-flex">
												<img src="images/review-2.png" alt="">
											</div>
											<div class="media-body">
												<h4>Blake Ruiz</h4>
												<h5>12th Feb, 2017 at 05:56 pm</h5>
												<a class="reply_btn" data-toggle="collapse" data-target="#reply" style="cursor: pointer">Reply</a>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
									</div>
									<div class="review_item">
										<div class="media">
											<div class="col-md-2 d-flex">
												<img src="images/review-3.png" alt="">
											</div>
											<div class="media-body">
												<h4>Blake Ruiz</h4>
												<h5>12th Feb, 2017 at 05:56 pm</h5>
												<a class="reply_btn" data-toggle="collapse" data-target="#reply" style="cursor: pointer">Reply</a>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
									</div>
									
									
										
									
									
									
									
									<?php
									
									
						
						//============ Table client======//	
						//if(isset($_POST["comment"])){
						include('C:/xampp/htdocs/hatly/Connection/connection.php');	
						/*$name = $_POST["name"];
						$email = $_POST["email"];
						$address = $_POST["address"];
						$message = $_POST["message"];*/
							
							
						$sql = $con->prepare("SELECT * FROM feedback WHERE opposer = '$opp'");
                        $sql->execute();
                        $rows = $sql->fetchAll();

                        foreach($rows as $pat)
                        {
							
							//$e = $pat['first_name'] . ' ' . $pat['last_name'];
							
							
						if($pat['state'] == "reply"){
							
							
							//$op = $_SESSION["op"];
							
							//if($pat["reply"] == $op){
							
						/*$sqll = $con->prepare("SELECT * FROM feedback WHERE reply = '$op'");
                        $sqll->execute();
                        $row = $sqll->fetchAll();

                        foreach($row as $patt)
                        {*/
							
							//$e = $pat['first_name'] . ' ' . $pat['last_name'];
							
							
						//if($patt['state'] == "reply"){
							
							
							echo '
							
							
							         <div class="review_item reply">
										<div class="media">
											<div class="col-md-2 d-flex">
												<img class="prof" height="70" width="70" src="data:image;base64,' . $pat["image"]  . '">
											</div>
											<div class="media-body">
												<h4>' . $pat["name"] . '</h4>
												<h5>12th Feb, 2017 at 05:56 pm</h5>
												<a class="reply_btn" data-toggle="collapse" data-target="#reply" style="cursor: pointer">Reply</a>
											</div>
										</div>
										<p>' . $pat["message"] . '</p>
									</div>
						
							
							';
							
							
							
						//}
							
						}	
							
							
						
						
						//}
							
							
							
						//}
							
							
						
						else if($pat['state'] == "comment"){	
							
						//$d = $pat['first_name'] . " " . $pat['last_name'];	
						//$img = $pat["image"];	
						//$id = $pat["id"];	
							
					    
                        
							echo '
							
							
							         <div class="review_item">
										<div class="media">
											<div class="col-md-2 d-flex">
												<div class="im"><img class="prof" height="70" width="70" src="data:image;base64,' . $pat["image"]  . '"></div>
											</div>
											<div class="media-body">
												<h4>' . $pat["name"] . '</h4>
												<h5>12th Feb, 2017 at 05:56 pm</h5>
												<a class="reply_btn" data-toggle="collapse" data-target="#reply" style="cursor: pointer">Reply</a>
											</div>
										</div>
										<p>'  . $pat["message"] . '</p>
									</div>
							
							
							';
							
						
						}
						}
						//}
						
						//============ Table client======//	
									
									?>
									
									
									
									
									
									
									<!-- start Collapse -->
									
									
							<div class="col-lg-6 collapse border-bottom px-lg-8" id="reply">
								<div class="review_box">
									<h4>Post a reply</h4>
									<form class="row contact_form" method="post" id="contactForm">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name" required="">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="email" class="form-control" height="150px" id="email" name="email" placeholder="Email" required="">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" id="number" name="address" placeholder="Address" required="">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<textarea class="form-control" name="message" id="message" rows="1" placeholder="Message" required=""></textarea>
											</div>
										</div>
										<div class="col-md-12 text-right">
											<button type="submit" name="reply" value="submit" class="btn submit_btn">Submit Now</button>
										</div>
									</form>
								</div>
							</div>
									
									
									
									
									
									<!-- End Collapse -->
									
									
								</div>
							</div>
							<div class="col-lg-6">
								<div class="review_box">
									<h4>Post a comment</h4>
									<form class="row contact_form" method="post" id="contactForm">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name" required="">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="email" class="form-control" height="150px" id="email" name="email" placeholder="Email" required="">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" id="number" name="address" placeholder="Address" required="">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<textarea class="form-control" name="message" id="message" rows="1" placeholder="Message" required=""></textarea>
											</div>
										</div>
										<div class="col-md-12 text-right">
											<button type="submit" name="comment" value="submit" class="btn submit_btn">Submit Now</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-four">
						
						
						<?php
									if(isset($_POST["review"])){
									include('C:/xampp/htdocs/hatly/Connection/connection.php');
									
						
						//============ Table client======//	
						$name = $_POST["name"];
						$email = $_POST["email"];
						$address = $_POST["address"];
						$message = $_POST["message"];
									
									
						 $sql=$con->prepare("SELECT * FROM client WHERE 
                             email=? AND address=?");
                         $sql->execute(array($email , $address));
                         $row=$sql->fetch();
                         $count=$sql->rowCount();
   
                          if($email != "" && $address != ""){
	
	
                            if($count>0){			
						
						//if(isset($_POST['review'])){	
							
							
						$sql = $con->prepare("SELECT * FROM client");
                        $sql->execute();
                        $rows = $sql->fetchAll();

                        foreach($rows as $pat)
                        {
							
							$e = $pat['first_name'] . ' ' . $pat['last_name'];
						
						if($email == $pat['email'] && $name == $e && $address == $pat['address']){	
							
						
						//include('C:/xampp/htdocs/hatly/Connection/connection.php');
							
							
						$img = $pat["image"];	
						$id = $pat["id"];	
							
						$rev = "review";	
							
					    $sql = "INSERT INTO feedback (name , gmail , address , message , client_id , state , image , opposer) VALUES ('$name', '$email', '$address', '$message' , '$id' , '$rev' , '$img' , '$opp')"; 		
						
                        $con->exec($sql);
							
						
						echo '
						
						     <div class="alert alert-success hy" role="alert">
	  
			                     <strong>Well done!</strong> Your Review are sent successfully.
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
			
	                         </div>
				
						   ';
    					

                        $con=null;
						
						}
						}}else{
								
								
								echo '
						
						     <div class="alert alert-danger hy" role="alert">
	   
			                     <strong>Oh Error!</strong> That email or name or address is incorrect. Please enter a valid email or name or address.
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
			
	                         </div>
				
						   ';
								
								
							}}else{
							  
							  header("location: single.php");
							  
						  }
										
										
						$_POST["name"] = " ";
						$_POST["email"] = " ";
						$_POST["address"] = " ";
						$_POST["message"] = " ";
						}
						
									
										
						
						//============ Table client======//	
									
									?>
						
						
						
						<div class="row">
							<div class="col-lg-7">
								<div class="row total_rate">
									<div class="col-lg-5">
										<div class="box_total">
											<h5>Overall</h5>
											<h4>4.0</h4>
											<h6>(03 Reviews)</h6>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="rating_list">
											<h3>Based on 3 Reviews</h3>
											<ul class="list">
												<li><a href="#">5 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
												<li><a href="#">4 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
												<li><a href="#">3 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
												<li><a href="#">2 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
												<li><a href="#">1 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="review_list">
									<div class="review_item">
										<div class="media">
											<div class="col-md-2 d-flex">
												<img src="images/review-1.png" alt="">
											</div>
											<div class="media-body">
												<h4>Blake Ruiz</h4>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
									</div>
									<div class="review_item">
										<div class="media">
											<div class="col-md-2 d-flex">
												<img src="images/review-2.png" alt="">
											</div>
											<div class="media-body">
												<h4>Blake Ruiz</h4>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
									</div>
									<div class="review_item">
										<div class="media">
											<div class="col-md-2 d-flex">
												<img src="images/review-3.png" alt="">
											</div>
											<div class="media-body">
												<h4>Blake Ruiz</h4>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
									</div>
									
									
									<?php
									
									
						
						//============ Table client======//	
						//if(isset($_POST["review"])){
						include('C:/xampp/htdocs/hatly/Connection/connection.php');	
						//$name = $_POST["name"];
						//$email = $_POST["email"];
						//$address = $_POST["address"];
						//$message = $_POST["message"];	
							
							
						$sql = $con->prepare("SELECT * FROM feedback WHERE opposer = '$opp'");
                        $sql->execute();
                        $rows = $sql->fetchAll();

                        foreach($rows as $pat)
                        {
							
							//$e = $pat['first_name'] . ' ' . $pat['last_name'];
						
						if($pat['state'] == "review"){	
							
						//$d = $pat['first_name'] . " " . $pat['last_name'];	
						//$img = $pat["image"];	
						//$id = $pat["id"];	
							
					    
                        
							echo '
							
							
							         <div class="review_item">
										<div class="media">
											<div class="col-md-2 d-flex">
												<div class="im"><img class="prof" height="70" width="70" src="data:image;base64,' . $pat['image']  . '"></div>
											</div>
											<div class="media-body">
												<h4>' . $pat['name'] . '</h4>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
										</div>
										<p>' . $pat['message']  .  '</p>
									</div>
							
							
							';
							
						
						}
						}
						//}
						
						//============ Table client======//	
									
									?>
									
									
								</div>
							</div>
							<div class="col-lg-5">
								<div class="review_box">
									<h4>Add a Review</h4>
									<div class="rat">
									<p>Your Rating:</p>
									<ul class="list">
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
									<p>Outstanding</p>
										</div>
									<form class="row contact_form" method="post" enctype="multipart/form-data" id="contactForm">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name" required="">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" id="number" name="address" placeholder="Address" required="">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<textarea class="form-control" name="message" id="message" rows="1" placeholder="Review" required=""></textarea>
											</div>
										</div>
										<div class="col-md-12 text-right">
											<button type="submit" name="review" value="submit" class="btn submit_btn">Submit Now</button>
										</div>
									</form>
									
									<!--    Start php   -->
									
									
									
									
									<!--    End php   -->
									
								</div>
							</div>
						</div>
					</div>
				</div>
        	</div>
        </section>
		
		        <!--================End Product Description Area =================-->
	
		
	</div>
</div>
<!-- //single -->
<!-- //product-nav -->
<div class="couponss">
	<div class="container">
		<div class="coupons-grids text-center">
			<div class="col-md-3 couponss-gd">
				<h3>Buy your product in a simple way</h3>
			</div>
			<div class="col-md-3 couponss-gd">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<h4>LOGIN TO YOUR ACCOUNT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 couponss-gd">
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				<h4>SELECT YOUR ITEM</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 couponss-gd">
				<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
				<h4>MAKE PAYMENT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--/grids-->
<div class="coupons">
		<div class="coupons-grids text-center">
			<div class="w3layouts_mail_grid">
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>FREE SHIPPING</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-headphones" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>24/7 SUPPORT</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-shopping-bag" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>MONEY BACK GUARANTEE</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
					<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-gift" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>FREE GIFT COUPONS</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
</div>
<!--grids-->
<!-- /we-offer -->
		<div class="sale-w3ls">
			<div class="container">
				<h6>We Offer Flat <span>40%</span> Discount</h6>
 
				<a class="hvr-outline-out button2" href="single.php">Shop Now </a>
			</div>
		</div>
	<!-- //we-offer -->		
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h2><a href="index.php"><span>H</span>atly Shoppy </a></h2>
			<p>Lorem ipsum quia dolor
			sit amet, consectetur, adipisci velit, sed quia non 
			numquam eius modi tempora.</p>
			<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
		</div>
		<!--<div class="col-md-3 footer-left">
			<h2><a href="index.php"><img src="images/logo3.jpg" alt=" " /></a></h2>
			<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur, adipisci velit, sed quia non 
			numquam eius modi tempora incidunt ut labore 
			et dolore magnam aliquam quaerat voluptatem.</p>
		</div>-->
		<div class="col-md-9 footer-right">
			<div class="col-sm-6 newsleft">
				<h3>SIGN UP FOR NEWSLETTER !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form>
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="clearfix"></div>
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Information</h4>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="mens.php">Men's Wear</a></li>
						<li><a href="womens.php">Women's Wear</a></li>
						<li><a href="electronics.php">Electronics</a></li>
						<li><a href="furniture.php">Decor</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				
				<div class="col-md-4 sign-gd-two">
					<h4>Store Information</h4>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 203 Ramciss St. Mountain View, <span>October City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:nfo@hatlydomain.com">nfo@hatlydomain.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +2 392 3929 210</li>
					</ul>
				</div>
				<div class="col-md-4 sign-gd flickr-post">
					<h4>Flickr Posts</h4>
					<ul>
						<li><a href="single.php"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.php"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.php"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.php"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.php"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.php"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.php"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.php"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.php"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">&copy 2020 HATLY. All rights reserved | Design by <a href="http://hatly.com/">Marketing Company(HATLY)</a></p>
	</div>
</div>
<!-- //footer -->
<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>
											
										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
	<a id="button"></a>
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
	<script>
	
	
	
	   jQuery(document).ready(function() {
		   
		   
		   var btn = $('#button');
		   
		   $(window).scroll(function() {
			   
			   
			   
			   if($(window).scrollTop() > 300){
				   
				   
				   btn.addClass('show');
				   
			   }else{
				   
				   
				   btn.removeClass('show');
				   
			   }
			   
		   });
		   
		   
		   btn.on('click' , function(e) {
			   
			   e.preventDefault();
			   $('html , body').animate({scrollTop:0} , '300');
			   
		   });
		 
		   
	   });
	
	</script>
	<script src="js/tabs.js"></script>
</body>
</html>
