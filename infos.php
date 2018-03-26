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
<p>Voici les différentes technologies et ressources que ce site utilise :</p>
<p><a href="https://icons8.com/">Icons8</a> | <a href="https://commons.wikimedia.org/wiki/File:Triton_(artist%27s_impression).jpg">Fond du site</a></p>
<a href="https://jquery.com/">JQuery</a>
<br>
<a href="https://www.javascript.com/">JavaScript</a>
<br>
<a href="http://www.php.net/">PHP7</a>
<br>
<a href="https://www.w3.org/html/">HTML5</a>
<br>
<a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS3">CSS3</a>

<?php
$pageContent = ob_get_clean(); // Store html content in variable
include("template.php"); // Display template with variable content
?>