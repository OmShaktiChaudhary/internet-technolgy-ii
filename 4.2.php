<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>

<h2>Contact Form</h2>

<form method="POST" action="">
    Name:<br>
    <input type="text" name="name" required><br><br>

    Email:<br>
    <input type="email" name="email" required><br><br>

    Message:<br>
    <textarea name="message" rows="4" cols="30" required></textarea><br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    echo "<h3>Submitted Data</h3>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Message: $message <br>";
}
?>

</body>
</html>
