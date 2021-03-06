<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>Game Library Search</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/lineo-icon/style.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="style2.css"> -->

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body class="slider-collapse">

		<div id="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-text">
							<h1 class="site-title">Game Library Search</h1>
							<small class="site-description">GLS</small>
						</div>
					</a> <!-- #branding -->

					<div class="right-section pull-right">
						<!-- <a href="cart.html" class="cart"><i class="icon-cart"></i> 0 items in cart</a>
						<a href="#" class="login-button">Login/Register</a> -->
					</div> <!-- .right-section -->

					<div class="main-navigation">
						<button class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.html"><i class="icon-home"></i></a></li> <!-- <li class="menu-item home current-menu-item"><a href="index.html"><i class="icon-home"></i></a></li> -->
							<li class="menu-item home current-menu-item"><a href="add.php">Oyun Ekle</a></li>
							<li class="menu-item"><a href="Platform.php">Platform Ekle</a></li>
							<li class="menu-item"><a href="category.php">Category Ekle</a></li>
							<li class="menu-item"><a href="designer.php">Designer Ekle</a></li>
							<li class="menu-item"><a href="publisher.php">Publisher Ekle</a></li>
						</ul> <!-- .menu -->
						<div class="search-form">
							<label><img src="images/icon-search.png"></label>
							<input type="text" placeholder="Search...">
						</div> <!-- .search-form -->

						<div class="mobile-navigation"></div> <!-- .mobile-navigation -->
					</div> <!-- .main-navigation -->
				</div> <!-- .container -->
			</div> <!-- .site-header -->



			<main class="main-content">
				<div class="container">
					<div class="page">
						<section>
							<header>
								<h2 class="section-title">Oyun Ekle</h2>
								<a class="all">??zellikler</a>  <!-- <a href="#" class="all">??zellikler</a> -->
							</header>
              <div class="contact-form">  <!-- .contact-form -->

                <h2 id=baslik onmouseover="changeColorOver()" onmouseout="changeColorOut()">Oyun Bilgileri</h2>

                <form action="platform.php" target="" method="GET">
                     <table border=0 > <!-- style="border-collapse: collapse !important; border-spacing: 0 !important;" -->
                        <input type="hidden" name="e" value="2">
                         <tr> <!-- style="display: table-row !important; vertical-align: inherit !important; border-color: inherit !important;" -->
                    			<td>Oyun Ad??</td> <!-- game_name -->
                    			<td>
                    				<input type="text" name="game_name" value="" maxlength=100 > <!-- style="*, *:before, *:after {  box-sizing: border-box !important; }" -->
                    			</td>
                    		</tr>
                    		<tr>
                    			<td>Oyun Yorumu </td> <!-- game_comment -->
                    			<td> <input type="textarea" rows="20" cols="80" name="game_comment" value="" maxlength="300">
                    			</td>
                    		</tr>
                    		<tr>
                    			<td>Oyun Piyasaya ????k???? Tarihi (GG-AA-YYYY) </td> <!-- game_premiere_date -->
                    			<td> <input type="date" name="premiere_date" value="" maxlength="" min="1900" max="2020" required>
                    			</td>
                    		</tr>
                    		<tr>
                    			<td>Oynan???? Zaman?? (Saat) </td>  <!-- game_play -->
                    			<td> <input type="number" name="game_play" value="" maxlength="40" required>
                    			</td>
                    		</tr>
                    		<tr>
                    			<td>Oyuncu Say??s?? </td>  <!-- game_player -->
                    			<td> <input type="number" name="game_player" value="" maxlength="20" required>
                    			</td>
                    		</tr>
                    		<tr>
                    			<td>Oyun Ya???? </td> <!-- game_age -->
                    			<td> <input type="number" name="game_age" value="" maxlength="20" required>
                    			</td>
                    		</tr>
                    		<tr>
                    			<td>Borsa Alan??</td>  <!-- game_size -->
                    			<td> <input type="number" name="game_size" value="" maxlength="20" required>
                    			</td>
                    		</tr>
                    		<tr>
                    			<td colspan=2>	<input type="Submit" value="Submit"></td>	<!--	onclick="checkForm()"	-->
                    		</tr>

                    </table>

                </form>

						</div>  <!-- .contact-form -->
						</section>
          </div> <!-- .page -->
				</div> <!-- .container -->
			</main> <!-- .main-content -->

			<div class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Information</h3>
								<ul class="no-bullet">
									<li><a href="products.html">Site map</a></li>
									<li><a href="#">About us</a></li>
									<li><a href="#">FAQ</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div> <!-- .widget -->
						</div> <!-- column -->
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Consumer Service</h3>
								<ul class="no-bullet">
									<li><a href="#">Secure</a></li>
									<li><a href="#">Shipping &amp; Returns</a></li>
									<li><a href="#">Shipping</a></li>
									<li><a href="#">Orders &amp; Returns</a></li>
									<li><a href="#">Group Sales</a></li>
								</ul>
							</div> <!-- .widget -->
						</div> <!-- column -->
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">My Account</h3>
								<ul class="no-bullet">
									<li><a href="#">Login/Register</a></li>
									<li><a href="#">Settings</a></li>
									<li><a href="#">Cart</a></li>
									<li><a href="#">Order Tracking</a></li>
									<li><a href="#">Logout</a></li>
								</ul>
							</div> <!-- .widget -->
						</div> <!-- column -->
						<div class="col-md-6">
							<div class="widget">
								<h3 class="widget-title">Join our newsletter</h3>
								<form action="#" class="newsletter-form">
									<input type="text" placeholder="Enter your email...">
									<input type="submit" value="Subsribe">
								</form>
							</div> <!-- .widget -->
						</div> <!-- column -->
					</div><!-- .row -->

					<div class="colophon">
						<div class="copy">Copyright 2019 . Designed by Themezy. All rights reserved.</div>
						<div class="social-links square">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</div> <!-- .social-links -->
					</div> <!-- .colophon -->
				</div> <!-- .container -->
			</div> <!-- .site-footer -->
		</div>

		<div class="overlay"></div>

		<div class="auth-popup popup">
			<a href="#" class="close"><i class="fa fa-times"></i></a>
			<div class="row">
				<div class="col-md-6">
					<h2 class="section-title">Login</h2>
					<form action="#">
						<input type="text" placeholder="Username...">
						<input type="password" placeholder="Password...">
						<input type="submit" value="Login">
					</form>
				</div> <!-- .column -->
				<div class="col-md-6">
					<h2 class="section-title">Create an account</h2>
					<form action="#">
						<input type="text" placeholder="Username...">
						<input type="text" placeholder="Email address...">
						<input type="submit" value="register">
					</form>
				</div> <!-- .column -->
			</div> <!-- .row -->
		</div> <!-- .auth-popup -->

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>

	</body>

</html>
