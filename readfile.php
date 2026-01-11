<?php
$filename = "example.txt";

if (file_exists($filename) && is_file($filename)) {
    readfile($filename);

}else{
    echo "File not Found.";
}
?>