<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
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
            <a href="home.php" class="navbar-brand mr-auto"><img src="img/logo.png" height="30" width="41" alt="Con Fusion"></a>
            <div class="collapse navbar-collapse" id="nb">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="home.php" class="nav-link"><span class="fa fa-home fa-lg"></span> Home</a></li>
                    <li class="nav-item active"><a href="#" class="nav-link"><span class="fa fa-info fa-lg"></span> About</a></li>
                    <li class="nav-item"><a href="contactus.php" class="nav-link"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
                </ul>
            </div>  
            <a class="navbar-text" href="logout.php"><i class="fa fa-sign-out"></i> Log out</a>
        </div>
    </nav>

    <div class="container"> 
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item active">About Us</li>
            </ol>
            <div class="col-12">
               <h3>About Us</h3>
               <hr>
            </div>
        </div>

        <div class="row row-content">
            <div class="col-12 col-sm-6">
                <h2>Our History</h2>
                <p>Started in 2010, Ristorante con Fusion quickly established itself as a culinary icon par excellence in Hong Kong. With its unique brand of world fusion cuisine that can be found nowhere else, it enjoys patronage from the A-list clientele in Hong Kong.  Featuring four of the best three-star Michelin chefs in the world, you never know what will arrive on your plate the next time you visit us.</p>
                <p>The restaurant traces its humble beginnings to <em>The Frying Pan</em>, a successful chain started by our CEO, Mr. Peter Pan, that featured for the first time the world's best cuisines in a pan.</p>
            </div>
            <div class="col-sm">
                <div class="card">
                    <h3 class="card-header bg-primary text-white">Facts At a Glance</h3>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-6">Started</dt>
                            <dd class="col-6">3 Feb. 2017</dd>
                            <dt class="col-6">Major Stake Holder</dt>
                            <dd class="col-6">KFC Inc.</dd>
                            <dt class="col-6">Last Year's Turnover</dt>
                            <dd class="col-6">$2,225,744</dd>
                            <dt class="col-6">Employees</dt>
                            <dd class="col-6">50</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-body bg-light">
                    <blockquote class="blockquote">
                        <p class="mb-0">You better cut the pizza in four pieces because I'm not hungry enough to eat six</p>
                        <footer class="blockquote-footer">Yogi Berra,
                            <cite title="Source Title">
                                The Wit and Wisdom of Yogi Berra,
                                P. Pepe, Diversion Books, 2014
                            </cite>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
