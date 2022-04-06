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
    <script src="cart.js"></script>
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
                    <a class="nav-link" aria-current="page" href="mainpage.php">Home</a>
                    <a class="nav-link active" href="games.php">Games</a>
                    <a class="nav-link" href="privacy.html">Privacy Policy</a>
                    <a class="nav-link" href="aboutus.html">About Us</a>
                    <a class="nav-link" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <!---CONTAINER--->
    <div class="container">
        <!---HEADER--->
        <div class="row headerxd">
            <p style="text-align: right; font-size: 25pt; color:white;">Logged in as: <?php echo $user_data['username']; ?></p>
        </div>
        <!---CONTENT--->
        <div class="row content">
            <div class="col-4 linkcont">
                <ul class="post-title">
                    <li><a href="games.php" class="post">XBOX</a></li>
                    <li><a href="playstation.php" class="post">PLAYSTATION</a></li>
                    <li><a href="battlenet.php" class="post">BATTLE.NET</a></li>
                    <li><a href="steam.php" class="post active">STEAM</a></li>
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
                <button class="btn btn-primary btn-purchase" onclick="localStorage.setItem('shouldpurchase',true);window.location.href = window.location.href" type="button">Purchase</button>
            </div>

            <section class="container content-section col-8">
                <h2 class="section-header" id="xbox">Games</h2>
                <div class="shop-items">
                    <div class="shopt-item">
                        <?php
                        $query = 'SELECT * FROM `steam`';
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

        <!-- MODAL -->
        <div class="modal fade" tabindex="-1" id="purchaseModal">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title title-font" id="exampleModalLabel">Your Items</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <table class="table">
                <thead>
                    <tr>
                        <th class="big-font" scope="col">Title</th>
                        <th class="big-font" scope="col">Price</th>
                        <th class="big-font" scope="col">Key</th>
                    </tr>
                  </thead>
                  <tbody id="purchaseContent">

                  </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <p class="small-font">TOTAL: <span id="sumprice"></span></p>
              <button type="button" class="btn btn-secondary big-btn" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary big-btn">Finalize Purchase</button>
            </div>
          </div>
        </div>
      </div>

        <!---FOOTER--->
        <div class="row footer">
            <div class="col-3 linkcont">

            </div>
            <div class="col-4 copyright">
                PUBLISHER: STEAM <img src="kepek/steamlogo.png" class="small-img" alt="Microsoft corp">
            </div>
            <div class="col-5 copyright">
                © 2022 Nadoba, Inc. All rights reserved 6775 Kiszombor Petőfi utca 21.
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        finalizePurchase();
    </script>
</body>

</html>