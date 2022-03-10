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
    <div class="container">
        <div class="row headerxd">

        </div>
        <div class="row">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="mainpage.php"><img src="kepek/favicon.ico" class="logo-image" alt="Icon"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="mainpage.php">Home</a>
                            <a class="nav-link" href="#">Games</a>
                            <a class="nav-link" href="#">Terms Of Use</a>
                            <a class="nav-link" href="#">Orders</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row content">
            <div class="col-3 linkcont">
                <ul class="post-title">
                    <li><a href="#home" class="post">XBOX</a></li>
                    <li><a href="#news" class="post">PLAYSTATION</a></li>
                    <li><a href="#contact" class="post">BATTLE.NET</a></li>
                    <li><a href="#about" class="post">STEAM</a></li>
                </ul>
            </div>
            <div class="col-9">
                Welcome, <?php echo $user_data['username']; ?>
            </div>
        </div>
        <div class="row footer">
            <div class="col-3 linkcont">
                asd
            </div>
            <div class="col-4">
                asd
            </div>
            <div class="col-5">
                asd
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>