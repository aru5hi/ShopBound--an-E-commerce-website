<?php 
function check_added($item_id,$conn){
	$user_id=$_SESSION['id'];
	$sql="SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart';";
	$result=mysqli_query($conn, $sql) or die(mysqli_error($conn));
	if($result){
		$row=mysqli_fetch_array($result);
		if($row['status']=="Added to cart"){
			return true;
		}
		else return false;
	}
}
?>