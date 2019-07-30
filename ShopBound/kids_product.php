<?php include 'resource/common.php';?>
<!DOCTYPE html>
<html>
<head>

	<title>Products - ShopBound</title> 
  <link rel="stylesheet" type="text/css" href="style/products.css">
	<?php include 'resource/framework.php' ?>
	
	<style type="text/css">
		a{ 
	text-decoration: none;}
	</style>

</head>
<body>
 
<!-- header -->
<?php include 'resource/header.php' ?>
<?php include 'action/check_if_added.php' ?>
<!--jumbotron-->
<div class="container">

<!--Intro Jumbotron-->
<div class="jumbotron" style="margin-top: 100px; font-family: 'Josefin Sans', sans-serif; background:url('http://rhubarbrepublik.com/wp-content/uploads/2018/08/MOTORETA-950x400.jpg');">
  <div class="text">
  <h1 class="display-4">Let the kids fly high</h1>
  <p class="lead">Get the best of fashion while sitting at home. Hassle free ordering and reasonable price just for you.</p>
  </div>
</div>
<!--PRODUCTS-->
<div class="products">
<div class="row">
  <!--row1-->
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img class="img-thumbnail" src="https://cdn.fcglcdn.com/brainbees/images/products/438x531/2844911a.webp" alt="...">
  <div class="card-body">
    <h5 class="card-title">Magic-in-you Red T-shirt</h5>
    <p class="card-text">Rs. 499</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(25,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=25&type=k" class="btn btn-dark" >Added to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img class="img-thumbnail" src="https://cdn.fcglcdn.com/brainbees/images/products/438x531/2752193a.webp" alt="...">
  <div class="card-body">
    <h5 class="card-title">Babyoye Polo Neck Cotton T Shirt</h5>
    <p class="card-text">Rs. 499</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(26,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=26&type=k" class="btn btn-dark" >Added to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img class="img-thumbnail"  src="https://cdn.fcglcdn.com/brainbees/images/products/438x531/2845047a.webp" alt="...">
  <div class="card-body">
    <h5 class="card-title">Dad's man Full Sleeves T-Shirt</h5>
    <p class="card-text">Rs. 399</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(27,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=27&type=k" class="btn btn-dark" >Added to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img class="img-thumbnail" src="https://cdn.fcglcdn.com/brainbees/images/products/438x531/2886010a.webp" alt="...">
  <div class="card-body">
    <h5 class="card-title">No volume Control Full T-shirt</h5>
    <p class="card-text">Rs. 499</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(28,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=28&type=k" class="btn btn-dark" >Added to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
</div>
<div class="row">
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img class="img-thumbnail" src="https://cdn.fcglcdn.com/brainbees/images/products/438x531/2842560a.webp" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pink Floral print Girl's Frock</h5>
    <p class="card-text">Rs. 699</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(29,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=29&type=k" class="btn btn-dark" >Added to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img class="img-thumbnail" src="https://cdn.fcglcdn.com/brainbees/images/products/438x531/2726648a.webp" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pink Checks Shift Frocks</h5>
    <p class="card-text">Rs. 749</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(30,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=30&type=k" class="btn btn-dark" >Added to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
 </div>
</div>
</div>
<?php include 'resource/footer.php' ?>