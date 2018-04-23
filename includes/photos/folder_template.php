<a href="<?= $folderLink ?>">
    <span id="folder_title"><?= $folderTitle ?></span>
    <?php if ($photos > 1): ?>
        <span id="folder_photos"><?= $photos ?> photos</span>
    <?php elseif ($photos == 1): ?>
        <span id="folder_photos"><?= $photos ?> photo</span>
    <?php else: ?>
        <span id="folder_photos">vide</span>
    <?php endif; ?>

    <?php if ($albums > 1): ?>
        <span id="folder_albums"><?= $albums ?> albums</span>
    <?php elseif ($albums == 1): ?>
        <span id="folder_albums"><?= $albums ?> album</span>
    <?php endif; ?>
</a>


