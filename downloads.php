<?php
ob_start(); // Start reading html
?>
<h1>Téléchargements</h1>
<p>Fichiers à télécharger.</p>
<?php
$pageContent = ob_get_clean(); // Store html content in variable
include("template.php"); // Display template with variable content
?>
