<?php include 'resource/common.php';
if(isset($_SESSION['logged'])){

  header('Location:index.php');
  die();
}
?>
<html>
<head>

	<title>Sign Up - ShopBound</title> 
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <link href="style/signup.css" rel="stylesheet" type="text/css"/>

	<?php include 'resource/framework.php' ?>
	<style type="text/css">
		a{ 
	text-decoration: none;}
	</style>
  <script type="text/javascript">
  	
function returnToPreviousPage() {
    window.history.back();
}

  	function validateMyForm()
{
	var x=document.getElementById('password').value;
	var y=document.getElementById('confirm_password').value;
	 if(x!=y)
  { 
    alert("Passwords don't match");
    return false;
  }
}

  </script>
</head>
<body>

<!-- header -->
<?php include 'resource/header.php' ?>

<div class="cls-spinner d-none" style="margin-left:600px; margin-top:300px;" id="loader">
  <div class="cls-circle cls-spin"></div>
</div>
<!--sign up form-->
<div class="container-x">	

	<div class="row">
		<div class="col-lg-6 col-md-6 text-center">
			<span class="text-center"><p  style="font-size:60px;">Hi ,Welcome to the Shopper's Heaven.</p><br>
			<h4 style="margin-left:50px;" >Not a member of ShopBound family yet? <br>Sign up to our website and exercise special benefits, coupons and deals!</h4>
			</span>
		</div>
		<div class="col-lg-6 col-md-6">
			<form class="form-group" method="POST" action="action/signup_save.php">
				<h2 align="center">Create a new account</h2>
				<p align="center">It's free and always will be.</p>
				<input  type="text" placeholder="Name" name="name" class="form-control" required>
				<input type="text" placeholder="Email" name="email" class="form-control" required>
				<input type="text" name="phone" class="form-control" placeholder="Contact Number" required>
				<input type="text" name="city" class="form-control" placeholder="City" required>
				<textarea placeholder="Address" name="address" class="form-control" required></textarea><br>
				<input type="password" placeholder="Password" name="password" id="password" class="form-control"  required>
				<input type="password" placeholder="Confirm Password" name="conf-pass" id="confirm_password" class="form-control" required><p style="padding:4px; text-align: center; font-weight:bold;" class="rounded" id="message"></p>
				 
				 <button class="btn btn-danger" id='submit' onclick="return validateMyForm();"> Sign Up</button>&nbsp&nbsp
				 Already a member? <a href="login.php">Log in</a>
			</form>
		</div>
	</div>
</div><!--footer-->
<?php include 'resource/footer.php' ?>
