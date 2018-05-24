<?php
ob_start(); // Start reading html
?>
<h1>La Blouse</h1>
<p>Blouse!</p>
<p
<?php
$pageContent = ob_get_clean(); // Store html content in variable
include("template.php"); // Display template with variable content
?>
