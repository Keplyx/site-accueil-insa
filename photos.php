<?php
    ob_start(); // Start reading html
    function getActiveFolder() {
        if ($_GET['folder'] != "") {
            return $_GET['folder'];
        } else {
            return "photos/";
        }
    }

    function getDirectories($dir){
        $files = scandir($dir);
        $displayedItems = 0;
        foreach ($files as $key => $value){
            $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
            if (is_dir($path) && $value != "." && $value != "..") {
                $folderTitle = $value;
                $folderLink = "?folder=".getActiveFolder().$value.DIRECTORY_SEPARATOR;
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

    function getPhotos($dir){
        $files = scandir($dir);
        $displayedItems = 0;
        foreach ($files as $key => $value){
            $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
            if (!is_dir($path)) {
                $ext = pathinfo($path, PATHINFO_EXTENSION);
                if ($ext == "bmp" || $ext == "jpg" || $ext == "jpeg" || $ext == "png"){
                    $imageSrc = getActiveFolder().$value;
                    $imageId = "photo-".$displayedItems;
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

    function generatePath($dir){
        $folders = explode(DIRECTORY_SEPARATOR, $dir);
        $currentPath = "";
        foreach ($folders as $value){
            if ($value != ""){
                $pathTitle = $value;
                $currentPath .= $value.DIRECTORY_SEPARATOR;
                $pathLink = "?folder=".$currentPath;
                include("includes/photos/path_template.php");
            }
        }
    }
?>
<div id="photo_back_button" style="display:none">
    <div id="close_back" onclick="closeBig()"><span class="fas fa-times" id="close"></span></div>
    <span id="right" class="fas fa-arrow-right" onclick="displayNext(1)"></span>
    <span id="left" class="fas fa-arrow-left" onclick="displayNext(-1)"></span>
    <a href="" id="img_big_link">
        <img src="" id="img_big"></img>
    </a>
</div>

<h1>Photos</h1>
<p>Cliquez sur le dossier de votre choix pour afficher les photos</p>
<ul class="photos_path">
    <p>Chemin : </p>
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
