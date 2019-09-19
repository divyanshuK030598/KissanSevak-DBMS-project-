<?php

	

include("dbcon.php");



?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>FarmersBuddy</title>
</head>
<body>
<div class="back" align="center;">
	<div class="header" align="center"><h1>Welcome To FarmersBuddy</h1></div>
    <div class="nevigation">
    	<table align="center" id="menu">
         
			
        
    

        </table>
    </div>
	
	
	
	<div id="basic">
	
	</div>
    <div class="content">
    	<div id="left">
		
			</ul>
			
				
				
			</ul>
			
		</div>
        <div id="right">
			<div>
		       <?php//login system?>
	
	<table align="left" style="margin-top: 0px; background-color: khaki; float: right; height: 600px; width: 575px">
   	<form action="register.php" method="post">
   	<tr>
   	<td>Enter Your Email
   	</td></tr>
   <tr>	<td><input type="email" name="uname"></td></tr>
   	<tr><td>Enter Your Password</td></tr>
   	<tr><td><input type="Password" name="Password"></td></tr>
   	<tr><td><input type="submit" name="submit" value="Login"></td></tr>
   </form>
   </table>
				<table align="left" style="background-color: aqua; margin-top: 0px; height: 600px; width: 525px;">
					<form action="register.php" method="post">
				<tr><td>Enter Your name</td><td><input type="text" name="name"></td></tr>
					<tr><td>Enter Your email</td><td><input type="email" name="email"></td></tr>
					<tr><td>Enter Your fone number</td><td><input type="number" name="mobile"></td></tr>
					<tr><td>Enter Your password</td><td><input type="password" name="password"></td></tr>
					<tr><td>Enter Your country</td><td><input type="text" name="contry"></td></tr>
					<tr><td>Enter Your city</td><td><input type="text" name="city"></td></tr>
					<tr><td>Enter Your address</td><td><input type="varchar" name="add"></td></tr>
					<tr><td><input type="submit" name="sub" value="Register"></td></tr>
				</table>
					</form>
				
<?php
if(isset($_POST['sub']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$fone=$_POST['mobile'];
	$password=$_POST['password'];
	$country=$_POST['contry'];
	$city=$_POST['city'];
	$add=$_POST['add'];
	$ip=1;
	
	$insrtqry="INSERT INTO `farmer`(`f_gamil`, `f-contry`, `f_city`, `f_password`, `f_name`, `f_phone`, `f_address`,`f_ip`) VALUES ('$email','$country','$city','$password','$name','$fone','$add','$ip')";
	$runinsrt=mysqli_query($con,$insrtqry);
	$rw=mysqli_num_rows($runinsrt);
	session_start();
	$_SESSION['emil']=$email;
	if($runinsrt!=NULL)
	{
		?> <script>alert("Registration Succesfully")</script><?php
		?><script>window.open('product/insert.php','_self')</script><?php
	}
	
		     }
	
	
?>	
	

	<?php //checking for validation
if (isset($_POST['submit'])) {
  	# code...
  	$name=$_POST['uname'];
  	$pass=$_POST['Password'];
  	include("../dbcon.php");
  	$sqllog="SELECT * FROM `farmer` WHERE f_gamil='$name' AND f_password='$pass'";
  	$runlog=mysqli_query($con,$sqllog);
  	$rowlog=mysqli_num_rows($runlog);

  	if ($rowlog<1) {
  		# code...
				?> <script>alert("Invalid Password Or UserName")</script><?php
  	}
  	else
	{
  		session_start();
       $_SESSION['emil']=$name;
	?><script>window.open('product/insert.php','_self')</script><?php
	}

  }  


?>
	          
			</div>
		</div>
    </div>
    <div class="footer" align="center">&copy;->By Dheeraj Kadela 2019</div>
</div>
</body>
</html>
