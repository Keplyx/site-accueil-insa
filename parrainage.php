<?php
ob_start(); // Start reading html
?>
<h1>Le Parrainage</h1>
<p>Tu viens ou va t'envoler de ton petit chez toi, tu est apeuré ? Pas de soucis, nous allons envoyer un Guide Défenseur
    d'Astronaute à tes cotés pour t'accompagner non seulement pendant la semaine, mais aussi pour toute l'année ! C'est
    lui qui va te faire découvrir le campus, t'aider pour te mettre à travailler, et faire en sorte que tu ne décroches
    pas. Mais pour que toutes ces choses merveilleuses puissent t'arriver, il ne faut pas oublier de remplir la superbe
    fiche de parrainage, envoyée avec la magnifique plaquette !</p>
<p>
    Tu étais dans sur une autre planète et t'as paumé ta fiche, pas (trop) de soucis, tu peux la télécharger ici :
    <strong>YA PAS LE LIEN ENCORE</strong>
</p>
<p>La poste ne va pas jusqu'à ta galaxie lointaine, impossible d'envoyer ta fiche de parrainage par courrier ? Pas de
    problème, envoie la par mail <strong>PAS LE MAIL ENCORE<span
                class="fas fa-envelope"></span>etud.insa-toulouse.fr</strong></p>
<?php
$pageContent = ob_get_clean(); // Store html content in variable
include("template.php"); // Display template with variable content
?>
