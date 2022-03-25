<?php
session_start();

include("kapcs.php");
include("functions.php");

dbkapcs();


$user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainpage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Main page</title>
</head>

<body>
    <!---NAVBAR--->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="mainpage.php"><img src="kepek/favicon.ico" class="logo-image" alt="Icon"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav nav-fill w-100">
                    <a class="nav-link active" aria-current="page" href="mainpage.php">Home</a>
                    <a class="nav-link" href="#">Games</a>
                    <a class="nav-link" href="#">Privacy Policy</a>
                    <a class="nav-link" href="#">CART</a>
                    <a class="nav-link" href="#">About Us</a>
                    <a class="nav-link" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <!---CONTAINER--->
    <div class="container">
        <!---HEADER--->
        <div class="row headerxd">
            <p style="text-align: right; font-size: 25pt; color:white;">Welcome, <?php echo $user_data['username']; ?></p>
        </div>
        <!---CONTENT--->
        <div class="row content">
            <div class="col-3 linkcont">
                <ul class="post-title">
                    <li><a href="#" class="post">XBOX</a></li>
                    <li><a href="#" class="post">PLAYSTATION</a></li>
                    <li><a href="#" class="post">BATTLE.NET</a></li>
                    <li><a href="#" class="post">STEAM</a></li>
                </ul>
                <hr>
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2762.162802296226!2d20.41502241558182!3d46.18731887911618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4744f434aaa55699%3A0xb10c72b4df8797c8!2sKiszombor%2C%20Pet%C5%91fi%20u.%2021%2C%206775!5e0!3m2!1shu!2shu!4v1646995037250!5m2!1shu!2shu" width="300" height="300" style="border:1;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

            <section class="container content-section col-9">
                <h2 class="section-header" id="xbox">Games</h2>
                <div class="shop-items">
                    <div class="shopt-item">
                        <?php
                        $query = 'SELECT * FROM `xbox`';
                        $xd = mysqli_query($con, $query);
                        while ($sor = mysqli_fetch_array($xd)) {


                            echo  "<form action='' method='POST'><div class='shop-item'>
                                <span class='shop-item-title'>" . $sor["Nev"] . "</span>
                                <img class='shop-item-image center' src='kepek/" . $sor["Kep"] . "'>
                                <div class='shop-item-details'>
						
                                        <span class='shop-item-price'>Price: " . $sor["Ar"] . "</span>
                                        <button class='btn btn-warning' type='submit' name='addtocart'>ADD TO CART</button>
                                    </div>
                                </div>
                                <input type='hidden' name='invisid' value=" . $sor["ID"] . "></form>";
                        }
                        ?>
                    </div>
                </div>
            </section>

        </div>
        <!---FOOTER--->
        <div class="row footer">
            <div class="col-3 linkcont">

            </div>
            <div class="col-4 copyright">
                PUBLISHER: MICROSOFT CORPORATION <img src="kepek/microsoft.png" class="small-img" alt="Microsoft corp">
            </div>
            <div class="col-5 copyright">
                © 2022 Nadoba, Inc. All rights reserved 6775 Kiszombor Petőfi utca 21.
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>