<?php
    ob_start(); // Start reading html
?>
<h1>Contact</h1>
<p>Tous les mails cités sur cette page se terminent par <strong>@etud.insa-toulouse.fr</strong></p>
<p>Pour toute demande concernant ce site, merci de me contacter par <span class="fas fa-envelope"></span> Mail : vergnet</p>
<p>Pour toute demande concernant la semaine d'accueil, merci de contacter le Prez par <span class="fas fa-envelope"></span> Mail : aaaaa</p>
<p>Pour toute demande concernant une activité/COM spécifique, allez sur la page des <a href="coms.php">COMs</a> pour contacter le responsable approprié.</p>
<?php
    $pageContent = ob_get_clean(); // Store html content in variable
    include("template.php"); // Display template with variable content
?>
