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
    <script src="cart.js" async></script>
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
                    <a class="nav-link" href="games.php">Games</a>
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
            <div class="col-4 linkcont">
                <ul class="post-title">
                    <li><a href="#" class="post">XBOX</a></li>
                    <li><a href="#" class="post">PLAYSTATION</a></li>
                    <li><a href="#" class="post">BATTLE.NET</a></li>
                    <li><a href="#" class="post">STEAM</a></li>
                </ul>
                <hr>
                <h1 style="text-align: center;">CART</h1>
                <div class="cart-row">
                    <span class="cart-item cart-header cart-column">ITEM</span>
                    <span class="cart-price cart-header cart-column">PRICE</span>
                    <span class="cart-quantity cart-header cart-column">QUANTITY</span>
                </div>
                <div class="cart-items"></div>
                <div class="cart-total">
                    <strong class="cart-total-title">Total</strong>
                    <span class="cart-total-price">0 EUR</span>
                </div>
                <button class="btn btn-primary btn-purchase" type="button">Purchase</button>
            </div>

            <section class="container content-section col-8">
                <h2 class="section-header" id="xbox">Games</h2>
                <div class="shop-items">
                    <div class="shopt-item">
                        <?php
                        $query = 'SELECT * FROM `xbox`';
                        $xd = mysqli_query($con, $query);
                        while ($sor = mysqli_fetch_array($xd)) {

                            echo  "<div class='shop-item'>
                                <span class='shop-item-title'>" . $sor["Nev"] . "</span>
                                <img class='shop-item-image center' src='kepek/" . $sor["Kep"] . "'>
                                <div class='shop-item-details'>
                                        <span class='price-text'>Price: </span>
                                        <span class='shop-item-price'>" . $sor["Ar"] . "</span>
                                        <button class='btn btn-warning shop-item-button' type='submit' name='addtocart'>ADD TO CART</button>
                                    </div>
                                </div>
                                <input type='hidden' name='invisid' value=" . $sor["ID"] . ">";
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