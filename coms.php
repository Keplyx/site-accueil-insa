<?php
ob_start(); // Start reading html
?>
<h1>Coms</h1>
<p>Voici la liste de toutes les coms de la semaine d'accueil, avec les contacts des responsables.</p>
<p>Tous les mails cités sur cette page se terminent par <strong>@etud.insa-toulouse.fr</strong></p>
<?php
$comTitle = "COM Anim";
$comLogo = "assets/images/coms/logo.png";
$comDescription = "Ici pour mettre l'ambiance toute la semaine!";
$comRespo = "Paul MERLE";
$comRespoId = "p_merle";
include("includes/coms/com_template.php");

$comId = "com_atterrissage";
$comTitle = "COM Atterrissage";
$comLogo = "assets/images/coms/logo.png";
$comDescription = "Là pour sauver des vies";
$comRespo = "Joan KO";
$comRespoId = "ko";
include("includes/coms/com_template.php");

$comTitle = "COM Parrainage";
$comLogo = "assets/images/coms/logo.png";
$comDescription = "Ici pour vous aider à vous sentir moins perdus";
$comRespo = "Léa LAXAGUE et Blaise MAUGARD";
$comRespoId = "laxague ou bmaugard";
include("includes/coms/com_template.php");

$comTitle = "COM Escape Game";
$comLogo = "assets/images/coms/logo.png";
$comDescription = "Ici pour animer une après midi";
$comRespo = "Manon TARRADE";
$comRespoId = "mtarade";
include("includes/coms/com_template.php");


$comTitle = "COM Ville";
$comLogo = "assets/images/coms/logo.png";
$comDescription = "Ici pour animer une autre après midi";
$comRespo = "Baptiste LERAT";
$comRespoId = "lerat";
include("includes/coms/com_template.php");

$comTitle = "COM Walle-E";
$comLogo = "assets/images/coms/logo.png";
$comDescription = "Une journée dans la foret de Boucone, avec de nombreuses activités le matin ayant pour but de nettoyer la foret, et une piscine en accès libre l'après midi";
$comRespo = "Nélia BAHRAOUI et Lucas PERRIN";
$comRespoId = "bahraoui ou lperin";
include("includes/coms/com_template.php");

$comTitle = "COM Photos";
$comLogo = "assets/images/coms/logo.png";
$comDescription = "Souriez vous êtes suivis";
$comRespo = "Lyana LETOURNEAU";
$comRespoId = "lletourn";
include("includes/coms/com_template.php");

$comTitle = "COM Ravitaillement";
$comLogo = "assets/images/coms/logo.png";
$comDescription = "La bouf!";
$comRespo = "Zoé PHILIPPON";
$comRespoId = "philippo";
include("includes/coms/com_template.php");

$comTitle = "COM Plaquette";
$comLogo = "assets/images/coms/logo.png";
$comDescription = "Grâce à eux vous avez de la lecture";
$comRespo = "Vincent SOISSONS";
$comRespoId = "soisson";
include("includes/coms/com_template.php");

$comTitle = "Spe Bar";
$comLogo = "assets/images/coms/logo.png";
$comDescription = "Pour vous abreuver";
$comRespo = "Louis GALZIN";
$comRespoId = "galzin";
include("includes/coms/com_template.php");
?>
<?php
$pageContent = ob_get_clean(); // Store html content in variable
include("template.php"); // Display template with variable content
?>
