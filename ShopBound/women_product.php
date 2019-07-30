<?php include 'resource/common.php';?>
<!DOCTYPE html>
<html>
<head>

	<title>Products - ShopBound</title> 
  <!---- External css file --> 
  <link href="style/products.css" rel="stylesheet" type="text/css"/>
	<?php include 'resource/framework.php'; ?>
	


</head>
<body>

<!-- header -->
<?php include 'resource/header.php'; ?>
<?php include 'action/check_if_added.php'; ?>
<div class="container">

<!--Intro Jumbotron-->
<div class="jumbotron" style="margin-top: 100px; font-family: 'Josefin Sans', sans-serif; background:url('http://www.livingcoloursamsterdam.com/media/catalog/category/banner_women.jpg');">
  <div class="text">
  <h1 class="display-4">For the goddess inside you</h1>
  <p class="lead">Get the best of fashion while sitting at home. Hassle free ordering and reasonable price just for you.</p>
  </div>
</div>
<!--PRODUCTS-->
<div class="products">
<div class="row">
  <!--row1-->
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img class="img-thumbnail" src="https://images.bewakoof.com/t540/be-beautiful-boyfriend-t-shirt-women-s-printed-boyfriend-t-shirts-215420-1556003954.jpg" alt="...">
  <div class="card-body">
    <h5 class="card-title">Be-you-tiful T-shirt</h5>
    <p class="card-text">Rs. 225</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(13,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=13&type=w" class="btn btn-dark" >Add to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img class="img-thumbnail" src="https://images.bewakoof.com/t540/striped-captain-america-boyfriend-t-shirt-avl-women-s-printed-boyfriend-t-shirts-215344-1555672771.jpg" alt="...">
  <div class="card-body">
    <h5 class="card-title">Captain America Tshirt</h5>
    <p class="card-text">Rs. 399</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(14,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=14&type=w" class="btn btn-dark" >Add to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img class="img-thumbnail"  src="https://images.bewakoof.com/t540/stop-reading-this-boyfriend-t-shirt-women-s-printed-boyfriend-t-shirts-222980-1562396104.jpg" alt="...">
  <div class="card-body">
    <h5 class="card-title">Stop reading T-Shirt</h5>
    <p class="card-text">Rs. 399</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(15,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=15&type=w" class="btn btn-dark" >Add to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img class="img-thumbnail" src="https://images.bewakoof.com/t540/shinchan-idk-idc-boyfriend-t-shirt-shl-women-s-printed-boyfriend-t-shirts-216748-1558074769.jpg" alt="...">
  <div class="card-body">
    <h5 class="card-title">IDK.IDC T-shirt</h5>
    <p class="card-text">Rs. 499</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(16,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=16&type=w" class="btn btn-dark" >Add to cart</a>
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
  <img class="img-thumbnail" src="https://images.bewakoof.com/t540/brick-red-flared-dress-women-s-plain-flared-dress-218329-1561698273.jpg" alt="...">
  <div class="card-body">
    <h5 class="card-title">Brick Red Flared Dress</h5>
    <p class="card-text">Rs. 499</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(17,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=17&type=w" class="btn btn-dark" >Add to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img class="img-thumbnail" src="https://assets.ajio.com/medias/sys_master/root/h0d/hb5/13403044249630/harpa_beige_shift_floral_print_shift_dress_with_sleeve_tie-ups.jpg" alt="...">
  <div class="card-body">
    <h5 class="card-title">Floral Print Shift Dress</h5>
    <p class="card-text">Rs. 449</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(18,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=18&type=w" class="btn btn-dark" >Add to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img src="https://images.bewakoof.com/t540/meteor-grey-flared-dress-women-s-plain-flared-dress-211956-1561789622.jpg" class="img-thumbnail" alt="...">
  <div class="card-body">
    <h5 class="card-title">Meteor Grey Dress</h5>
    <p class="card-text">Rs. 449</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(19,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=19&type=w" class="btn btn-dark" >Add to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img src="https://assets.ajio.com/medias/sys_master/root/h47/h53/13375606292510/the_vanca_pink_a-line_leaf_print_a-line_maxi_dress_.jpg" alt="..." class="img-thumbnail">
  <div class="card-body" >
    <h5 class="card-title">Leaf Print Dress</h5>
    <p class="card-text">Rs. 799</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(20,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=20&type=w" class="btn btn-dark" >Add to cart</a>
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
  <img class="img-thumbnail" src="https://images.bewakoof.com/t540/vintage-orange-crop-top-women-s-plain-cap-sleeve-crop-top-210031-1556009965.jpg" alt="...">
  <div class="card-body">
    <h5 class="card-title">Vintage Orange Croptop</h5>
    <p class="card-text">Rs. 499</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(21,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=21&type=w" class="btn btn-dark" >Add to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img class="img-thumbnail" src="https://images.bewakoof.com/t540/mustard-yellow-sweatshirt-women-s-plain-crewneck-sweatshirts-aw18-202677-1554206699.jpg" alt="...">
  <div class="card-body">
    <h5 class="card-title">Mustard yellow sweatshirt</h5>
    <p class="card-text">Rs. 399</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(22,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=22&type=w" class="btn btn-dark" >Add to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img class="img-thumbnail" src="https://images.bewakoof.com/t540/jet-black-scoop-neck-full-sleeve-t-shirt-women-s-plain-scoop-neck-full-sleeve-t-shirt-210590-1551176439.jpg" alt="...">
  <div class="card-body">
    <h5 class="card-title">Jet Black Full Sleeve T-Shirt</h5>
    <p class="card-text">Rs. 499</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(23,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=23&type=w" class="btn btn-dark" >Add to cart</a>
        <?php
      }
    }
  ?>
  </div>
</div>
</div>
  <div class="col-lg-3 col-md-3 col-sm-3"><div class="card" >
  <img class="img-thumbnail" src="https://images.bewakoof.com/t540/minimal-believe-scoop-neck-full-sleeve-t-shirt-women-s-printed-scoop-neck-full-sleeve-t-shirt-213809-1554184060.jpg" alt="...">
  <div class="card-body">
    <h5 class="card-title">Minimal Believe Full Sleeve T-Shirt</h5>
    <p class="card-text">Rs. 449</p>
    <?php 
      if(!isset($_SESSION['logged'])){
    ?>
    <a href="login.php" class="btn btn-dark" >Add to cart</a>
  <?php }
    else{
      if(check_added(24,$conn)){
        ?>
        <button class="btn btn-dark disabled" >Added to cart</button>
        <?php
      }
      else{
        ?>
        <a href="action/cart-add.php?id=24&type=w" class="btn btn-dark" >Add to cart</a>
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