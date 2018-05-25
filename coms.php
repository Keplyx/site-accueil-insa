<?php
ob_start(); // Start reading html
?>
<h1>Les Coms</h1>
<p>La liste de toutes les coms de ta semaine d'accueil, avec les contacts des responsables.</p>
<?php
$comTitle = "COM Mise à Feu";
$comDescription = "Ici pour mettre l'ambiance toute la semaine!";
$comRespo = "Paul MERLE";
$comRespoId = "p_merle";
$comRespoPhoto = "assets/images/usa_logo.svg";
$comRespo2Photo = "assets/images/usa_logo.svg";
include("includes/coms/com_template.php");

$comTitle = "COM Ins'cape Game";
$comDescription = "Des énigmes pour sortir du campus";
$comRespo = "Manon TARRADE";
$comRespoId = "mtarade";
include("includes/coms/com_template.php");

$comTitle = "COM ISS";
$comDescription = "Pour découvrir la ville rose";
$comRespo = "Baptiste LERAT";
$comRespoId = "lerat";
include("includes/coms/com_template.php");

$comTitle = "COM Walle-E";
$comDescription = "Une journée dans la foret de Boucone, avec de nombreuses activités le matin ayant pour but de nettoyer la foret, et une piscine en accès libre l'après midi";
$comRespo = "Nélia BAHRAOUI";
$comRespoId = "bahraoui ";
$comRespo2 = "Lucas PERIN";
$comRespo2Id = "lperin";
include("includes/coms/com_template.php");

$comTitle = "COM Parrainage";
$comDescription = "Ici pour vous aider à vous sentir moins perdus";
$comRespo = "Léa LAXAGUE";
$comRespoId = "laxague ";
$comRespo2 = "Blaise MAUGARD";
$comRespo2Id = "bmaugard";
include("includes/coms/com_template.php");

$comRespo2 = "";

$comTitle = "COM Hubble";
$comDescription = "Souriez vous êtes filmés";
$comRespo = "Lyana LETOURNEAU";
$comRespoId = "lletourn";
include("includes/coms/com_template.php");


$comTitle = "COM Plaquette";
$comDescription = "Grâce à eux vous avez des devoirs pendant les vacances";
$comRespo = "Vincent SOISSONS";
$comRespoId = "soissons";
include("includes/coms/com_template.php");

$comId = "com_atterrissage";
$comTitle = "COM Atterrissage";
$comDescription = "Là pour sauver des vies";
$comRespo = "Joan KO";
$comRespoId = "ko";
include("includes/coms/com_template.php");

$comTitle = "COM Ravitaillement";
$comDescription = "La bouf !";
$comRespo = "Zoé PHILIPPON";
$comRespoId = "philippo";
include("includes/coms/com_template.php");

$comTitle = "Space Bar";
$comDescription = "La boisson !";
$comRespo = "Louis GALZIN";
$comRespoId = "galzin";
include("includes/coms/com_template.php");
?>
<?php
$pageContent = ob_get_clean(); // Store html content in variable
include("template.php"); // Display template with variable content
?>
