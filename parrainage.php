<?php
ob_start(); // Start reading html
?>
<h1>Parrainage</h1>
<p>Ce sont les GDAs qui vont t'aider tout au long de l'année et qui vont s'assurer que ton arrivée à l'INSA se passe
    dans les meilleures conditions.</p>
<p>Impossible d'envoyer ta fiche de parrainage par courrier ? Pas de problème, tu peux l'envoyer par mail<strong><span
                class="fas fa-envelope"></span>etud.insa-toulouse.fr</strong></p>
<p>Tu as perdu ta fiche de parrainage ? Télécharge la ici (PAS encore en ligne)</p>
<?php
$pageContent = ob_get_clean(); // Store html content in variable
include("template.php"); // Display template with variable content
?>
