<?php
session_start();

include("kapcs.php");
include("functions.php");
dbkapcs();
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(!empty($username) && !empty($email) && !empty($password) && !is_numeric($username))
    {
        $user_id = random_num(20);
        $query = "insert into felhasznalok (user_id,username,email,password) values ('$user_id','$username','$email','$password')";

        mysqli_query($con, $query);

        header("Location: login.php");
        die;

    }else
    {
        echo "Please enter some valid information!";
    }

}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <title>Register</title>
</head>
<body>
    
    <div class="content">
        <br><br><br><br><br><br><br>
        <div class="form-box">
            <div class="button-box">
                <div id="btn"> </div>
                
                <button type="button" class="toggle-btn" onclick="register()"><a href="login.php" class="link">Login Here!</a> </button>
            </div>
            <div class="social">
                <a target="_blank" href="https://www.facebook.com/kisbencerobert"><img class="fb" src="kepek/loginfb.png" alt="Facebook"></a>    
                <a target="_blank" href="https://steamcommunity.com/id/areyouthereal/"><img class="steam" src="kepek/loginsteam.png" alt="Steam"></a>
            </div>
            <form id="register" class="input-group" action="registration.php" method="POST">
                <input type="text" class="input-field" placeholder="Username" name="username" required>
                <input type="email" class="input-field" placeholder="Email" name="email" required>
                <input type="text" class="input-field" placeholder="Password" name="password" required>
                <input type="checkbox" class="csekbox"><span> I agree to the Terms of Use & Privacy Policy for Nadoba | <a href="Privacy.html">More...</a></span>
                <button type="submit" class="submit-btn">Register</button>
            </form>
            
        
            
    </div>
    
</body>

</html>