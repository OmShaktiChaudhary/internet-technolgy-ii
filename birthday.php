<!DOCTYPE html>
<html>
<head>
    <title>Days Passed Calculator</title>
</head>
<body>

<h2>Calculate Days Passed Since Your Birthday</h2>

<form method="post">
    <label>Enter your Birthdate:</label>
    <input type="date" name="birthdate" required>
    <br><br>
    <button type="submit">Calculate</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $birthdate = $_POST['birthdate'];

    $birthDateObj = new DateTime($birthdate);
    $today = new DateTime();

    $diff = $birthDateObj->diff($today);

    echo "<h3>Days passed since your birthday: " . $diff->days . " days</h3>";
}
?>

</body>
</html>
