<h3 id="<?= $comId ?>"><?= $comTitle ?></h3>
<table id="table_coms">
    <tr>
        <td colspan="4" class="com_description"><?= $comDescription ?></td>
    </tr>
    <tr>
        <td rowspan="2" class="spacer"></td>
        <td><?= $comRespo ?></td>
        <td rowspan="2"><img src="<?= $comRespoPhoto ?>"></td>
        <td rowspan="2" class="spacer"></td>
    </tr>
    <tr>
        <td><?= $comRespoId ?><span
                    class="fas fa-envelope"></span>etud.insa-toulouse.fr
        </td>
    </tr>
    <?php if ($comRespo2 != ""): ?>
        <tr>
            <td rowspan="2" class="spacer"></td>
            <td><?= $comRespo2 ?></td>
            <td rowspan="2"><img src="<?= $comRespo2Photo ?>"></td>
            <td rowspan="2" class="spacer"></td>
        </tr>
        <tr>
            <td><?= $comRespo2Id ?><span
                        class="fas fa-envelope"></span>etud.insa-toulouse.fr
            </td>
        </tr>
    <?php endif; ?>
</table>
