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
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/planning_events.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/photos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans|Rubik" rel="stylesheet">
</head>
<body id="main">
    <div id="back_button" onclick="closeNav()"></div>
    <?php
        include("includes/top_bar.html");
        include("includes/sidenav.html");
    ?>
    <div id="header_top">
        <div id="hamburger" onclick="toggleNav()">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <h4 id="menu_title">INSA Toulouse 2018</h4>
    </div>
    <div id="header_wrap" class="outer">
        <header class="inner">

            <h1 id="title">Semaine d'Accueil 2018</h1>
            <h2 id="description"></h2>
        </header>
    </div>

    <div id="main_content_wrap" class="outer">
        <section id="main_content" class="inner">
            <?= $pageContent // Display content defined in calling file ?>
        </section>
    </div>

    <div id="footer_wrap" class="outer">
        <footer class="inner">
            <p class="copyright">Copyright ©
                <script type="text/javascript">
                    var d = new Date();
                    document.write(d.getFullYear())
                </script>
                Arnaud VERGNET</p>
        </footer>
    </div>
    <script src="assets/scripts/sidenavScript.js"></script>
</body>
</html>
