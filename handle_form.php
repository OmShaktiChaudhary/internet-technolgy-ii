<?php
if (isset ($_POST['user_name'])){

    $name = htmlspecialchars($_POST['user_name']);

    echo "Hello, $name!";
}else{
    echo  "No name received.";
}
?>