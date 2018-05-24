<?php
ob_start(); // Start reading html
?>
<h1>Stats</h1>
<table id="stats_table">
    <tr>
        <th colspan="2">USA</th>
        <th colspan="2">URSS</th>
    </tr>
    <tr>
        <td>Log</td>
        <td>Points</td>
        <td>Log</td>
        <td>Points</td>
    </tr>
    <tr>
        <td class="horaires">9h30</td>
    </tr>
</table>


<?php
$pageContent = ob_get_clean(); // Store html content in variable
include("template.php"); // Display template with variable content
?>
