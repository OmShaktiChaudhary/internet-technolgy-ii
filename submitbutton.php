<?php
// When form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];

    echo "<h2>User Submitted Data:</h2>";
    echo "Full Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password . "<br>";
    echo "DOB: " . $dob . "<br>";
    echo "Gender: " . $gender . "<br><br>";
    echo "Other. " .$other ."<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Form</title>

    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var dob = document.getElementById("dob").value;
            var gender = document.getElementById("gender").value;

            if (name === "" || email === "" || password === "" || dob === "" || gender === "") {
                alert("All fields must be filled out");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>

    <h2>Sign-Up Form</h2>

    <form method="POST" action="" onsubmit="return validateForm()">

        <label for="name">Full Name:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>

        <label for="dob">DOB:</label><br>
        <input type="date" id="dob" name="dob"><br><br>

        <label for="gender">Gender:</label><br>
        <select id="gender" name="gender">
            <option value="">-- Select Gender --</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
        <br><br> 

        <button type="submit">Sign Up</button>
    </form>

</body>
</html>