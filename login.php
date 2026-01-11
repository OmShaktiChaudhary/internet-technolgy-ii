<?php
session_start();
require 'user.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usernmae = $_POST['username'];
    $password = $_POST['password'];
    $_found = false;

    foreach ($users as $user){
        if ($user['username'] === $username && password_verify($password, $user['password'])){
             $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION{'role'} = $user['role'];
            $found = true;
            header('Location: dashboard.php');
            exit();
        }
    }

if (!$found) {
    echo "Invalid username or password.";
}
}
?>

<form method="POST">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Login</button>
</form>