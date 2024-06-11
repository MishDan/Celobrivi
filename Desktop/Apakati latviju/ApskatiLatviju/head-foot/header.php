<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ApskatiLatviju</title>
    <link rel="stylesheet" href="assets/style_main.css">
    <link rel="stylesheet" href="assets/style_sakumlapa.css">
    <link rel="stylesheet" href="assets/style_jaunumi.css">
    <link rel="stylesheet" href="assets/style_celojumi.css">
    <link rel="stylesheet" href="assets/style_atsauksmes.css">
    <link rel="stylesheet" href="assets/style_parmums.css">
    <link rel="shortcut icon" href="image/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <script src="assets/script-main.js" defer></script>
    <script src="assets/script-celojumi.js" defer></script>
    <script src="assets/script-atsauksmes.js" defer></script>
    <script src="assets/script-jaunumi.js" defer></script>


</head>
<body>

    <div id="preloader" class="preloader">

        <div class="leftslidebox"></div>
        <div class="rightslidebox"></div>

        <div class="preloader__logo">
                
            <p>Apskati <i class="fas fa-map-marked-alt"></i> Latviju</p>
    
        </div>

        <div class="preloader__loader">

            <div class="loadingio-spinner-rolling">

                <div class="ldio">

                    <div></div>

                </div>

            </div>

            <span class="preloader__percents">

                <span id="percents">0</span>%

            </span>

        </div>
    </div>

    <header>

        <div class="logo">
            
            <a href="./">Apskati <i class="fas fa-map-marked-alt"></i> Latviju</a>

        </div>

        <div class="navmenu">

            <a href="./">Sakum Lapa</a>
            <a href="Jaunumi.php">Jaunumi</a>
            <a href="Celojumi.php">Celojumi</a>
            <a href="Par_mums.php">Par mums</a>
            <a href="Atsauksem.php">Atsauksmes</a>

        </div>

        <div class="media-nav">

            <i class="fas fa-bars mediaMenuOpen"></i>

            <div class="media-nav-open">

                <div class="menuflex">

                    <a href="./">Sakum Lapa</a>
                    <a href="Jaunumi.php">Jaunumi</a>
                    <a href="Celojumi.php">Celojumi</a>
                    <a href="Par_mums.php">Par mums</a>
                    <a href="Atsauksem.php">Atsauksmes</a>

                </div>

            </div>

        </div>

    </header>  

    <section id="login">

<div class="slidebutton">

    <p>Login</p>

    <i class="fa fa-angle-right"></i>

</div>

    <div class="login-form">

        <div class="closetagat">

            <i class="fas fa-close" id="logclose"></i>

        </div>

        <div class="loginstyle">

            <div class="logoform">
                
                <h3>Apskati <i class="fas fa-map-marked-alt"></i> Latviju</h3>
            
            </div>

            <form method="POST">

                <div class="user"><i class="fas fa-user"></i><input type="text" placeholder="Lietotājvārds" name="lietotajs" autocomplete="off" require></div>

                <div class="key"><i class="fas fa-key"></i><input type="password" placeholder="Parole" name="parole" require></div>

                <button type="submit" name="autorizacija">IELOGOTIES</button>

            </form>

        </div>

    </div>

    <div id="overlay"></div>

</section>


<?php

require "PHP/Atsauksmes/PievienoAtsauksmi.php";
require "PHP/Celojumi/CelojumuPieteiksanas.php";
require "PHP/login-logout/login.php";

?>

