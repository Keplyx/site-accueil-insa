<h3 id="<?= $comId ?>"><?= $comTitle ?></h3>
<table id="table_coms">
    <tr>
        <td colspan="2" class="com_description"><?= $comDescription ?></td>
    </tr>
    <tr>
        <td><?= $comRespo ?></td>
        <td rowspan="2" class="com_photo"><img src="<?= $comRespoPhoto ?>"></td>
    </tr>
    <tr>
        <td><span class="fas fa-envelope"></span> Mail : <?= $comRespoId ?></td>
    </tr>
    <?php if ($comRespo2 != ""): ?>
    <tr>
        <td><?= $comRespo2 ?></td>
        <td rowspan="2" class="com_photo"><img src="<?= $comRespo2Photo ?>"></td>
    </tr>
    <tr>
        <td><span class="fas fa-envelope"></span> Mail : <?= $comRespo2Id ?></td>
    </tr>
    <?php endif; ?>
</table>
