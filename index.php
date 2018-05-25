<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width,maximum-scale=2">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/sidenav.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/hamburger.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
    <title>Semaine d'Accueil 2018</title>
</head>
<body id="main">
<div id="back_button" onclick="closeNav()"></div>
<?php
include("includes/top_bar.html");
include("includes/sidenav.html");
?>
<div id="home_content_wrap" class="outer">
    <section id="home_content" class="inner">
        <h1>Semaine d'Accueil 2018</h1>
        <?php
        $link = "planning.php";
        $icon = "fas fa-calendar-alt";
        $text = "Le planning de ta semaine ! Sois au courant de tous les événements !";
        include("includes/main_button_template.php");

        $link = "parrainage.php";
        $icon = "fas fa-user-plus";
        $text = "Toutes les informations concernant le parrainage !";
        include("includes/main_button_template.php");

        $link = "blouse.php";
        $icon = "fas fa-tshirt";
        $text = "La fameuse Blouse, habit officiel de l'insa !";
        include("includes/main_button_template.php");

        $link = "photos.php";
        $icon = "fas fa-camera";
        $text = "Les photos de la semaine (la tienne et la notre) !";
        include("includes/main_button_template.php");

        $link = "stats.php";
        $icon = "fas fa-list-ol";
        $text = "Les stats de chaque groupe (USA vs URSS) !";
        include("includes/main_button_template.php");

        $link = "coms.php";
        $icon = "fas fa-users";
        $text = "Les différentes COM présentes pour assurer la pérénité de la semaine !";
        include("includes/main_button_template.php");

        $link = "prevs.php";
        $icon = "fas fa-medkit";
        $text = "La prévention, pour éviter tout incident";
        include("includes/main_button_template.php");

        $link = "downloads.php";
        $icon = "fas fa-download";
        $text = "Les téléchargements, si t'as paumé une feuille !";
        include("includes/main_button_template.php");

        $link = "info.php";
        $icon = "fas fa-info";
        $text = "Les informations supplémentaires, si tu veux tout savoir !";
        include("includes/main_button_template.php");
        ?>
    </section>
</div>
</body>
<script src="assets/scripts/sidenavScript.js"></script>
</html>
