<?php include 'resource/common.php';?>
<!DOCTYPE html>
<html>
<head>


	<title>Your Cart - ShopBound</title> 
  <!---- External css file --> 
  <link href="style/cart.css" rel="stylesheet" type="text/css"/>
	<?php include 'resource/framework.php' ?>
	
	<style type="text/css">
		a{ 
	text-decoration: none;}
  .card, .content{
    font-family: 'Josefin Sans', sans-serif;
    align-content: center;
  }
  .ff{
    margin-top:288px;
  }
	</style>

</head>
<body>

<!-- header -->

<?php include 'resource/header.php' ;
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
</div>
<br><br><br>  <br><br><br><br>
 

<?php
}

else if(isset($_SESSION['logged'])){
  $id=$_SESSION['id'];
  $sql="SELECT * from user_items, item where user_items.item_id=item.id and user_id='$id' and status='Added to cart';";
  $result=mysqli_query($conn, $sql) or die(mysqli_error($conn));
  ?>

  <!--item list-->
<div class="container" style="margin-top:110px;">
<div class="list">
 
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 "></div>
    <div class="col-lg-3 col-md-3 col-sm-3 font-weight-bold">Item name</div>
    <div class="col-lg-3 col-md-3 col-sm-3 font-weight-bold">Price</div>
    <div class="col-lg-3 col-md-3 col-sm-3"></div>
  </div>
  
  <?php
  if(mysqli_num_rows($result)==0){?> 


<div class="row">
  <span align="center" class="content"  style="font-size:20px; color:#ededed; margin-left:20px">Nothing added to the cart</span>
  </div>

  <?php } 
  else{
    $sum=0;
      while($row=mysqli_fetch_array($result)){
   ?>
  
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3"><img width=100 height=400 class="img-thumbnail" src="<?php echo($row['img']);?>">
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3"><?php echo($row['name']);$id=$row['item_id']; ?></div>
    <div class="col-lg-3 col-md-3 col-sm-3"><?php $sum=$sum+$row['price']; echo($row['price']);
                                                  $url="action/cart-remove.php?id=";                                   ?></div>
    <div class="col-lg-3 col-md-3 col-sm-3"><a href="<?php echo($url.$id); ?>" class="border-0" style="background:rgba(0,0,0,0);float:left"><i class="fas fa-times-circle text-danger"></i></a></div>
 </div>
<?php } ?>

   <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3"></div>
    <div class="col-lg-3 col-md-3 col-sm-3 text-right">Total&nbsp:</div>
    <div class="col-lg-3 col-md-3 col-sm-3"><?php echo $sum; ?></div>
    <div class="col-lg-3 col-md-3 col-sm-3"><a href="success.php" class="btn btn-primary" style="width:100%">Confirm</a></div>
  </div>

  <?php
}
  ?>
 
</div>
</div>
<br><br><br><br><br><br><br><br><br><br>

<!--footer-->
<?php 
}

?>

<?php include 'resource/footer.php';  ?>