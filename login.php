
<!DOCTYPE html>
<html>
	<head>
	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Solo Boutique | Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="../../boot/bootstrap1/jquery-3.3.1.min (1).js" type="text/javascript"></script>
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
		<link rel="stylesheet" type="text/css" href="css2/style.css">
</script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		
	</head>
	<body background="images/backreg.png">
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
		  <ul class="nav navbar-nav l-nav navbar-right r-nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		  </ul>
		  <!--
		  <ul class="nav navbar-nav navbar-right r-nav">

			
		  </ul>-->
		</div>
	  </div>
	</div>
	</div>	
<br>
<div class="container " background="images/backreg.png">

        
                      <div class="row">
                            <div class="col-md-4 col-md-offset-4 well  ">
                                <h2 class="text-center">Login</h2>
								<center> <img src="images\logimg.png" width=90></center>
								<br>
  <form  class="form-horizontal " name="myForm" method="post" >

  <div class="form-group">  
    <label class="control-label col-sm-4"  for="username">Username</label>
	<div class="col-sm-8">
    <input type="text" class="form-control" id="username" name="username" placeholder="Username" pattern="[A-Za-z]{1,}" title="Enter a Proper Name" required>
  </div>
  </div>
  <div class="form-group">
    <label  class="control-label col-sm-4" for="password">Password</label>
	<div class="col-sm-8">
    <input type="password" class="form-control" id="pass" name="password" placeholder="Password" "title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
  </div></div>
  <div class="text-center">
  <input type="submit" name="submit"  value=" submit "class="btn btn-success">
  
  </div>
   
  
  
 </div>
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
			<a href="#"><img  src="images/i.png" width="25" height="25" alt=""> </a>
			<a href="#"><img  src="images/p.png" width="28" height="28" alt=""></a>
			</div>
		</footer>
		</div>
	</body>

  </html>
   <?php
include 'solcon.php';
if (isset($_POST['submit']))
{
   $username=$_POST["username"];   //username value from the form
   $password=$_POST["password"];	//password value from the form
   $sql="select * from solo_login where username='$username' and password='$password'"; //value querried from the table
         //echo $sql;
   $res=mysqli_query($con,$sql);  //query executing function
if($res)
{
	echo "success";
}
else
{
	echo "error";
}
   while($fetch=mysqli_fetch_array($res))
   {
     if($fetch['role_id']==0) // role means user , for admin set to 0 and for user set to
     {
       $_SESSION["username"]=$fetch['username'];	// setting username as session variable
                  header('Location:adminhm.php');	//home page or the dashboard page to be redirected
      }

     if($fetch['role_id']==1) // role means user , for admin set to 0 and for user set to
     {
		$_SESSION["logid"]=$_fetch['regid'];
       $_SESSION["username"]=$fetch['username'];	// setting username as session variable
                  header('Location:userhm.php');	//home page or the dashboard page to be redirected
           }


         }
	


}
?>
  