<?php
$directory = "uploads";

$files = scandir($directory);

foreach ($files as $file){

    echo $file . "<br>";
}
?>
