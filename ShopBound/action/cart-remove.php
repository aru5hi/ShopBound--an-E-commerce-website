<?php 
	include '../resource/common.php';

	$item_id=$_GET['id'];
	$user_id=$_SESSION['id'];
	$sql="DELETE FROM user_items  WHERE item_id='$item_id' and user_id='$user_id';";
	$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	header("location:../cart.php");
?>