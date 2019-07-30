<?php
include '../resource/common.php';
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	$pass=md5(md5($password));

	$sql="Select * from users where email='$email'";
	$result=mysqli_query($conn,$sql);
	if(!$result){
		echo("No such user exists! <a href='localhost/login.php'>Go Back</a>.");
	}
	$row=mysqli_fetch_array($result);
	if($row['password']==$pass && $row['email']==$email){
		$_SESSION['logged']=true;
		$_SESSION['id']=$row['id'];
		$_SESSION['name']=$row['name'];
		$_SESSION['email']=$row['email'];
		$_SESSION['contact']=$row['contact'];
		$_SESSION['address']=$row['address'];
		$_SESSION['city']=$row['city'];
		
		header('location:../index.php');
	}
	else if($row['password']!=$pass || $row['email']!=$email){

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../style/login.css">
<?php		include("../resource/framework.php");
		include("../resource/header.php");
		echo("<p style='color:red; margin:100px'>Invalid email or password. Try Again. Redirecting back... </p>"); ?>
<meta http-equiv="refresh" content="3;url=http://localhost/login.php">
</head>

</html>
<?php
 } ?>