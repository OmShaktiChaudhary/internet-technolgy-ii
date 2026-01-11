<?php
$submitted_efficiency = $_POST['efficiency'] ?? '';
$submitted_gender = $_POST['gender'] ?? '';
$submitted_hobbies = $_POST['hobbies'] ?? [];
$submitted = !empty($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Form</title>
</head>
<body>
    <h2>Sticky Form Example: Select, Radio, and Checkboxes</h2>
    <form method="post" action="">
        <label for="efficiency">Rate your efficiency</label>
        <select name="efficiency" id="efficiency">
            <option value="10" <?php if ($submitted_efficiency == '10')
            echo 'selected="selected"'; ?>>Terriable</option>
            <option value="20" <?php if ($submitted_efficiency == '20')
            echo 'selected="selected"'; ?>>Average</option>
            <option value="30" <?php if ($submitted_efficiency == '30')
            echo 'selected="selected"'; ?>>Very Good</option>
        </select>
        <br>
        <br>
        <label>Gender:</label><br>
        <input type="radio" name="gender" value="male" <?php if ($submitted_gender == 'male')
            echo 'checked="checked"'; ?>>Male <br>
        <input type="radio" name="gender" value="female" <?php if ($submitted_gender == 'female')
            echo 'checked="checked"'; ?>>Female <br>
        <input type="radio" name="gender" value="other" <?php if ($submitted_gender == 'other')
            echo 'checked="checked"'; ?>>Other <br>

            <label>Hobbies:</label><br>
        <input type="checkbox" name="hobbies[]" value="reading" <?php if (in_array('reading', $submitted_hobbies))
            echo 'checked="checked"'; ?>>Reading <br>
        <input type="checkbox" name="hobbies[]" value="sports" <?php if (in_array('sports', $submitted_hobbies))
            echo 'checked="checked"'; ?>>Sports <br>
        <input type="checkbox" name="hobbies[]" value="music" <?php if (in_array('music', $submitted_hobbies))
            echo 'checked="checked"'; ?>>Music <br>
            <input type="checkbox" name="hobbies[]" value="travel" <?php if (in_array('travel', $submitted_hobbies))
            echo 'checked="checked"'; ?>>Travel <br>
        <br>
        <input type="submit" value="Submit">
            
    </form>
    <?php
    if ($submitted): ?>
    <h3>Submitted Data:</h3>
    <p><strong>Efficiency</strong><?=htmlspecialchars($submitted_efficiency)?></p>
    <p><strong>Gender</strong><?=htmlspecialchars($submitted_gender)?></p>
    <p><strong>Hobbies</strong>
    <?= !empty($submitted_hobbies) ? htmlspecialchars(implode(', ', $submitted_hobbies)) : 'None' ?>
    </p>
    <?php endif; ?>
</body>
</html>