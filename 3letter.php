<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post">
        <input type="text" name="fullName" required>
        <input type="submit" value="Full Submit">
    </form>
    <?php
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$fullname = trim($_POST['fullname']); // Get input
$parts = explode(" ", $fullname); // Split name into parts

if (count($parts) >= 2) {
$firstname = $parts[0];
$lastname = $parts[1];

// First 3 letters of first and last name
$user = substr($firstname, 0, 3) . substr($lastname, 0, 3);

echo "<h3>Generated Username: $user</h3>";
} else {
echo "<p style='color:red;'>Please enter both first and last name.</p>";
}
}
    
    ?>
</body>
</html>