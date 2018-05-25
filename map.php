<?php
ob_start(); // Start reading html
?>
<h1>Le Plan</h1>
<p>
    Voici le plan de ton nouveau campus, que tu va connaitre par coeur en quelques jours. (fond de carte issue du site
    <a
            href="https://www.openstreetmap.org/#map=17/43.57103/1.46591">Open Street Map</a>
</p>
<?php echo file_get_contents("assets/images/map.svg"); ?>

<h1>Informations</h1>
<div id="infoBox">
    <p>Clique sur un bâtiment pour afficher ses informations</p>
</div>

<script type="text/javascript" src="assets/scripts/map.js"></script>
<?php
$pageContent = ob_get_clean(); // Store html content in variable
include("template.php"); // Display template with variable content
?>
