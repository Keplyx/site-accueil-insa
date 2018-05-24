<?php

function get_total_points($is_urss){
    $json_source = file_get_contents('historique.json');
    $json_data = json_decode($json_source, true);
    $root = "usa";
    if ($is_urss)
        $root = "urss";
    $points = 0;
    foreach($json_data[$root] as $v){
        $points += $v['points'];
    }
    return $points;
}

?>
<div id="score_counter">
    <div id="score_container">
        <img class="score_logo" src="assets/images/usa.jpg">
        <div id="score_usa"><?php echo get_total_points(false) ?></div>
        <div id="score_separator">/</div>
        <div id="score_urss"><?php echo get_total_points(true) ?></div>
        <img class="score_logo" src="assets/images/urss.jpeg">
    </div>
</div>