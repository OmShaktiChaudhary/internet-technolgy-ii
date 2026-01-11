<?php
session_start();

if (isset($_SESSION['username'])) {
$_SESSION['role'] = 'admin';
echo "Session has been set.<br>";
echo "Username: " .$_SESSION['username'] . "<br>";
} else {
echo "Role:" . $_SESSION['You are not logged in.'];
}
?>