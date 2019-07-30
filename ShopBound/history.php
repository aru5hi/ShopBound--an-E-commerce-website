<?php include 'resource/common.php';?>
<html>
<head>

	<title>User Details- ShopBound</title> 
  <!---- External css file --> 
  <link href="style/login.css" rel="stylesheet" type="text/css"/>
	<?php include 'resource/framework.php' ?>
<style type="text/css">
	.b{
		margin:100px 100px 10px 100px;
		font-size:18px;
		font-family: 'Josefin Sans', sans-serif;
	}
	hr{
		color:#ededed;
		padding:10px;
	}
	footer{
		margin-top:225px;
	}
	
</style>
</head>
<body>

<!-- header -->

<?php include 'resource/header.php' ?>
<div class="container b">
	<?php
		if(!isset($_SESSION['logged'])){
	?>
	<div class="container" style="margin-top:110px;">
<div class="card text-center">
  <div class="card-body">
    <h5 class="card-title">Login to your account or Sign up, to buy our products</h5>
    <a href="login.php" class="btn btn-primary">Login</a>&nbsp<a href="signup.php" class="btn btn-primary">Sign up</a>
  </div>
</div>
<h2 align="center" class="content"  style="font-size:60px; margin-top:62px; color:#ededed;">Nothing to show</h2>
</div><?php 
 include 'resource/footer.php' ;
die();

 } 
else{
?>
	  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">History</li>
  </ol>
</nav>

	<div class="row" style="margin-bottom: 20px; ">
		<div class="col-lg-3 border-left-0 border-right-0"></div>
		<div class="col-lg-3 border-left-0 border-right-0 font-weight-bold">Product name</div>
		<div class="col-lg-3 border-left-0 border-right-0 font-weight-bold">Price</div>
		<div class="col-lg-3 border-0"></div>
	</div>
	<hr>
<?php
$user_id=$_SESSION['id'];
$sql="SELECT * from user_items,item where user_items.item_id=item.id and user_id='$user_id' and status='cofirmed'; ";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
	$url=$row['img'];
?>
	<div class="row">
		<div class="col-lg-3 border-0"> <img width=150 height=450 class="img-thumbnail" src="<?php echo($url); ?>"></div>
		<div class="col-lg-3 border-left-0 border-right-0"><?php echo($row['name']); ?></div>
		<div class="col-lg-3 border-left-0 border-right-0"><?php echo($row['price']); ?></div>
		<div class="col-lg-3 border-0"></div>
	</div>
<hr>	

<?php }
}
 ?>
</div>

<?php include 'resource/footer.php' ?>