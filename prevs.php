<?php
    ob_start(); // Start reading html
?>
<h1>Prevs</h1>
<p>Ce sont les GDAs derrière la <a href="coms.php#com_atterrissage">COM Atterrissage</a> qui vont faire attention à ce qu'il n'y ait pas de débordements.
    Un numéro d'urgence est mis à votre disposition, à contacter en cas de problème. (PAS encore dispo)</p>
<h3>Les choses à éviter</h3>
<p>Voici quelques conseils pour que ta semaine se passe au mieux. </p>
<?php
    $pageContent = ob_get_clean(); // Store html content in variable
    include("template.php"); // Display template with variable content
?>
