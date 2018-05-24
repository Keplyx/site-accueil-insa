<?php
ob_start(); // Start reading html
?>
<h1>Coms</h1>
<p>Voici la liste de toutes les coms de la semaine d'accueil, avec les contacts des responsables.</p>
<p>Tous les mails cités sur cette page se terminent par <strong>@etud.insa-toulouse.fr</strong></p>
<?php
$comTitle = "COM Mise à Feu";
$comDescription = "Ici pour mettre l'ambiance toute la semaine!";
$comRespo = "Paul MERLE";
$comRespoId = "p_merle";
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
$comRespo = "Nélia BAHRAOUI et Lucas PERIN";
$comRespoId = "bahraoui ou lperin";
include("includes/coms/com_template.php");

$comTitle = "COM Parrainage";
$comDescription = "Ici pour vous aider à vous sentir moins perdus";
$comRespo = "Léa LAXAGUE et Blaise MAUGARD";
$comRespoId = "laxague ou bmaugard";
include("includes/coms/com_template.php");

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
