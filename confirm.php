<?php
//FOR LOGIN
require 'connect.php';


$token=$_GET['token'];
$sql = "SELECT * FROM token WHERE token='$token'";
$result=$conn->query($sql);

if ($result->num_rows >0) {
	$row=mysqli_fetch_assoc($result);
	if($_SERVER['REQUEST_TIME'] <= $row['expiry']){
		$user_id=$row['user_id'];
		$update = "UPDATE user SET verified=true WHERE user_id='$user_id'";
		$delete = "DELETE FROM token WHERE token_id='$user_id'";
		if($conn->query($update)===TRUE && $conn->query($delete) === TRUE){
			header('Location: login.php?Message=' . urlencode('Congratulations! Registration confirmed!'));
		}else{
			header('Location: register.php?Message=' . urlencode('oops! something went wrong'));
		}
		
	}
	else 
	{ header("Location: register.php?Message=" . urlencode('token expired.'));}
}
else {
    header("Location: register.php?Message=" . urlencode('invalid token.'));
}
mysqli_free_result($result);
$conn->close();
?>
