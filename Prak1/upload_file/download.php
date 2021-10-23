<?php
$myDir = "C:/xampp/htdocs/Pertemuan1/upload_file/";
$dir = opendir($myDir);
echo "isi folder (klik link untuk download : <br>";
while ($tmp = readdir($dir)){
    echo "<a href='$tmp' target='_blank'>$tmp</a><br>";  
}
closedir($dir);