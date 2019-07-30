<?php include 'resource/common.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Setting - ShopBound</title> 
  <!---- External css file --> 
  <link href="style/setting.css" rel="stylesheet" type="text/css"/>
<?php include 'resource/framework.php' ?>
	<style type="text/css">
    footer{
  font-family: 'Josefin Sans', sans-serif;
  background-color: #000; 
  color:#fff; 
  font-size:14px;
  text-align: center;
  margin-top: 74px;
}

	</style>
</head>
<body>
<!-- header -->
<?php include 'resource/header.php' ?>
<div class="container-x ">
   <nav aria-label="breadcrumb" style="background: rgba(0,0,0,0.5);">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="account.php">Account</a></li>
    <li class="breadcrumb-item active" aria-current="page">Change Details</li>
  </ol>
</nav>
  <div class="row">
    <div class="col-lg-4 col-md 4"></div>
    <div class="col-lg-4 col-md 4">
      <form class="form-group" method="POST" action="action/setting_save.php">
       Name<input  type="text" placeholder="Name" name="name" class="form-control" value="<?php echo($_SESSION['name']);?>" required>
       Email<input type="text" placeholder="Email" name="email" class="form-control" value="<?php echo($_SESSION['email']);?>" required>
       Contact<input type="text" name="phone" class="form-control" placeholder="Contact Number" value="<?php echo($_SESSION['contact']);?>" required>
        City<input type="text" name="city" class="form-control" placeholder="City" value="<?php echo($_SESSION['city']);?>" required>
        Address<textarea placeholder="Address" name="address" class="form-control"  required><?php echo($_SESSION['address']);?></textarea>
        <center>
         <button class="btn btn-danger" style="margin-top:10px;"> update</button>
         </center>
      </form>
      </div>
    <div class="col-lg-4 col-md-4 " ></div>  
  </div>
</div> 

<!--footer-->
<?php include 'resource/footer.php' ;

?>

