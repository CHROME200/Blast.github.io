<?php
require '../config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Blast RolePlay</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/edc63f5585.js" crossorigin="anonymous"></script>
</head>
<body >
<section id="header">
    <nav>
        <ul>
            <li class="t"><a href="#header">Home</a></li>
            <li class="t"><a href="#body">About</a></li>
            <li class="t"><a href="#end">Contact</a></li>
            <li class="t"><a href="">Report</a></li>
        </ul>
    </nav>
    <li><a class="te" href="../logout.php">Log-Out</a></li>
    <h1 class="username">Hi <span class="user"><?php echo $row["name"]; ?></span> !</h1>
    <div class="wel">
        <div class="welcome-grp-1">
            <h1 class="welcome">Welcome to <span class="blast">Blast RolePlay</span></h1>
            <div class="st">
                <h2 class="tuni">Tunisian Samp Server</h2>
            </div>
            <div class="btn">
                <!--<p class="welcome-desc">Tunisian Samp Server</p>-->
                <a href="#body"><button class="learn-more">Learn More <i id="arrow1" class="fa-solid fa-arrow-right"></i></button></a>
            </div>
        </div>
        <img class="logo" src="./Other/logo.png">
    </div>
</section>
<section id="body">
    <div class="title">
        <h1 class="about">ABOUT</h1>
        <hr class="line-1">
    </div>
    <div class="description">
        <h2 class="tit">What is <span class="brp">Blast RolePlay</span></h2>
        <p class="desc">Blast RolePlay is a Grand Theft Auto: 
            San Andreas Multi Players game Server for All World , 
            Feel Free to join us a lot of fun waiting for you , 
            where you can play in any character tou wish to be! Be it a cop, 
            gangster , medic or whatever else , and don't forget to invite your friends 
            to share our community together!</p>
    </div>
    <img class="samp" src="./Other/samp_logo.png">
</section>
<section id="end">
    <div class="title">
        <h1 class="contact">CONTACT</h1>
        <hr class="line-2">
    </div>
<div class="socialmedia-box">
    <div class="small-tit">
        <h2 class="sc">BRP Social Media</h2>
    </div>
    <div class="icons">
        <a href="https://discord.gg/HSxkbm2RJT"><i id="discord" class="fa-brands fa-discord fa-2x"></i></a>
        <a href=""><i id="youtube" class="fa-brands fa-youtube fa-2x"></i></a>
        <a href=""><i id="facebook" class="fa-brands fa-facebook fa-2x"></i></a>
        <a id="ip" onclick="ip()" href=""><i id="ip" class="fa-solid fa-gamepad fa-2x"></i></a>
    </div>
</div>
</section>
</body>
<script src="./scrip.js"></script>
</html>