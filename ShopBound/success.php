<?php include 'resource/common.php';
$id=$_SESSION['id'];
$sql="UPDATE user_items SET status='cofirmed' WHERE user_id='$id' and status='Added to cart';";
$result= mysqli_query($conn,$sql) or die(mysqli_error($conn));
if($result){
?>
<!DOCTYPE html>
<html>
<head>


	<title>Successful order</title> 
  <!---- External css file --> 
  <link href="style/success.css" rel="stylesheet" type="text/css"/>
	<?php include 'resource/framework.php'; ?>
	

</head>
<body>

<!-- header -->
<?php include 'resource/header.php'; ?>

<!--success message-->
<div class="text-center" style="font-family: 'Josefin Sans', sans-serif; margin-top:100px">
<h2 align="center" style="font-size:60px;">Order placed successfully!</h2><br>
      <h4 >Your order has been confirmed and will be delivered soon!</h4>
        <h2 align="center"><a href="men_product	.php" style="  text-decoration: none;"><button class="btn btn-warning">Continue shopping</button></a></h2>
</div>
<!--footer-->

<?php include 'resource/footer.php';

}
 ?>
