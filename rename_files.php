<?php
$dir = "directory_path/";

$a = scandir($dir);  // Get the file names

foreach($a as $file) {
    echo $file;
    $fileNew = str_replace(" ","_",$file);  //Producing new names to change
    echo "---";
    echo $fileNew;
    echo "<br>";
    rename($dir.$file,$dir.$fileNew);  // Renaming old name with new name
}


// To check new names
$a = scandir($dir);

foreach($a as $file) {
    echo $file;
    echo "<br>";
}
?>
