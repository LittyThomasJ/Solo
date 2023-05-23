<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Solo Boutique | Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="../../boot/bootstrap1/jquery-3.3.1.min (1).js" type="text/javascript"></script>
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
		<!--
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
		<link rel="stylesheet" type="text/css" href="css2/style.css">
	</head>

	<body>
		<div class="header">
			<img src="images/logo.png" width="150" height="100">
		
		<div class="navnew navbar navbar-default ">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle tgl-br" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		  </button>
		</div>
		<div class="nwcoll collapse navbar-collapse navbar-right r-nav" id="myNavbar">
		  <ul class="nav navbar-nav l-nav">
			<li><a href="#">Home</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="register.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			<li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		  </ul>
		  <!--<ul class="nav navbar-nav navbar-right r-nav">
			<li><a href="register.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			<li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		  </ul>-->
		</div>
	  </div>
	</div>
	</div>

<!-- Slide Show -->
		<div class="image">
			<section>
			  <img class="mySlides" src="images/shopper-1.jpg"
			  style="width:100%;height:100%;">
			  <img class="mySlides" src="images/shopper-2.jpg"
			  style="width:100%;height:100%;">
			  <img class="mySlides" src="images/shopper-3.jpg"
			  style="width:100%;height:100%;">
			  
			  
			</section>
		</div>
		<section class="content">
			<h1 >Style is something we take seriously.</h1>
			<p>
			 Created for the love of finding and sharing affordable on-trend fashion, Solo Boutique is for women who live free, searching for wild passion
			 and endless fashion inspiration. We strive to help you invoke creativity, spirit, and eclectic adventures through fashion and personal style. Find 
			 highly coveted indie fashion trends at affordable prices at solo Boutique today.
			</p>
			<p>From bold and beautiful to sweet and dreamy, Pink Lily has contemporary clothing to appease the trendy babe in all of us. We offer custom monogramming for a variety of apparel and accessories, so you can personalize products you use everyday!</p>
		</section>
		<section class="shop">
			<h1 >Want to see more of what we have?<span> SHOP NOW!</span> </h1>
		</section>
		<footer>
			<div class="icon_bx">
				<a href="#"><img src="images/tw.png"width="28" height="28" alt=""></a>
				<a href="#"><img src="images/Untitled-1.png" width="28" height="28" alt=""></a>
				<a href="#"><img  src="images/y.png" width="28" height="28" alt=""></a> 
				<a href="#"><img  src="images/i.png" width="25" height="25" alt=""></a>
				<a href="#"><img  src="images/p.png" width="28" height="28" alt=""></a>
			</div>
		</footer>

		<script>
		// Automatic Slideshow - change image every 3 seconds
			var myIndex = 0;
			carousel();
			function carousel() {
				var i;
				var x = document.getElementsByClassName("mySlides");
				for (i = 0; i < x.length; i++) {
				   x[i].style.display = "none";
				}
				myIndex++;
				if (myIndex > x.length) 
				{
				myIndex = 1
				}
				x[myIndex-1].style.display = "block";
				setTimeout(carousel, 3000);
			}
		</script>
</body>
</html>

