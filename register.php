

<?php
       include 'solcon.php';
    if(isset($_POST['submit']))
    {
        
        $name=$_POST['name'];
        $address=$_POST['address'];
        $phone= $_POST['phone'];
        $email=$_POST['email'];
		$username=$_POST['username'];
        $password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
        
		$uppic=$_POST['uppic'];
		
   
        if($password==$cpassword)
		{
			$m="select * from solo_login where username='$username'";
			$query_run=mysqli_query($con,$m);
			if(mysqli_num_rows($query_run)>0)
			{
				echo '<script type="text/javascript"> alert("user already exists.....try another username")</script>';
			}
		}
		else
		{
			
        $sql="INSERT INTO solo_register(name,address,phone,email,username,password,uppic) VALUES('$name','$address','$phone','$email','$username','$password','$uppic')";
		$result=mysqli_query($con,$sql);
        
        
        // insert data into login table
         $sql3="INSERT INTO solo_login(username,password,role_id) VALUES('$username','$password',1)";
        $results=mysqli_query($con,$sql3);
		if($results)
		{
			echo '<script type="text/javascript"> alert("user registered go to login page to login") </script>';
		}
		else
		{
			echo '<script type="text/javascript"> alert("error")</script>';
		}
		}
	}
    ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
		<title>Solo Boutique | Registration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="../../boot/bootstrap1/jquery-3.3.1.min (1).js" type="text/javascript"></script>
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
		<link rel="stylesheet" type="text/css" href="css2/style.css">
		<script>
			function valid()
			{
			  /*if(document.getElementById('name').value.length<1)
		  {
			  alert("Please Enter Your Name");
			  document.getElementById('name').focus();
			  return false;
			  
		  } */
                      

	

                var a=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		var email=document.forms["form1"]["email"].value;
		if (!a.test(email)|| email=="")
		{ 
        	alert(" enter a valid email");
        	return false;
		}
		  if(document.getElementById('phone').value.length<1)
		  {
			  alert("Please Enter Your Mobile Number");
			  document.getElementById('phone').focus();
			  return false;
}  

                     var a=document.forms["form1"]["password"].value;

                     var b=document.forms["form1"]["password1"].value;

                    if(a!=b)
{
alert(" password and confirm password must be same");
}
var a=document.forms["form1"]["password"].value;

               if(a<=8)
{
alert("Password must be atleast 8 characters");
}

}

		</script>
    </head>
	<body background="images/meow.jpg">
		<div class="header" >
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
		  <ul class="nav navbar-nav l-nav navbar-right r-nav ">
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		  </ul>
		  <!--<ul class="nav navbar-nav ">
			<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			
		  </ul>-->
		</div>
	  </div>
	</div>
	</div>
	<br>
	<div class="container" >
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 well  ">
                                <h2 class="text-center"><b>Register</b></h2>
  <form  class="form-horizontal" name="myForm" method="post" action="register.php">
    <div class="form-group">  
    <label for="name" class="control-label col-sm-4">Name</label>
    <div class="col-sm-8">
	<input type="name" class="form-control" id="name" name="name" placeholder="Name" pattern="[A-Za-z]{1,}" title="Enter a Proper Name"  required>
  </div>
  </div>
  <div class="form-group">
    <label for="address" class="control-label col-sm-4">Address</label>
    <div class="col-sm-8">
	<input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
  </div></div>
  <div class="form-group">  
    <label for="phone" class="control-label col-sm-4">phone</label>
    <div class="col-sm-8">
	<input type="text" class="form-control"   id="phone" name="phone" placeholder="Phone" pattern="[7-9]{1}[0-9]{9}" required>
  </div>
  </div>
  
  <div class="form-group">
    <label for="email" class="control-label col-sm-4">Email</label>
   <div class="col-sm-8">
   <input type="text" class="form-control" id="email" name="email" placeholder="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
  </div>
  </div>
   <div class="form-group">
    <label for="username" class="control-label col-sm-4">Username</label>
   <div class="col-sm-8">
   <input type="text" class="form-control" id="username" name="username" placeholder="username"  required>
  </div>
  </div>
  <div class="form-group">
    <label for="password" class="control-label col-sm-4">Password</label>
	<div class="col-sm-8">
	<input type="password" class="form-control" id="password" name ="password" placeholder="Enter a Password.." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required >
</div> 
</div>
<div class="form-group">
    <label for="cpassword" class="control-label col-sm-4">Confirm Password</label>
	<div class="col-sm-8">
	<input type="password" class="form-control" id="cpassword" placeholder="Confirm" name ="cpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required>
 </div> </div>
 
 <div class="form-group">
    <label for="UploadurPic" class="control-label col-sm-4"> Upload picture</label>
	<div class="col-sm-8">
	<input type="file" accept="image" name="uppic" class="form-control" required>
	</div> </div>
 <div class="text-center">
  <a href="login.php"><input type="button" name="submit" class="btn btn-success" onclick=" return valid()" value="submit"></a>
  </div>
  </div>
  </div>
  </div>
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