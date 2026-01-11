<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 2.3</title>
</head>
<body>
    <?php

    $mark = 85;

    if($mark >= 90){
        echo "Obtained Grade : A";
    }
    else if ($mark >= 75){
        echo "Obtained Grade : B";
    
    }
    else if ($mark >= 60){
        echo "Obtained Grade : C";
    }
    else{
        echo "Obtained Grade : F";
    }

    ?>
    
</body>
</html>