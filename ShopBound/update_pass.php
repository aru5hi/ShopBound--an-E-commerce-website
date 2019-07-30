<?php include 'resource/common.php';?>
<!DOCTYPE html>
<html>
<head>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

	<title>Setting - ShopBound</title> 
  <!---- External css file --> 
  <link href="style/setting.css" rel="stylesheet" type="text/css"/>
<?php include 'resource/framework.php' ?>
	
	<style type="text/css">
		a{ 
	text-decoration: none;}
  footer{
  font-family: 'Josefin Sans', sans-serif;
  background-color: #000; 
  color:#fff; 
  font-size:14px;
  text-align: center;
  margin-top: 138px;
}

	</style>
<script type="text/javascript">


    function validateMyForm()
{ var o=document.getElementById('old').value;
  var x=document.getElementById('password').value;
  var y=document.getElementById('confirm_password').value;
    

    if(!o){
       alert("Please enter original password");
       return false;
    }
    else if(!x){
      alert("Please enter the new password");
      return false;
    }
    else if(!y){
      alert("Please confirm the new password");
      return false;
    }
    else if(x && y && o){
   if(x!=y)
  { 
    alert("Passwords don't match");
    return false;
  }
  else if(o==x){
    alert("Enter a different password");
    return false;

  }
}
}

   
  </script>
</head>
<body>

<!-- header -->
<?php include 'resource/header.php' ?>
<div class="container-x ">
  <nav aria-label="breadcrumb" style="background: rgba(0,0,0,0.5);">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="account.php">Account</a></li>
    <li class="breadcrumb-item active" aria-current="page">Change Password</li>
  </ol>
</nav>
<center>

      <form class="form-group" method="POST" action="action/update_pass.php">
      
 <h2 >Change your password</h2>
      <input  type="password" placeholder="Old Password" name="oldpass" id="old" class="form-control" style="width:40%"><br>
        <input  type="password" placeholder="New Password" name="newpass" id="password" class="form-control" style="width:40%"><br>
        <input type="password" placeholder="Confirm Password" id="confirm_password" class="form-control" style="width:40%"><br>
        <p style="padding:4px; text-align: center; font-weight:bold; width:25%;" class="rounded" id="message"></p>
        <br> <button class="btn btn-danger" onclick="return validateMyForm();" id="submit"> Change</button><br>
     
      </form>
  </center> 
</div>  

<!--footer-->

<?php include 'resource/footer.php' ?></div>