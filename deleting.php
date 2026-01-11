<?php
$filename = "oldfile.txt";

if (file_exists($filename)){
    unlink($filename);
    echo "File deleted successfully.";
}else{
    echo "File does not exist.";
}
?>