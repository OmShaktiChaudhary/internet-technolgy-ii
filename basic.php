<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Dynamic Content Below!</h1> 
   <?php
   echo"Hello php!";
   print"<p>Today's Date:".date('Y-m-d')."</p>";
   print"<p>Current Time: " .date('h:i:s A') . "</p>";
   date_default_timezone_set("Asia/Kathmandu");
   $current_time = date("h:i:s A"); 
     echo $current_time; 

   ?>
   </body>
</html>