<?php
$message = '';
$uploaded_file = '';

if (isset($_POST['submit'])) {
     
    if (isset($_FILES['upload']) && $_FILES['upload']['error'] == 0) {
        
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];

        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        
        if ($file_size > 20971520) {
            $message = "Error: File size exceeds 2MB.";    
        } elseif (!in_arrat($file_type. $allowed_types)){
            $message = "Error: Only JPG, PNG, GIF files are allowed.";
        }else{
            if (!is_dir('uploads')) {
                mkdir('uploads', 0777, true);
            }

            $destination = 'uploads/' . basename($file_name);
            if (move_unploaded_file($file_tmp, $destination)) {
                $message = "upload successfull!";
            } else {
                $message = "Error: Could not save the file.";
            }
        }
    } else {
        $message = "No file uploaded or there was an upload error.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Single File Upload Example</title>
</head>
<body>

<h2>Upload an Image (Max 2 MB)</h2>

<!-- File Upload Form -->
<form action="" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Select an image to upload</legend>

        <input type="file" name="upload" accept="image/*" required>
        <br><br>
        <input type="submit" name="submit" value="Upload">
    </fieldset>
</form>

<!-- Feedback Section -->
<?php if (!empty($message)): ?>
    <p><strong><?php echo $message; ?></strong></p>

    <?php if (!empty($uploaded_file)): ?>
        <img src="uploads/<?php echo $uploaded_file; ?>" width="300" alt="Uploaded Image">
    <?php endif; ?>
<?php endif; ?>

</body>
</html>