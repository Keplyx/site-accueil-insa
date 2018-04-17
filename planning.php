<?php
ob_start(); // Start reading html
?>
<h1> Le Planning</h1>
<p>Voici le planning de la semaine. Clique sur une activité pour avoir des informations.</p>

<div id="table_wrapper">
    <table cellspacing="10" id="table_planning">
        <tr>
            <th>Horaires</th>
            <th>Lundi</th>
            <th>Mardi</th>
            <th>Mercredi</th>
            <th>Jeudi</th>
            <th>Vendredi</th>
            <th>Samedi</th>
            <th>Dimanche</th>
        </tr>
        <tr>
            <td class="horaires">8h30</td>
            <td rowspan="2" class="event discours">Discours du Directeur</td>
            <td rowspan="4" class="event fabcamp">FabCamp</td>
            <td rowspan="4" class="event fabcamp">FabCamp</td>
            <td rowspan="4" class="event escape_game">Escape Game</td>
            <td rowspan="10" class="event com_walle">COM Wall-E</td>
            <td rowspan="13" class="event wini">WINI</td>
            <td rowspan="13" class="event wini">WINI</td>
        </tr>
        <tr>
            <td class="horaires">9h30</td>
        </tr>
        <tr>
            <td class="horaires">10h30</td>
            <td class="event act_prev">Activités de Prévention</td>
        </tr>
        <tr>
            <td class="horaires">11h</td>
            <td class="event remise_niveau">Remise à niveau</td>
        </tr>
        <tr>
            <td class="horaires">12h</td>
            <td rowspan="2" class="event barbecue">Barbecue</td>
            <td rowspan="2" class="event barbecue">Barbecue</td>
            <td rowspan="2" class="event barbecue">Barbecue</td>
            <td rowspan="2" class="event barbecue">Barbecue</td>
        </tr>
        <tr>
            <td class="horaires">13h</td>
        </tr>
        <tr>
            <td class="horaires">14h</td>
            <td rowspan="4" class="event fabcamp">FabCamp</td>
            <td rowspan="4" class="event fabcamp">FabCamp</td>
            <td rowspan="4" class="event fabcamp">FabCamp</td>
            <td rowspan="4" class="event com_ville">COM Ville</td>
        </tr>
        <tr>
            <td class="horaires">15h</td>
        </tr>
        <tr>
            <td class="horaires">16h</td>
        </tr>
        <tr>
            <td class="horaires">17h</td>
        </tr>
        <tr>
            <td class="horaires">18h</td>
            <td rowspan="2" class="event banquet">Banquet</td>
            <td rowspan="2" class="event banquet">Banquet</td>
            <td rowspan="2" class="event banquet">Banquet</td>
            <td rowspan="2" class="event banquet">Banquet</td>
            <td rowspan="2" class="event banquet">Banquet</td>
        </tr>
        <tr>
            <td class="horaires">19h</td>
        </tr>
        <tr>
            <td class="horaires">20h</td>
            <td class="event soir">Space Meeting</td>
            <td class="event soir">Soirée des Clubs</td>
            <td class="event soir">Soirée Jeune Padawan</td>
            <td class="event soir">Soirée PK</td>
            <td class="event soir">Concert</td>
        </tr>
    </table>
</div>
<h1>Informations</h1>
<div id="infoBox">
    <p>Cliquez sur un évenement pour afficher ses Informations</p>
</div>
<script src="assets/scripts/planningScript.js"></script>
<?php
$pageContent = ob_get_clean(); // Store html content in variable
include("template.php"); // Display template with variable content
?>
