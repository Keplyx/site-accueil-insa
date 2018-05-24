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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway|Russo+One" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
    <?= $pageMeta // Additional metadata  ?>
</head>
<body id="main">
<div id="back_button" onclick="closeNav()"></div>
<?php
include("includes/top_bar.html");
include("includes/sidenav.html");
?>
<div id="header_wrap" class="outer">
    <header class="inner">

        <h1 id="title">Semaine d'Accueil 2018</h1>
        <h2 id="description"></h2>
    </header>
</div>

<?php
include("includes/score_counter.php");
?>

<div id="main_fading_top_edge"></div>
<div id="main_content_wrap" class="outer">
    <section id="main_content" class="inner">
        <?= $pageContent // Display content defined in calling file  ?>
    </section>
</div>
<div id="main_fading_bottom_edge"></div>
<div id="footer_wrap" class="outer">
    <footer class="inner">
        <p class="copyright">
            <script type="text/javascript">
                var d = new Date();
                document.write("Copyright © " + d.getFullYear() + " Arnaud VERGNET")
            </script>
        </p>
    </footer>
</div>
</body>

<script src="assets/scripts/sidenavScript.js"></script>
</html>
