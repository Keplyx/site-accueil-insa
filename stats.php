<?php
ob_start(); // Start reading html

function get_stats($is_urss){
    $json_source = file_get_contents('historique.json');
    $json_data = json_decode($json_source, true);
    $root = "usa";
    if ($is_urss)
        $root = "urss";
    foreach($json_data[$root] as $v){
        if ($v['points'] > 0)
            echo  "<tr id='positive'>";
        else
            echo  "<tr id='negative'>";
        echo  "<td>".$v['text']."</td>";
        echo  "<td>".$v['points']."</td>";
        echo  "</tr>";
    }
}

?>
<h1>Stats</h1>
<p>
    Les stats de la semaine.
    <br>
    Remporte le plus de points possible pour faire gagner ton équipe, mais attention à ne pas lui en faire perdre !
</p>
<div id="stats_container">
    <table class="stats_table" id="stats_usa">
        <tr>
            <th colspan="2">USA</th>
        </tr>
        <tr>
            <td class="stat_log">Log</td>
            <td class="stat_points">Points</td>
        </tr>
        <?php get_stats(false) ?>
    </table>
    <table class="stats_table" id="stats_urss">
        <tr>
            <th colspan="2">URSS</th>
        </tr>
        <tr>
            <td class="stat_log">Log</td>
            <td class="stat_points">Points</td>
        </tr>
        <?php get_stats(true) ?>
    </table>
</div>
<?php
$pageContent = ob_get_clean(); // Store html content in variable
?>
<?
ob_start(); // Start reading html
?>
<link rel="stylesheet" type="text/css" media="screen" href="assets/css/stats.css">
<?php
$pageMeta = ob_get_clean(); // Store html content in variable
include("template.php"); // Display template with variable content
?>
