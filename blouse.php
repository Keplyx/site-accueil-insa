<?php
ob_start(); // Start reading html
?>
<h1>La Blouse</h1>
<p>Mais qu'est-ce que c'est cette histoire, une page entière dédiée à une pauvre blouse de TP ? Que nenni ! LA Blouse
    est une tradition ancestrale à l'INSA. Cette blouse, que tu devras porter pendant ta semaine d'accueil et pendant
    les TPs, devra être brodée par tes soins (et pas de tricheurs !).
</p>
<p>
    Cette année, le thème étant <strong>l'espace</strong>, tu devra teinter ta blouse en <strong>Bleu inter-sidéral</strong> et la
    décorer en <strong>brodant et cousant</strong> selon ce thème en respectant les règles ci-dessous.
    Qui sait, peut-être que tu sera élu Miss ou Mister Blouse.
</p>
<h3>
    Voici les 5 commandements de la Blouse, et attention à les respecter scrupuleusement !
</h3>
<ul id="list_blouse">
    <li>
        Uniquement fils et aiguilles tu utiliseras.
    </li>
    <li>
        Par toi-même tu décoreras ta blouse, l’aide de maman et mamie tu ne demanderas pas. (Et oui,
        on y est tous passé, à ton tour maintenant, et gare aux tricheurs !)
    </li>
    <li>
        Des marqueurs ou feutres tu n’utiliseras pas, car réservés aux Grand Dindons Autoritaires que
        nous sommes pour t’octroyer bonus ou malus ainsi que des tags comme se veut la tradition.
    </li>
    <li>
        Comme sur le schéma ta blouse tu décoreras
        <ul>
            <li>
                Sur le devant de ta blouse, ton prénom (pas Alex Mignot comme sur l’exemple, ton
                blase à toi), le blason et le nom de ton patelin d’origine apparaitront
            </li>
            <li>
                Sur l’arrière de ta blouse, ton surnom (en gros et bien visible) et “INSA 56” en très
                gros tu broderas car ta promo tu aduleras
            </li>
            <li>
                Les espaces vides tu combleras de broderies et fantaisies sur le thème de l’espace
            </li>
        </ul>
    </li>

    <li>
        Créatif et original tu seras, bonus à la clé
    </li>
    <li>
        D’humour tu feras preuve, bonus à la clé
    </li>
</ul>

<img src="assets/images/blouse_example.png">

<?php
$pageContent = ob_get_clean(); // Store html content in variable
include("template.php"); // Display template with variable content
?>
