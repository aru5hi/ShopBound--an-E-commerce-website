<?php
	include '../resource/common.php';
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$contact=mysqli_real_escape_string($conn,$_POST['phone']);
	$city=mysqli_real_escape_string($conn,$_POST['city']);
	$address=mysqli_real_escape_string($conn,$_POST['address']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	$pass=md5(md5($password));
	$check="SELECT email FROM users";
	$res=mysqli_query($conn,$check) or die(mysqli_error($conn));
		while($row=mysqli_fetch_array($res)){

			if($row['email']==$email){

				?>
				<html>
<head>
<link rel="stylesheet" type="text/css" href="../style/login.css">
<?php		include("../resource/framework.php");
		include("../resource/header.php");
		echo("<p style='color:red; margin:100px'>Sorry. An account for this email already exists. Use a different email ID. Redirecting back... </p>"); ?>
<meta http-equiv="refresh" content="3;url=http://localhost/signup.php">
</head>

</html>
				<?php
			die();
			}
			
		}
	$sql="INSERT INTO users(name,email,password,contact,city,address) VALUES('$name','$email','$pass','$contact','$city','$address');";
	$result=mysqli_query($conn,$sql);
	if(!$result){
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../style/login.css">
<?php		include("../resource/framework.php");
		include("../resource/header.php");
		echo("<p style='color:red; margin:100px'>Sorry, an error occured. Try again. Redirecting back... </p>".mysqli_error($conn)); ?>
<meta http-equiv="refresh" content="4;url=http://localhost/signup.php">
</head>

</html>
<?php
 } ?>
	<?php
	if($result){
		$sql1="SELECT id from users where email='$email' and password='$pass';";
		$check=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
		$row=mysqli_fetch_array($check);
		$_SESSION['id']=$row['id'];
		$_SESSION['logged']=true;
		$_SESSION['name']=$name;
		$_SESSION['email']=$email;
		$_SESSION['contact']=$contact;
		$_SESSION['address']=$address;
		$_SESSION['city']=$city;
		// $subject="Welcome to ShopBound";
		// $message="Hello $name!<br> You have been registered in the ShopBound website. <br> REGARDS,<br>Team SHopBound";
		// mail($email,$subject,$message);
		header('location:../index.php');
	}
?>