<?php
session_start();

include("kapcs.php");
include("functions.php");
dbkapcs();
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(!empty($username) && !empty($password) && !is_numeric($username))
    {
        
        $query = "select * from felhasznalok where password = '$password' and username = '$username' limit 1";

        $result = mysqli_query($con, $query);

        if($result)
        {
            
        if(mysqli_num_rows($result) === 1)
        {
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['username'] === $username && $user_data['password'] === $password)
            {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: mainpage.php");
                die;
        


            }

        }
        }
        echo '<script>alert("Wrong username or password!")</script>';
    }else
    {
        echo '<script>alert("Wrong username or password!")</script>';
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
    <title>Login</title>
</head>
<body>
    <div class="content">
        <br><br><br><br><br><br><br>
        <div class="form-box">
            <div class="button-box">
                <div id="btn"> </div>
                <button type="button" class="toggle-btn" onclick="login()"><a href="registration.php" class="link">Register Here!</a></button>
                
            </div>
            <div class="social">
                <a target="_blank" href="https://www.facebook.com/kisbencerobert"><img class="fb" src="kepek/loginfb.png" alt="Facebook"></a>
                <a target="_blank" href="https://steamcommunity.com/id/areyouthereal/"><img class="steam" src="kepek/loginsteam.png" alt="Steam"></a>
            </div>
            <form id="login" class="input-group" method="POST">
                <input type="text" class="input-field" placeholder="Username" name="username" required>
                <input type="password" class="input-field" placeholder="Password" name="password" required>
                <br><br><br><br><br>
                <button type="submit" value="login" class="submit-btn">Login</button>
            </form>
            
            
    </div>
  
</body>
</html>