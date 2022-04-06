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
                    <a class="nav-link" href="Privacy.html">Privacy Policy</a>
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
            <p style="text-align: center; font-size: 4rem; color:purple; margin-top:5rem; animation: transitionIn 1s;">Welcome, <?php echo $user_data['username']; ?> !</p>
        </div>
        <!---CONTENT--->
        <div class="row content">
            <h2 class="section-header"> Top Selling Games This Week</h2>
            <div class="col col-3">
                <div class="card bg-dark" style="width: 18rem;">
                    <img src="kepek/seaofthievescard.jpg" class="card-img-top card-kep" alt="Sea Of Thieves">
                    <div class="card-body">
                        <h5 class="card-title text-warning" style="font-size: 2rem;text-align:center;">Sea Of Thieves</h5>
                        <p class="card-text text-warning" style="font-size: 1.5rem;">Two pirate worlds collide for an earth-shattering original story in Sea of Thieves: A Pirate’s Life! </p>
                    </div>
                </div>
            </div>
            <div class="col col-3">
                <div class="card bg-dark" style="width: 18rem;">
                    <img src="kepek/gotcard.jpeg" class="card-img-top card-kep" alt="Ghost of Tsushima">
                    <div class="card-body">
                        <h5 class="card-title text-warning" style="font-size: 2rem;text-align:center;">Ghost of Tsushima</h5>
                        <p class="card-text text-warning" style="font-size: 1.5rem;">Ghost of Tsushima is a 2020 action-adventure game developed by Sucker Punch Productions and published by Sony Interactive Entertainment.</p>
                    </div>
                </div>
            </div>
            <div class="col col-3">
                <div class="card bg-dark" style="width: 18rem;">
                    <img src="kepek/overwatchcard.jpg" class="card-img-top card-kep" alt="Overwatch">
                    <div class="card-body">
                        <h5 class="card-title text-warning" style="font-size: 2rem;text-align:center;">Overwatch</h5>
                        <p class="card-text text-warning" style="font-size: 1.5rem;">Overwatch is a colorful team-based action game starring a diverse cast of powerful heroes. Travel the world, build a team, and contest objectives in exhilarating 6v6 combat. </p>
                    </div>
                </div>
            </div>
            <div class="col col-3">
                <div class="card bg-dark" style="width: 18rem;">
                    <img src="kepek/terrariacard.jpg" class="card-img-top card-kep" alt="Terraria">
                    <div class="card-body">
                        <h5 class="card-title text-warning" style="font-size: 2rem;text-align:center;">Terraria</h5>
                        <p class="card-text text-warning" style="font-size: 1.5rem;">The very world is at your fingertips as you fight for survival, fortune, and glory. Delve deep into cavernous expanses, seek out ever-greater foes to test your mettle in combat! </p>
                    </div>
                </div>
            </div>
        </div>
        <!---UPCOMING GAMES CONTENT--->
        <div class="row content">
            <h2 class="section-header"> Upcoming games</h2>
            <div class="col col-3">
                <div class="card bg-dark" style="width: 18rem;">
                    <img src="kepek/chgate.jpg" class="card-img-top card-kep" alt="Chaos Gate Daemonhunters">
                    <div class="card-body">
                        <h5 class="card-title text-warning" style="font-size: 2rem;text-align:center;">Chaos Gate Daemonhunters</h5>
                        <p class="card-text text-warning" style="font-size: 1.5rem;">Lead humanity’s greatest weapon, the Grey Knights, against the corrupting forces of Chaos in this brutal and fast-paced turn-based tactical RPG.  </p>
                    </div>
                </div>
            </div>
            <div class="col col-3">
                <div class="card bg-dark" style="width: 18rem;">
                    <img src="kepek/dolmencard.jpg" class="card-img-top card-kep" alt="Dolmen">
                    <div class="card-body">
                        <h5 class="card-title text-warning" style="font-size: 2rem;text-align:center;">Dolmen</h5>
                        <p class="card-text text-warning" style="font-size: 1.5rem;">Dolmen casts players onto a hostile alien world known as Revion Prime. Your job? Bring back samples of a crystal with particularly unique properties; the so-called Dolmen.</p>
                    </div>
                </div>
            </div>
            <div class="col col-3">
                <div class="card bg-dark" style="width: 18rem;">
                    <img src="kepek/sniperelitecard.jpg" class="card-img-top card-kep" alt="Sniper Elite 5">
                    <div class="card-body">
                        <h5 class="card-title text-warning" style="font-size: 2rem;text-align:center;">Sniper Elite 5</h5>
                        <p class="card-text text-warning" style="font-size: 1.5rem;">France, 1944 – As part of a covert US Rangers operation to weaken the Atlantikwall fortifications along the coast of Brittany, elite marksman Karl Fairburne makes contact with the French Resistance. </p>
                    </div>
                </div>
            </div>
            <div class="col col-3">
                <div class="card bg-dark" style="width: 18rem;">
                    <img src="kepek/atomiccard.jpg" class="card-img-top card-kep" alt="Atomic">
                    <div class="card-body">
                        <h5 class="card-title text-warning" style="font-size: 2rem;text-align:center;">Atomic Heart</h5>
                        <p class="card-text text-warning" style="font-size: 1.5rem;">A global system failure happens at the Soviet Facility №3826 that leads machinery to rebel against the people. </p>
                    </div>
                </div>
            </div>
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