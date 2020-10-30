<?php
//FOR LOGIN
session_start();
require 'connect.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
$email=$_POST['email'];
$password=$_POST['password'];
$sql = "SELECT * FROM user WHERE email='$email' and verified=1";
$result=$conn->query($sql);

if ($result->num_rows >0) {
	$row=mysqli_fetch_assoc($result);
	if($password == $row['password']){
		$_SESSION['user_id'] = $row['user_id'];
    	$_SESSION['name'] = $row['name'];
		header('Location: home.php?Message=' . urlencode('Congratulations! You are logged in!'));
	}
	else 
	{ header("Location: login.php?Message=" . urlencode('incorrect password.'));}
}
else {
    header("Location: login.php?Message=" . urlencode('user id does not exist.'));
}

   // header('Location: ' . $_SERVER['HTTP_REFERER']);
mysqli_free_result($result);
$conn->close();
}
if (isset($_GET['Message'])) {
    print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
</head>

<body> 
    <div class="container">
        <div class="img">
            <img src="images/secure_login.svg" alt="">
        </div>
        <div class="login-container">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <img class="avatar" src="images/profile_pic.svg" alt="">
                <h2>Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fa fa-envelope "></i>
                    </div>
                    <div>
                        <h5>Username</h5>
                        <input class="input" type="text" name="email" id="">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fa fa-lock "></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                       <input class="input" type="password" name="password" id="">
                    </div>
                </div>
                <a href="">Forget password?</a>
                <input type="submit" class="btn" value="Login" >
            </form>
        </div>
    </div>
    <script src="js/login.js"></script>
</body>
</html>
