<?php
ob_start(); // Start reading html
?>
<h1>La Prévention</h1>
<p>C'est les GDAs derrière la <a href="coms.php#com_atterrissage">COM Atterrissage</a> qui vont faire attention à ce
    que tout se passe dans les meilleures conditions.
    Ils seront là toute la semaine, avec des médocs, de la bouf et de la boisson (de l'eau hein !), bref pour assurer ta
    survie.Ça sera facile de les repérer, ils auront tous un bandeau rouge !
</p>
<p>
    Surtout, si t'as un problème, hésite pas à les embêter !
</p>
<h3>Contact d'urgence</h3>
<p>
    rien à voir ici, ils sont pas encore en ligne !
</p>
<?php
$pageContent = ob_get_clean(); // Store html content in variable
include("template.php"); // Display template with variable content
?>
