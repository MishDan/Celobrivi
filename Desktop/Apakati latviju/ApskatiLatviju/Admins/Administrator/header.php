<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AL || Administrator</title>
    <link rel="stylesheet" href="assets/style_main.css">
    <link rel="stylesheet" href="assets/style_sakumlapa.css">
    <link rel="stylesheet" href="assets/style_jaunumi.css">
    <link rel="stylesheet" href="assets/style_celojumi.css">
    <link rel="stylesheet" href="assets/style_atsauksmes.css">
    <link rel="stylesheet" href="assets/style_parmums.css">
    <link rel="shortcut icon" href="../image/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <script src="assets/script-administrator.js" defer></script>
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

        <?php require "assets/connect_db.php";?>

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

<?php

    require "../PHP/Atsauksmes/PievienoAtsauksmi.php";
    require "../PHP/Celojumi/CelojumuPieteiksanas.php";

?>


<section id="admin">

<div class="slidebutton">

    <p>AdminBoard</p>

    <i class="fa fa-angle-right"></i>

</div>

<div class="adminboard">

    <div class="closetagat">

        <i class="fas fa-close" id="adminClose"></i>

    </div>

    <div class="function">

        <div class="funcbox redcelojumus">

            <i class="fas fa-plus"></i>

            <p>Rediģēt ceļojumus</p>

        </div>

        <div class="funcbox redcomments">

            <i class="fas fa-comment"></i>

            <p>Rediģēt Atsaksmes</p>

        </div>

        <div class="funcbox redmoderatorus">

            <i class="fas fa-user"></i>

            <p>Rediģēt moderatorus</p>

        </div>

        <div class="funcbox redpieteikumus">

            <i class="fas fa-check"></i>

            <p>Rediģēt pieteikumus</p>

        </div>

        <a href="../PHP/login-logout/logout.php">

            <div class="funcbox">

               <i class="fas fa-sign-out"></i>
               
               <p>izrakstities</p>

            </div>

        </a>

    </div>

</div>


<?php

    require '../PHP/Celojumi/CelojumuParvalde.php';
    require '../PHP/Atsauksmes/atsaukmesParvalde.php';
    require '../PHP/ModeratorParvalde/ModeratorTable.php';
    require '../PHP/PieteikumuParvalde/PieteikumuTabula.php';

?>

</div>

<div id="overlay"></div>

</section>
