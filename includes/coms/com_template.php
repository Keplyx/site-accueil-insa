<h3 id="<?= $comId ?>"><?= $comTitle ?></h3>
<table id="table_coms">
    <tr>
        <td rowspan="4"><img src="<?= $comLogo ?>" alt="COM logo" class="com_logo"></td>
        <td class="com_description"><?= $comDescription ?></td>
    </tr>
    <tr>
        <td>Responsable : <?= $comRespo ?></td>
    </tr>
    <tr>
        <td><span class="fas fa-envelope"></span> Mail : <?= $comRespoId ?></td>
    </tr>
</table>
