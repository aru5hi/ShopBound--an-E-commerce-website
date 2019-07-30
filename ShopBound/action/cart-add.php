<?php
include '../resource/common.php';
$item_id=$_GET['id'];
$user_id=$_SESSION['id'];
$type=$_GET['type'];
$sql="INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
if($type=='m'){
header("location:../men_product.php");}
else if($type=='w'){
header("location:../women_product.php");}
else if($type=='k'){
header("location:../kids_product.php");}

?>