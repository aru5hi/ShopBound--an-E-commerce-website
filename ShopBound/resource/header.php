<div class="container" style="margin-top: 60px;">
<nav class=" navbar navbar-expand-lg navbar-dark fixed-top scrolled" id="header">
  <div class="container">
  <a class="navbar-brand" id="logo" href="index.php">ShopBound</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   
    <ul class="navbar-nav mr-auto" >
    	<li class="nav-item " >
        <a class="nav-link" style="margin-left:20px" href="index.php">HOME</a>
      	</li>
        <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PRODUCTS
        </a>
        <div class="dropdown-menu" id="drop1" aria-labelledby="navbarDropdown" style="background: rgba(0,0,0,0.5);">
          <a class="dropdown-item" href="men_product.php">MEN</a>
          <a class="dropdown-item" href="women_product.php">WOMEN</a>
          <a class="dropdown-item" href="kids_product.php">KIDS</a>
        </div>
      </li>
    	
   </ul>
   <ul class="navbar-nav ml-auto">
     <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="far fa-user-circle"></i><?php if (isset($_SESSION['logged'])) { echo("&nbsp&nbspWELCOME,&nbsp".$_SESSION['name']);}
          else{echo("");}
            ?>
          
        </a>
        <div class="dropdown-menu" id="drop" aria-labelledby="navbarDropdown" style="background: rgba(0,0,0,0.5);">
          <?php if (isset($_SESSION['logged'])) {?>
          <a class="dropdown-item" href="account.php">MY ACCOUNT</a>
          <a class="dropdown-item" href="history.php">ACCOUNT HISTORY</a>
           <form method="post" action="resource/logout.php"> <button style="background:0,0,0,0; color:white;" class="border-0 dropdown-item" >LOGOUT</button></form>
         <?php } 
              else{
         ?>

          <a class="dropdown-item" href="login.php">LOGIN</a>
          <a class="dropdown-item" href="signup.php">SIGN UP</a>
        <?php } ?>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
      </li>

   </ul>
  </div>
  </div>
</nav>
</div>