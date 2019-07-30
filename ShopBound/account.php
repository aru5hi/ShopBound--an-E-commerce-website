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
	.col-lg-3{
		border:1px solid grey;
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
	  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Account</li>
  </ol>
</nav>

	<div class="row">
		<div class="col-lg-3 border-0"></div>
		<div class="col-lg-3 border-left-0 border-right-0 font-weight-bold">User name:</div>
		<div class="col-lg-3 border-left-0 border-right-0"><?php echo($_SESSION['name']) ?></div>
		<div class="col-lg-3 border-0"></div>
	</div>
	<div class="row">
		<div class="col-lg-3 border-0"></div>
		<div class="col-lg-3 border-left-0 border-right-0 font-weight-bold">Email:</div>
		<div class="col-lg-3 border-left-0 border-right-0"><?php echo($_SESSION['email']) ?></div>
		<div class="col-lg-3 border-0"></div>
	</div>
	<div class="row">
		<div class="col-lg-3 border-0"></div>
		<div class="col-lg-3 border-left-0 border-right-0 font-weight-bold">Contact:</div>
		<div class="col-lg-3 border-left-0 border-right-0"><?php echo($_SESSION['contact']) ?></div>
		<div class="col-lg-3 border-0"></div>
	</div>
	<div class="row">
		<div class="col-lg-3 border-0"></div>
		<div class="col-lg-3 border-left-0 border-right-0 font-weight-bold">Address:</div>
		<div class="col-lg-3 border-left-0 border-right-0"><?php echo($_SESSION['address']) ?></div>
		<div class="col-lg-3 border-0"></div>
	</div>
</div>
<center>
	<a href="setting.php"><button class="btn btn-danger">Edit Details</button></a>
	<a href="update_pass.php"><button class="btn btn-danger">Change Password</button></a>
</center>
<?php include 'resource/footer.php' ?>