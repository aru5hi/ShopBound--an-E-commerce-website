<?php include 'resource/common.php';?>
<!DOCTYPE html>
<html>
<head>

	<title>ShopBound</title> 
	<!---- External css file --> 
	<link href="style/index.css" rel="stylesheet" type="text/css"/>
	<link href="style/carousel.css" rel="stylesheet" type="text/css"/>
	<?php include 'resource/framework.php';?>
</head>
<body>

<!-- header -->

<?php include 'resource/header.php'; ?>

<!-- carousel -->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <!--indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleControls" data-slide-to="1"></li>
        <li data-target="#carouselExampleControls" data-slide-to="2"></li>
        <li data-target="#carouselExampleControls" data-slide-to="3" class=""></li>
    </ol>
    <!--slide items-->
    <div class="carousel-inner">
        <!--item1-->
        <div class="carousel-item active">
            <img class="d-block w-100 h-100" src="http://www.propertyfine.com/ai-content/uploads/lv-shopping.jpg" alt="First slide" alt="First slide">
            <!--caption-->
            <div class="carousel-caption d-none d-md-block banner-content" id="item-1">
                <h1>Bound to shop for the season?</h1>
                <p>Sign up now to get 50% off</p>
                <a href="men_product.php"><button class="btn btn-danger"> Shop Now</button></a>
            </div>
        </div>
        <!--item2-->
        <div class="carousel-item">
            <img class="d-block w-100 h-100" src="https://i.pinimg.com/originals/c5/6e/14/c56e149fb128a6e1640b5c547024bdbf.jpg">
            <!--caption-->
            <div class="carousel-caption d-none d-md-block banner-content" id="item-2">
                <p style="font-size:80px; font-family: 'Pacifico', cursive;">Summer sale's here!</p>
                <h3>Get the best out of the summer season!</h3>
                <a href="women_product.php"><button class="btn btn-primary">SHOP NOW</button></a>
            </div>
        </div>
        <!--item3-->
        <div class="carousel-item">
            <img class="d-block w-100 h-100" src="https://png.pngtree.com/thumb_back/fw800/background/20190223/ourmid/pngtree-year-end-hot-sale-main-push-banner-background-sale-at-the-image_85178.jpg">
            <div class=" item3 carousel-caption d-none d-md-block banner-content" id="item-3">
                <p style="font-size:60px">Special Offer Zone</p>
                <h4 style="">Prices slashed to half</h4>
                <br><br><br>
                <button class="btn btn-dark" style="font-family:'Josefin Sans', sans-serif; "> KNOW MORE</button>
            </div>
        </div>
        <!--item4-->
        <div class="carousel-item">
            <img class="d-block w-100 h-100" src="https://ak4.picdn.net/shutterstock/videos/15564184/thumb/1.jpg">
            <!--caption-->
            <div class="carousel-caption d-none d-md-block banner-content" id="item-4">
                <h2 style="font-weight: bold;">Tired of walking in malls?</h2>
                <h4>Sign up now get the best of fashion, while sitting at home.</h4>
                <a href="signup.php"><button class="btn btn-dark">SIGN UP</button></a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- product grid -->
<div class="container-x">
	<div class="item">
		<a href="men_product.php">
			<img src="https://images.bewakoof.com/original/nahi-sudhrenge-full-sleeve-t-shirt-men-s-printed-full-sleeve-t-shirt-181797-1522308363.jpg" class="thumbnails">
			<div class="caption">
				<h2>Men</h2>
				<hr color="yellow">
				<p>Men apparel from the best brands</p>
			</div>
		</a>
	</div>

	<div class="item">
		<a href="women_product.php">
			<img src="https://images.bewakoof.com/t540/hum-nahi-sudhrenge-boyfriend-t-shirt-women-s-printed-boyfriend-t-shirts-146057-1521185154.jpg" class="thumbnails">
			<div class="caption">
				<h2>Women</h2>
				<hr color="yellow"> 
				<p>Exclusive brands with exclusive discount</p>
			</div>
		</a>
	</div>

	<div class="item">
		<a href="kids_product.php" >
			<img src="https://c.static-nike.com/a/images/t_PDP_1280_v1/f_auto/rocvxvhhnmx9hopltyxb/sportswear-older-t-shirt-BzvBJz.jpg" class="thumbnails">
			<div class="caption">
				<h2>Kids</h2>
				<hr color="yellow">
				<p>Apparel for kids from 1 to 15</p>
			</div>
		</a>
	</div>
</div>
<!--footer-->
<?php include 'resource/footer.php' ?>