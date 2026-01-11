<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Form</title>
</head>
<body>
    <form action=" " method="post">
        <label>
            Name:
            <input type="text" name="user_name">
        </label>
        <input type="submit" value="send">
    </form>

    <?php
    if (isset($_POST['user_name'])){

        $name = htmlspecialchars($_POST['user_name']);

        echo "Hello, $name!";
    } else {
        echo "No Name Received.";
    }
    ?>
</body>
</html>