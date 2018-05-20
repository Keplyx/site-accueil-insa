<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width,maximum-scale=2">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/sidenav.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/hamburger.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans|Work+Sans" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
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
        <p>Ce site regroupe les informations les plus importantes pour que ta semaine d'accueil se déroule dans les
            meilleures conditions.</p>
        <br>
        <p>Le menu en haut à gauche te permet d'accéder aux différentes pages du site, comme le <a class="main_button" href="planning.php">Planning</a>,
            les informations sur le <a class="main_button" href="parrainage.php">Parrainage</a>, ou encore les <a class="main_button" href="photos.php">Photos</a> de la semaine !</p>

    </section>
</div>
</body>
<script src="assets/scripts/sidenavScript.js"></script>
</html>
