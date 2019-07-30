<?php include 'resource/common.php';?>
<!DOCTYPE html>
<html>
<head>

	<title>Products - ShopBound</title>
  <!---- External csss file --> 
  <link href="style/products.css" rel="stylesheet" type="text/css"/> 
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

<div class="container">
  <!--Intro Jumbotron-->
<div class="jumbotron" style="margin-top: 100px; font-family: 'Josefin Sans', sans-serif;">
  <div class="text">
  <h1 class="display-4">Welcome to the ShopBound store!</h1>
  <p class="lead">Get the best of fashion while sitting at home. Hassle free ordering and reasonable price just for you.</p>
  </div>
</div>
<!--PRODUCTS-->
<div class="products">
<div class="row">
  <!--row1-->
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img class="img-thumbnail" src="https://images.bewakoof.com/t540/indian-jersey-half-sleeve-t-shirt-men-s-printed-t-shirts-223021-1562567089.jpg" alt="...">
  <div class="card-body">
    <h5 class="card-title">India Half T-Shirt </h5>
    <p class="card-text">Rs. 199</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(1,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=1&type=m" class="btn btn-dark" >Add to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img class="img-thumbnail" src="https://images.bewakoof.com/t540/love-you-3000-half-sleeve-t-shirt-avl-men-s-printed-t-shirts-217381-1558335468.jpg" alt="...">
  <div class="card-body">
    <h5 class="card-title">3000 Black T-shirt</h5>
    <p class="card-text">Rs. 399</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(2,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=2&type=m" class="btn btn-dark" >Add to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img class="img-thumbnail"  src="https://images.bewakoof.com/t540/peek-out-half-sleeve-t-shirt-men-s-printed-t-shirts-211979-1552462834.jpg" alt="...">
  <div class="card-body">
    <h5 class="card-title">Peek Out Half T-Shirt</h5>
    <p class="card-text">Rs. 299</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(3,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=3&type=m" class="btn btn-dark" >Add to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img src="https://images.bewakoof.com/t540/i-am-your-dad-half-sleeve-t-shirt-men-s-printed-t-shirts-214809-1554704659.jpg" class="img-thumbnail" alt="...">
  <div class="card-body">
    <h5 class="card-title">I'm your dad T-shirt</h5>
    <p class="card-text">Rs. 499</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(4,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=4&type=m" class="btn btn-dark" >Add to cart</a>
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
  <img src="https://images.bewakoof.com/t540/gully-cricket-half-sleeve-t-shirt-men-s-printed-t-shirts-218318-1559648787.jpg" class="img-thumbnail" alt="...">
  <div class="card-body">
    <h5 class="card-title">Gully Cricket T-shirt</h5>
    <p class="card-text">Rs. 299</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(5,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=5&type=m" class="btn btn-dark" >Add to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img src="https://images.bewakoof.com/t540/busy-getting-board-half-sleeve-t-shirt-men-s-printed-t-shirts-222989-1562397727.jpg" class="img-thumbnail" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bored T-shirt</h5>
    <p class="card-text">Rs. 449</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(6,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=6&type=m" class="btn btn-dark" >Add to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img src="https://images.bewakoof.com/t540/war-god-half-sleeve-t-shirt-men-s-printed-t-shirts-216725-1557906199.jpg" class="img-thumbnail" alt="...">
  <div class="card-body">
    <h5 class="card-title">War God T-shirt</h5>
    <p class="card-text">Rs. 449</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(7,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=7&type=m" class="btn btn-dark" >Add to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img src="https://images.bewakoof.com/t540/beyond-limits-half-sleeve-t-shirt-men-s-printed-t-shirts-208645-1547621441.jpg" class="img-thumbnail" alt="...">
  <div class="card-body">
    <h5 class="card-title">Beyond Limits T-shirt</h5>
    <p class="card-text">Rs. 399</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else if(isset($_SESSION['logged'])){
      if(check_added(8,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=8&type=m" class="btn btn-dark" >Add to cart</a>
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
  <img src="https://images.bewakoof.com/t540/dj-aln-wkr-half-sleeve-t-shirt-men-s-printed-t-shirts-214829-1554789483.jpg" class="img-thumbnail" alt="...">
  <div class="card-body">
    <h5 class="card-title">Alan Walker T-shirt</h5>
    <p class="card-text">Rs. 499</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(9,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=9&type=m" class="btn btn-dark" >Add to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img src="https://images.bewakoof.com/t540/dream-big-sideways-half-sleeve-t-shirt-men-s-printed-t-shirts-218955-1560408736.jpg" class="img-thumbnail" alt="...">
  <div class="card-body">
    <h5 class="card-title">Dream big T-shirt</h5>
    <p class="card-text">Rs. 399</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(10,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=10&type=m" class="btn btn-dark" >Add to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img src="https://images.bewakoof.com/t540/the-mrsmlw-dj-half-sleeve-t-shirt-men-s-printed-t-shirts-222137-1561808498.jpg" class="img-thumbnail" alt="...">
  <div class="card-body">
    <h5 class="card-title"> Marshmellow T-shirt</h5>
    <p class="card-text">Rs. 499</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(11,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=11&type=m" class="btn btn-dark" >Add to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img src="https://images.bewakoof.com/t540/one-man-army-half-sleeve-t-shirt-men-s-printed-t-shirts-205702-1545221422.jpg" class="img-thumbnail" alt="...">
  <div class="card-body">
    <h5 class="card-title">One Man army T-shirt</h5>
    <p class="card-text">Rs. 449</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(12,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=12&type=m" class="btn btn-dark" >Add to cart</a>
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