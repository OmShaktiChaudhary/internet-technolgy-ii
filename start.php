<?php
session_start();

$_SESSION['username'] = 'Alice';
$_SESSION['role'] = 'admin';
echo "Session has been set.<br>";
echo "Username: " .$_SESSION['username'] . "<br>";
echo "Role:" . $_SESSION['role'];

?>