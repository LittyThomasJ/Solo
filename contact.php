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
	
	<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

/* Style the container/contact section */
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style></head>

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
	<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="images/map (1).jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
		  <option value="other">OTHERS</option>
		  
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

	<div class="footer">
	<footer>
			<div class="icon_bx">
				<a href="#"><img src="images/tw.png"width="28" height="28" alt=""></a>
				<a href="#"><img src="images/Untitled-1.png" width="28" height="28" alt=""></a>
				<a href="#"><img  src="images/y.png" width="28" height="28" alt=""></a> 
				<a href="#"><img  src="images/i.png" width="25" height="25" alt=""></a>
				<a href="#"><img  src="images/p.png" width="28" height="28" alt=""></a>
			</div>
		</footer>
		</div>
		</body>
</html>