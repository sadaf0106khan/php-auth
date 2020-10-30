<?php
//register.php
//FOR ADDING USER

require 'mail.php';
require 'connect.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
    $user_id=$_SERVER["REQUEST_TIME"];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $token=md5(uniqid());
    $expiry=$user_id+900;
    $sql2 = "SELECT * FROM user WHERE email='$email'";
    $result=$conn->query($sql2);

    if ($result->num_rows >0) {	
		header('Location: register.php?Message=' . urlencode('Email already registered!'));
    }
    else{
        $sql = "INSERT INTO user (user_id,name,email,password)
        VALUES ('$user_id','$name','$email','$password')";
        $sql1 = "INSERT INTO token (token_id,token,user_id,expiry)
        VALUES('$user_id','$token','$user_id','$expiry')";
        $mail->addAddress($email,$name);
        $mail->Body = 'click on the link to verify your email: http://'.$_SERVER['SERVER_ADDR'].'/confirm.php?token='.$token;
        if ($conn->query($sql) && $conn->query($sql1)=== TRUE) {
            if(!$mail->send()){
                print '<script type="text/javascript">alert("Oops! unreachable email address or mail server down!!");</script>';
                echo('Mailer err :'.$mail->ErrorInfo);    
                echo($mail->Body);
            }
            else{
                print '<script type="text/javascript">alert("An email has been sent to you to confirm your email address!!");</script>';
            }
        
        } else {
        print '<script type="text/javascript">alert("oops! something went wrong");</script>';
        }
    }
}
$conn->close();
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
                        <i class="fa fa-user "></i>
                    </div>
                    <div>
                        <h5>Name</h5>
                        <input class="input" type="text" name="name" id="">
                    </div>
                </div>
                <div class="input-div">
                    <div class="i">
                        <i class="fa fa-envelope "></i>
                    </div>
                    <div>
                        <h5>Email</h5>
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
                <input type="submit" class="btn" value="Register" >
            </form>
        </div>
    </div>
    <script src="js/login.js"></script>
</body>
</html>
