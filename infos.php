<?php
ob_start(); // Start reading html
?>
<h1>Contact</h1>
<p>Tous les mails cités sur cette page se terminent par <strong>@etud.insa-toulouse.fr</strong></p>
<p>Pour toute demande concernant ce site, merci de me contacter par <span class="fas fa-envelope"></span> Mail : vergnet
</p>
<p>Pour toute demande concernant la semaine d'accueil, merci de contacter le Prez par <span
            class="fas fa-envelope"></span> Mail : aaaaa</p>
<p>Pour toute demande concernant une activité/COM spécifique, allez sur la page des <a href="coms.php">COMs</a> pour
    contacter le responsable approprié.</p>

<h1>Credits</h1>
<p>Voici les différentes technologies et ressources utilisées pour ce site :</p>
<ul id="credits-list">
    <li><a href="http://maxpixel.freegreatpicture.com/World-Earth-Rise-Sunrise-Space-Outer-Sun-Globe-1765027"><i class="fas fa-file-image"></i> Fond du site</a></p></li>
    <li><a href="https://fontawesome.com/"><i class="fab fa-font-awesome"></i></a></li>
    <li><a href="https://jquery.com/"><i class="fab fa-js-square"></i></a></li>
    <li><a href="http://www.php.net/"><i class="fab fa-php"></i></a></li>
    <li><a href="https://www.w3.org/html/"><i class="fab fa-html5"></i></a></li>
    <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS3"><i class="fab fa-css3-alt"></i></a></li>
</ul>

<?php
$pageContent = ob_get_clean(); // Store html content in variable
include("template.php"); // Display template with variable content
?>
