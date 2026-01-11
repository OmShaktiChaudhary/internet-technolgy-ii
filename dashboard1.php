<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    hearder('Location: logi.php');
    exit;
}

echo "Welcome, " . $_SESSION['username'] . "!<br>";

if ($_SESSION['role'] === 'admin') {
    echo "You have admin privileges. You can edit or delete content.";
} else {
    echo "You are a regular user. Limited access granted.";
}
?>

<a href="logout.php">Logout</a>