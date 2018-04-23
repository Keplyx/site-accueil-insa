<?php
ob_start(); // Start reading html

define("urlParam", "path");
define("photoRoot", "photos");

/**
 * Get active path from url and prevent from seeing folders before 'photos/'
 * @return string current path
 */
function getActivePath()
{
    $dir = $_GET[urlParam];
    $folders = explode(DIRECTORY_SEPARATOR, $dir);
    $currentPath = "";
    foreach ($folders as $value) {
        if ($value != ".." && $value != "." && $value != "") {
            $currentPath .= DIRECTORY_SEPARATOR . $value;
        }
    }
    return $currentPath;
}

/**
 * Get active folder from the active path
 * @param string $path path representing the active folder
 * @return string active folder name
 */
function GetActiveFolder($path)
{
    $dir = explode(DIRECTORY_SEPARATOR, $path);
    return $dir[sizeof($dir) - 1]; // Last item after /
}

/**
 * Check whether the current album is available for download as a .zip file
 * @param string $path path to search the album in
 * @return bool True if an album is available, false otherwise
 */
function isAlbumAvailable($path)
{
    $dir = photoRoot . $path;
    $files = scandir($dir);
    $valid = false;
    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            $valid = pathinfo($path, PATHINFO_EXTENSION) == "zip";
            if ($valid)
                break;
        }
    }
    return $valid;
}

/**
 * Get all directories in the specified path and creates them on the page
 * @param string $path path to search directories in
 */
function createDirectories($path)
{
    $path = photoRoot . $path;
    $files = scandir($path);
    $displayedItems = 0;
    foreach ($files as $key => $value) {
        $realPath = realpath($path . DIRECTORY_SEPARATOR . $value);
        if (isValidDirectory($realPath, $value)) {
            $folderTitle = $value;
            $folderLink = "?" . urlParam . "=" . getActivePath() . DIRECTORY_SEPARATOR . $value;
            include("includes/photos/folder_template.php");
            $displayedItems++;
        }
    }
}

/**
 * Get all photos in the specified path and creates them on the page
 * @param string $path path to search photos in
 */
function createPhotos($path)
{
    $path = photoRoot . "_thumb" . $path;
    $files = scandir($path);
    $displayedItems = 0;
    foreach ($files as $key => $value) {
        $realPath = realpath($path . DIRECTORY_SEPARATOR . $value);
        if (isValidImage($realPath)) {
            $imageSrc = $path . DIRECTORY_SEPARATOR . $value;
            $imageId = "photo-" . $displayedItems;
            include("includes/photos/photo_template.php");
            $displayedItems++;
        }
    }
}

/**
 * Counts directories in the specified folder
 * @param string $path path to search directories in
 * @return int directories count
 */
function getDirectoriesCount($path)
{
    $path = photoRoot . $path;
    $files = scandir($path);
    $dirCount = 0;
    foreach ($files as $key => $value) {
        $realPath = realpath($path . DIRECTORY_SEPARATOR . $value);
        if (isValidDirectory($realPath, $value)) {
            $dirCount++;
        }
    }
    return $dirCount;
}

/**
 * Counts images in the specified folder
 * @param string $path path to search photos in
 * @return int photo count
 */
function getPhotoCount($path)
{
    $path = photoRoot . $path;
    $files = scandir($path);
    $fileCount = 0;
    foreach ($files as $key => $value) {
        $realPath = realpath($path . DIRECTORY_SEPARATOR . $value);
        if (isValidImage($realPath)) {
            $fileCount++;
        }
    }
    return $fileCount;
}

/**
 * Check if the given image is valid
 * @param string $imagePath absolute path of the image
 * @return bool True if the file is a jpg, jpeg or png, false otherwise
 */
function isValidImage($imagePath)
{
    $ext = pathinfo($imagePath, PATHINFO_EXTENSION);
    return !is_dir($imagePath) && ($ext == "jpg" || $ext == "jpeg" || $ext == "png");
}

/**
 * Check if the given folder is valid (is not '.' or '..')
 * @param string $directoryPath directory path
 * @param string $directory directory name
 * @return bool True if the directory is valid, false otherwise
 */
function isValidDirectory($directoryPath, $directory)
{
    return is_dir($directoryPath) && $directory != "." && $directory != "..";
}


/**
 * Creates buttons representing the actual path for easier navigation
 * @param string $path Actual Path
 */
function generatePath($path)
{
    $folders = explode(DIRECTORY_SEPARATOR, $path);
    $currentPath = "";
    $pathTitle = "Menu";
    $pathLink = "?" . urlParam . "=";
    include("includes/photos/path_template.php");
    foreach ($folders as $value) {
        if ($value != "") {
            $pathTitle = $value;
            $currentPath .= DIRECTORY_SEPARATOR . $value;
            $pathLink = "?" . urlParam . "=" . $currentPath;
            include("includes/photos/path_template.php");
        }
    }
}

?>
<div id="photo_overlay" style="display:none">

    <img src="" id="img_big" onclick="toggleFullscreen()">
    <div id="close_back" onclick="closeBig()"></div>
    <div id="loading" onclick="closeBig()">
        <i class="fas fa-spinner fa-spin"></i>
    </div>

    <div id="photo_buttons">
        <i id="right" class="fas fa-arrow-right" onclick="displayNext(1)"></i>
        <i id="left" class="fas fa-arrow-left" onclick="displayNext(-1)"></i>
        <div id="photo_control">
            <i id="close" class="fas fa-times" onclick="closeBig()"></i>
            <a id="img_big_download" download="" href="">
                <i id="download" class="fas fa-download"></i>
            </a>
            <a href="" id="img_big_link">
                <i id="fullscreen" class="fas fa-expand-arrows-alt"></i>
            </a>
        </div>
    </div>
</div>

<h1 id="photos_title">Photos</h1>
<p>Cliquez sur le dossier de votre choix pour afficher les photos</p>
<ul class="photos_path">
    <li><p>Chemin : </p></li>
    <?php
    generatePath(getActivePath());
    ?>
</ul>
<?php if (getDirectoriesCount(getActivePath()) > 0): ?>
    <div class="photos_folder">
        <?php
        createDirectories(getActivePath());
        ?>
    </div>
<?php endif; ?>
<?php if (isAlbumAvailable(getActivePath())): ?>
    <a download=""
       href="photos<?php echo getActivePath() . DIRECTORY_SEPARATOR . GetActiveFolder(getActivePath()) ?>.zip"
       id="download_album">
        <span id="download_text"><i class="fas fa-download"></i>Télécharger l'album</span>
        <span id="album_photo_count"><?php echo getPhotoCount(getActivePath()) ?> photos</span>
    </a>
<?php endif; ?>
<?php if (getPhotoCount(getActivePath()) > 0): ?>
    <div class="photos">
        <?php
        createPhotos(getActivePath());
        ?>
    </div>
<?php endif; ?>
<script src="assets/scripts/photosScript.js"></script>
<?php
$pageContent = ob_get_clean(); // Store html content in variable
include("template.php"); // Display template with variable content
?>
