<?php
include '../resource/common.php';

$old_pass=$_POST['oldpass'];
$newpass=$_POST['newpass'];
$opass=md5(md5($old_pass));
$npass=md5(md5($newpass));
$id=$_SESSION['id'];
$sql="Select password from users where id='$id';";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
$password=mysqli_fetch_array($result);
if($opass!=$password['password']){
	?>
	<html>
<head>
<link rel="stylesheet" type="text/css" href="../style/login.css">
<?php		include("../resource/framework.php");
		include("../resource/header.php");
		echo("<p style='color:red; margin:100px'>Incorrect password. Redirecting back... </p>"); ?>
<meta http-equiv="refresh" content="3;url=http://localhost/update_pass.php">
</head>

</html>
	<?php
}
else if($opass==$password['password']){
	$update="UPDATE users set password='$npass' WHERE id='$id';";
	$run=mysqli_query($conn,$update) or die(mysqli_error($conn));
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../style/login.css">
<?php		include("../resource/framework.php");
		include("../resource/header.php");
		echo("<p style='color:green; margin:100px ; font-weight:bold; font-family: 'Josefin Sans', sans-serif;'>Password changed successfully. </p>"); ?>
<meta http-equiv="refresh" content="3;url=http://localhost/account.php">
</head>

</html>
<?php
}

?>