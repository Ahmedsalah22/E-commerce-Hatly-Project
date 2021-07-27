<?php

session_start();
if(!(isset($_SESSION['password']))){
	header('Location:login.php');
}

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
<link href="css/rela.css" rel="stylesheet">	

<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />			
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
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
	
	
</style>		
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
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
					<li class="dropdown menu__item menu__item--current">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nutrition & Living <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="meats.php">Meats</a></li>
											<li><a href="herbcide.php">Herbicide</a></li>
											<li><a href="cheeses.php">Cheeses & Breeders</a></li>
											<li><a href="cereals.php">Cereals</a></li>
											<li><a href="vegetables.php">Vegetables</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="tools.php">Cleaning Tools</a></li>
											<li><a href="drinks.php">Drinks</a></li>
											<li><a href="cleaning.php">Cleaning</a></li>
											<li><a href="oils.php">Oils & Battens</a></li>
											<li><a href="fruits.php">Fruits</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="meats.php"><img src="images/meats/m%20(1).jpeg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class=" menu__item "><a class="menu__link" href="electronics.php">Electronics</a></li>
					<li class=" menu__item"><a class="menu__link" href="furniture.php">Decor</a></li>
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
		<h3>Cereals</h3>
	</div>
</div>
<!-- //banner -->
<!-- Electronics -->
<div class="electronics">
	<div class="container">
		<div class="col-md-8 electro-left text-center">
			<div class="electro-img-left mask" style="width: 400px">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/cereals/k%20(6).jpeg" height="291px" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content electro-text simpleCart_shelfItem">
								<h4>Branded Watches</h4>
								<span class="separator"></span>
								<p><span class="item_price">$500</span></p>
								<span class="separator"></span>
								<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
							</div>
						</div>
				</div>
			</div>
			<div class="electro-img-btm-left mask">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/meats/m%20(4).jpeg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content electro-text simpleCart_shelfItem">
								<h4>Mobiles</h4>
								<span class="separator"></span>
								<p><span class="item_price">$500</span></p>
								<span class="separator"></span>
								<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
							</div>
						</div>
				</div>
			</div>
			<div class="electro-img-btm-right mask">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/vegetables/h%20(3).jpeg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content electro-text simpleCart_shelfItem">
								<h4>Branded Watches</h4>
								<span class="separator"></span>
								<p><span class="item_price">$500</span></p>
								<span class="separator"></span>
								<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
							</div>
						</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-4 electro-right text-center">
			<div class="electro-img-rt mask">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/oils/p%20(2).jpeg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content electro-text simpleCart_shelfItem">
								<h4>Mobiles</h4>
								<span class="separator"></span>
								<p><span class="item_price">$500</span></p>
								<span class="separator"></span>
								<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
							</div>
						</div>
				</div>
				<!-- start meats-->
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/oils/p%20(6).jpeg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content electro-text simpleCart_shelfItem">
								<h4>Mobiles</h4>
								<span class="separator"></span>
								<p><span class="item_price">$500</span></p>
								<span class="separator"></span>
								<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
			<div class="ele-bottom-grid">
				<h3><span>Latest </span>Collections</h3>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
					<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(1).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(1).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Apple Iphone 6</a></h4>
									<div class="info-product-price">
										<span class="item_price">$500.99</span>
										<del>$700.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(2).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(2).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Apple Iphone 6s</a></h4>
									<div class="info-product-price">
										<span class="item_price">$799.99</span>
										<del>$999.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(3).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(3).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Apple Iphone 6</a></h4>
									<div class="info-product-price">
										<span class="item_price">$180.99</span>
										<del>$250.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(4).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(4).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Apple Iphone 6s</a></h4>
									<div class="info-product-price">
										<span class="item_price">$179.99</span>
										<del>$200.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(5).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(5).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">Combo Pack</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(6).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(6).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$129.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(7).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(7).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$149.99</span>
										<del>$180.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(8).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(8).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$119.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>	
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(9).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(9).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Apple Iphone 6</a></h4>
									<div class="info-product-price">
										<span class="item_price">$500.99</span>
										<del>$700.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(10).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(10).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Apple Iphone 6s</a></h4>
									<div class="info-product-price">
										<span class="item_price">$799.99</span>
										<del>$999.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(11).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(11).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$119.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(12).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(12).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(13).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(13).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(14).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(14).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(15).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(15).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(16).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(16).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(17).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(17).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(18).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(18).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				       <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(19).jpeg" height="240px" height="225px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(19).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(20).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(20).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(21).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(21).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(22).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(22).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(23).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(23).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(24).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(24).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(25).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(25).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(26).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(26).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(27).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(27).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(28).jpeg" height="240px" alt="" class="pro-image-front">
									<img src="images/cereals/k%20(28).jpeg" height="240px" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(29).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(29).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(30).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(30).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(31).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(31).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(32).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(32).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(33).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(33).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(34).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(34).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(35).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(35).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(36).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(36).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(37).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(37).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(38).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(38).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(39).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(39).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(40).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(40).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(41).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(41).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(42).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(42).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(43).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(43).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(44).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(44).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(45).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(45).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(46).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(46).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(47).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(47).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(48).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(48).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(49).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(49).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(50).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(50).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(51).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(51).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(52).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(52).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(53).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(53).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(54).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(54).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(55).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(55).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(56).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(56).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(57).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(57).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(58).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(58).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(59).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(59).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(60).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(60).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(61).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(61).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(62).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(62).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(63).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(63).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(64).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(64).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(65).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(65).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(66).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(66).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(67).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(67).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(68).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(68).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(69).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(69).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(70).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(70).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(71).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(71).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(72).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(72).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(73).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(73).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(74).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(74).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(75).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(75).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(76).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(76).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(77).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(77).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(78).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(78).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(79).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(79).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(80).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(80).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(81).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(81).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(82).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(82).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(83).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(83).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(84).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(84).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(85).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(85).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(86).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(86).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(87).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(87).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(88).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(88).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(89).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(89).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(90).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(90).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(92).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(92).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(93).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(93).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(94).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(94).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(95).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(95).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(96).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(96).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(97).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(97).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(98).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(98).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(99).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(99).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(100).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(100).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(101).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(101).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(102).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(102).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(103).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(103).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(104).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(104).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(105).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(105).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(106).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(106).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(107).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(107).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(108).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(108).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(109).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(109).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(110).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(110).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(111).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(111).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(112).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(112).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(113).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(113).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(114).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(114).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(115).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(115).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(116).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(116).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(117).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(117).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(118).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(118).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(119).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(119).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(120).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(120).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(121).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(121).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(122).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(122).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(123).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(123).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(124).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(124).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(123).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(123).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(125).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(125).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(126).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(126).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(127).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(127).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
				        <div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/cereals/k%20(128).jpeg" height="240px"  alt="" class="pro-image-front">
									<img src="images/cereals/k%20(128).jpeg" height="240px"  alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">50% Off</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.php">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$109.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
			</div>
		<div class="pagination-grid text-right">
			<ul class="pagination paging">
				<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
				<li><a href="mens.php">1<span class="sr-only">(current)</span></a></li>
				<li><a href="mens2.php">2</a></li>
				<li><a href="mens3.php">3</a></li>
				<li><a href="mens4.php">4</a></li>
				<li><a href="mens5.php">5</a></li>
				<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
			</ul>
		</div>
	</div>
</div>
<!-- //Electronics -->
<!-- Product -->
	
	<div class="w3l_related_products">
		<div class="container">
			<h3>Related Products</h3>
			<ul id="flexiselDemo2">			
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="images/wap2.jpg" alt=" " class="img-responsive">
								<img src="images/offer.jpg" alt=" " class="img-responsive">
								<img src="images/wap5.jpg" alt=" " class="img-responsive">
								<img src="images/wap4.jpg" alt=" " class="img-responsive">
								<img src="images/wap6.jpg" alt=" " class="img-responsive">
								<img src="images/offer14.jpg" alt=" " class="img-responsive">
								<img src="images/wap5.jpg" alt=" " class="img-responsive">
								<img src="images/34.jpg" alt=" " class="img-responsive">
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="single.php">Sweater</a></h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><span>$312</span> <i class="item_price">$212</i></p>
								<p><a class="item_add" href="#">Add to cart</a></p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="images/32.jpg" alt=" " class="img-responsive" />
								<img src="images/wap8.jpg" alt=" " class="img-responsive" />
								<img src="images/wp9.jpg" alt=" " class="img-responsive" />
								<img src="images/mp7.jpg" alt=" " class="img-responsive" />
								<img src="images/mp8.jpg" alt=" " class="img-responsive" />
								<img src="images/mp8.jpg" alt=" " class="img-responsive" />
								<img src="images/wap3.jpg" alt=" " class="img-responsive" />
								<img src="images/34.jpg" alt=" " class="img-responsive" />
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="single.php">Sweater</a></h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><span>$432</span> <i class="item_price">$323</i></p>
								<p><a class="item_add" href="#">Add to cart</a></p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="images/wap1.jpg" alt=" " class="img-responsive" />
								<img src="images/wap9.jpg" alt=" " class="img-responsive" />
								<img src="images/mp4.jpg" alt=" " class="img-responsive" />
								<img src="images/mp5.jpg" alt=" " class="img-responsive" />
								<img src="images/mp6.jpg" alt=" " class="img-responsive" />
								<img src="images/30.jpg" alt=" " class="img-responsive" />
								<img src="images/wap3.jpg" alt=" " class="img-responsive" />
								<img src="images/38.jpg" alt=" " class="img-responsive" />
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="single.php">Sweater</a></h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><span>$323</span> <i class="item_price">$310</i></p>
								<p><a class="item_add" href="#">Add to cart</a></p>
							</div>
						</div>
					</div>
				</li>
				<li class="lo">
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="images/wp1.jpg" alt=" " class="img-responsive" />
								<img src="images/34.jpg" alt=" " class="img-responsive" />
								<img src="images/mp3.jpg" alt=" " class="img-responsive" />
								<img src="images/mp2.jpg" alt=" " class="img-responsive" />
								<img src="images/mp1.jpg" alt=" " class="img-responsive" />
								<img src="images/wp2.jpg" alt=" " class="img-responsive" />
								<img src="images/36.jpg" alt=" " class="img-responsive" />
								<img src="images/38.jpg" alt=" " class="img-responsive" />
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="single.php">Sweater</a></h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><span>$256</span> <i class="item_price">$200</i></p>
								<p><a class="item_add" href="#">Add to cart</a></p>
							</div>
						</div>
					</div>
				</li>
			</ul>
				<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo2").flexisel({
							visibleItems:4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
	
	
<!-- Product -->				
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
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address :  203 Ramciss St. Mountain View, <span>October City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@hatlydomain.com">info@hatlydomain.com</a></li>
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
		<p class="copy-right">&copy 2020 HATLY. All rights reserved | Design by <a href="http://w3layouts.com/">Marketing Company(HATLY)</a></p>
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
</body>
</html>
