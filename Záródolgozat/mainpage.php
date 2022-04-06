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
                    <a class="nav-link active" aria-current="page" href="mainpage.php">Home</a>
                    <a class="nav-link" href="games.php">Games</a>
                    <a class="nav-link" href="#">Privacy Policy</a>
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
            <p style="text-align: center; font-size: 4rem; color:purple; margin-top:5rem; animation: transitionIn 1s;">Welcome, <?php echo $user_data['username']; ?> !</p>
        </div>
        <!---CONTENT--->
        <div class="row content">
            asd
            asd
            

        </div>

        <!---FOOTER--->
        <div class="row footer">
            <div class="col-3 linkcont">

            </div>
            <div class="col-4 copyright">
                PUBLISHER: NADOBA CORPORATION <img src="kepek/favicon.ico" class="small-img" alt="Microsoft corp">
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