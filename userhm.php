<?php
session_start();
?>
<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Solo Boutique | Userhome</title>
		<!--
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="../../boot/bootstrap1/jquery-3.3.1.min (1).js" type="text/javascript"></script>
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="css2/style.css">
</script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		
	</head>
	<body background="images/polo.png">
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
		<div class="nwcoll collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav l-nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">About Us</a></li>
		  </ul>
		  
		</div>
	  </div>
	</div>
	</div>
	<br>
<div class="container" >
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 well  ">
	<center>
	
	<h3>WELCOME  <b><?php echo $_SESSION['username'] ?></b></h3>
	<img src="images\logimg.png" width=90>
	</center>
	<form  class="form-horizontal " name="myForm" method="post" action="login.php">
	<br>
	<center><input type="button" name="logout" value="log out" ></center>
	</form>
	</div></div>
	
	</div>
	<br>
	<br>
	<br>
	<br>
	<div class="footer">
		<footer>
			<div class="icon_bx">
			<a href="#"><img src="images/tw.png"width="28" height="28" alt=""></a>
			<a href="#"><img src="images/Untitled-1.png" width="28" height="28" alt=""></a>
			<a href="#"><img  src="images/y.png" width="28" height="28" alt=""></a> 
			<a href="#"><img  src="images/i.png" width="25" height="25" alt=""> </a>
			<a href="#"><img  src="images/p.png" width="28" height="28" alt=""></a>
			</div>
		</footer>
		</div>
	</body>

  </html>
  <?php
  if(isset($_post['logout']))
  {
	  session_destroy();
	  header('location:login.php');
  }
	  ?>