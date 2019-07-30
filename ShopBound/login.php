<?php 
include 'resource/common.php';	
?>
<html>
<head>

	<title>Login - ShopBound</title> 
  <!---- External css file --> 
  <link href="style/login.css" rel="stylesheet" type="text/css"/>
	<?php include 'resource/framework.php' ?>
<script type="text/javascript">

  	function validateMyForm()
{
	var x=document.getElementById('email').value;
	var y=document.getElementById('password').value;
	 if(!x && !y)
  { 
    alert("Please enter your credentials");
    return false;
  }

  else if(!y)
  { 
    alert("Please enter the password");
    return false;
  }
  else if(!x)
  { 
    alert("Please enter your registered email");
    return false;
  }
}
</script>

	
	<style type="text/css">
		a{ 
	text-decoration: none;}
	</style>
</head>
<body>

<!-- header -->

<?php include 'resource/header.php' ?>


<!--login form-->
<div class="container-x ">
<center>
			<form class="form-group" method="POST" action="action/login_save.php">
				<h2 align="center" style="font-size:60px;">Welcome back!</h2><br>
			<h4 >Let us get you started from where you left off.</h4>
				<h2 align="center">Login to your account</h2>
				<input  type="text" placeholder="Email" id="email" name="email" class="form-control" style="width:40%">
				<input type="password" placeholder="Password" id="password" name="password" class="form-control" style="width:40%">
				<br> <button class="btn btn-danger" name="login" onclick="return validateMyForm();"> LOGIN</button>&nbsp&nbsp
				 Not a member? <a href="signup.php">Sign up</a><br>
			</form>



	</center>	
</div>    			

<!--footer-->
<?php include 'resource/footer.php' ;?>