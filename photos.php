<?php
ob_start(); // Start reading html
// Get active folder from url and prevent from seeing folders before photos/
function getActiveFolder()
{
    $dir = $_GET['folder'];
    $folders = explode(DIRECTORY_SEPARATOR, $dir);
    $currentPath = "";
    foreach ($folders as $value) {
        if ($value != "..") {
            $currentPath .= $value . DIRECTORY_SEPARATOR;
        }
    }
    return $currentPath;
}

// Get all directories in the specified path
function getDirectories($dir)
{
    $dir = "photos/".$dir;
    $files = scandir($dir);
    $displayedItems = 0;
    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (is_dir($path) && $value != "." && $value != "..") {
            $folderTitle = $value;
            $folderLink = "?folder=" . getActiveFolder() . $value;
            $folderClass = "";
            include("includes/photos/folder_template.php");
            $displayedItems++;
        }
    }
    if ($displayedItems == 0) {
        $placeHolder = "Pas d'autres albums !";
        include("includes/photos/place_holder.php");
    }
}

// Get all photos in the specified path
function getPhotos($dir)
{
    $dir = "photos/".$dir;
    $files = scandir($dir);
    $displayedItems = 0;
    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            $ext = pathinfo($path, PATHINFO_EXTENSION);
            if ($ext == "bmp" || $ext == "jpg" || $ext == "jpeg" || $ext == "png") {
                $imageSrc = $dir . $value;
                $imageId = "photo-" . $displayedItems;
                include("includes/photos/photo_template.php");
                $displayedItems++;
            }
        }
    }
    if ($displayedItems == 0) {
        $placeHolder = "Pas de photos ici !";
        include("includes/photos/place_holder.php");
    }
}

// Creates buttons representing the actual path for easier navigation
function generatePath($dir)
{
    $folders = explode(DIRECTORY_SEPARATOR, $dir);
    $currentPath = "";
    $pathTitle = "Menu";
    $pathLink = "?folder=";
    include("includes/photos/path_template.php");
    foreach ($folders as $value) {
        if ($value != "") {
            $pathTitle = $value;
            $currentPath .= $value . DIRECTORY_SEPARATOR;
            $pathLink = "?folder=" . $currentPath;
            include("includes/photos/path_template.php");
        }
    }
}

?>
<div id="photo_overlay" style="display:none">

    <img src="" id="img_big" onclick="toggleFullscreen()">

    <div id="close_back" onclick="closeBig()"></div>
    <div id="photo_buttons">
        <i id="right" class="fas fa-arrow-right" onclick="displayNext(1)"></i>
        <i id="left" class="fas fa-arrow-left" onclick="displayNext(-1)"></i>
        <div id="photo_control">
            <i id="close" class="fas fa-times" onclick="closeBig()"></i>
            <a href="" id="img_big_link">
                <i id="fullscreen" class="fas fa-expand-arrows-alt" ></i>
            </a>
        </div>
    </div>



</div>

<h1>Photos</h1>
<p>Cliquez sur le dossier de votre choix pour afficher les photos</p>
<ul class="photos_path">
    <li><p>Chemin : </p></li>
    <?php
    generatePath(getActiveFolder());
    ?>
</ul>
<div class="photos_folder">
    <?php
    getDirectories(getActiveFolder());
    ?>
</div>
<div class="photos">
    <?php
    getPhotos(getActiveFolder());
    ?>
</div>
<script src="assets/scripts/photosScript.js"></script>
<?php
$pageContent = ob_get_clean(); // Store html content in variable
include("template.php"); // Display template with variable content
?>
