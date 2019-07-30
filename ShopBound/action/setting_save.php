<?php 
include "../resource/common.php";
 $name=mysqli_real_escape_string($conn,$_POST['name']);
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $contact=mysqli_real_escape_string($conn,$_POST['phone']);
  $city=mysqli_real_escape_string($conn,$_POST['city']);
  $address=mysqli_real_escape_string($conn,$_POST['address']);
  $id=$_SESSION['id'];
  if($name && $email && $contact && $city && $address){
  $sql="UPDATE users set name='$name', email='$email', contact='$contact', city='$city', address='$address' WHERE id='$id';";
  $result=mysqli_query($conn,$sql) or die("error occurred".mysqli_error($conn));
    $_SESSION['name']=$name;
    $_SESSION['email']=$email;
    $_SESSION['contact']=$contact;
    $_SESSION['address']=$address;
    $_SESSION['city']=$city;
  header('location:../account.php');}
  else{
    
    include "../resource/framework.php";
    include "../resource/header.php";
    echo("<p style='color:red;'> Please enter all the credentials</p>");
    ?>
<meta http-equiv="refresh" content="4;url=http://localhost/setting.php">
    <?php
    include "../resource/footer.php";
  }
    ?>