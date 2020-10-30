<?php 
session_start();
if(!isset($_SESSION['user_id'])){
   
    header('Location: login.php?Message='.urldecode('you are not logged in.'));
    exit;
}
if (isset($_GET['Message'])) {
    print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="css/home.css">
</head>
<body>
	<nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nb">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="#" class="navbar-brand mr-auto"><img src="img/logo.png" height="30" width="41" alt="Con Fusion"></a>
            <div class="collapse navbar-collapse" id="nb">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a href="#" class="nav-link"><span class="fa fa-home fa-lg"></span> Home</a></li>
                    <li class="nav-item"><a href="aboutus.php" class="nav-link"><span class="fa fa-info fa-lg"></span> About</a></li>
                    <li class="nav-item"><a href="contactus.php" class="nav-link"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
                </ul>
            </div> 
            <a class="navbar-text" href="logout.php"><i class="fa fa-sign-out"></i> Log out</a>
        </div>
    </nav>
    <header>
        <h1>Restorante Con Fusion</h1>
    </header>
    
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
