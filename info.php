<?php
ob_start(); // Start reading html
?>
<h1>Contact</h1>
<p>
    Voici la merveilleuse page que personne lit ! Mais t'es là, donc autant en profiter.
</p>
<p>Si t'as des questions à propos du site, tu peux m'envoyer des mails (pas trop quand même), ou m'ajouter en ami
    (j'aime bien avoir des amis) :
</p>
<ul>
    <li>
        vergnet<span class="fas fa-envelope"></span>etud.insa-toulouse.fr
    </li>
    <li>
        LIEN FB
    </li>
</ul>
<p>Pour les questions concernant la semaine, adresse toi directement au Prez, il saura surement t'aider :
</p>
<ul>
    <li>
        bquintan<span class="fas fa-envelope"></span>etud.insa-toulouse.fr
    </li>
    <li>
        LIEN FB
    </li>
</ul>
<p>Sinon, si tu veux des infos à propos d'une activité/COM spécifique, va sur la page des <a href="coms.php">COMs</a> pour
    contacter le responsable.</p>

<h1>Crédits</h1>
<p>
    Site créé par Arnaud, un GDA qui avait du temps à perdre
</p>
<p>Voici les différentes technologies et ressources utilisées pour ce site :</p>
<ul id="credits-list">
    <li><a href="http://maxpixel.freegreatpicture.com/World-Earth-Rise-Sunrise-Space-Outer-Sun-Globe-1765027"><i
                    class="fas fa-file-image"></i> Fond du site</a></p></li>
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
