<?php
$file = "data.txt";

// CREATE
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $data = $name . "|" . $email . PHP_EOL;
    file_put_contents($file, $data, FILE_APPEND);
}

// DELETE
if (isset($_GET['delete'])) {
    $lines = file($file);
    unset($lines[$_GET['delete']]);
    file_put_contents($file, $lines);
}

// UPDATE
if (isset($_POST['update'])) {
    $lines = file($file);
    $index = $_POST['index'];
    $lines[$index] = $_POST['name'] . "|" . $_POST['email'] . PHP_EOL;
    file_put_contents($file, $lines);
}

// READ
$records = file_exists($file) ? file($file) : [];
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP File Handling CRUD</title>
</head>
<body>

<h2>PHP File Handling CRUD</h2>

<!-- ADD FORM -->
<form method="post">
    Name: <input type="text" name="name" required>
    Email: <input type="email" name="email" required>
    <button name="add">Add</button>
</form>

<hr>

<table border="1" cellpadding="5">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
</tr>

<?php foreach ($records as $index => $record): 
    list($name, $email) = explode("|", trim($record));
?>
<tr>
    <td><?= $name ?></td>
    <td><?= $email ?></td>
    <td>
        <a href="?edit=<?= $index ?>">Edit</a> |
        <a href="?delete=<?= $index ?>">Delete</a>
    </td>
</tr>
<?php endforeach; ?>
</table>

<?php
// EDIT FORM
if (isset($_GET['edit'])) {
    $data = explode("|", trim($records[$_GET['edit']]));
?>
<hr>
<form method="post">
    <input type="hidden" name="index" value="<?= $_GET['edit'] ?>">
    Name: <input type="text" name="name" value="<?= $data[0] ?>" required>
    Email: <input type="email" name="email" value="<?= $data[1] ?>" required>
    <button name="update">Update</button>
</form>
<?php } ?>

</body>
</html>
