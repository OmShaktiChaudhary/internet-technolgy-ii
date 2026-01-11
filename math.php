<?php
echo "<h3>Random Numbers:</h3>";
echo "Random number between 1 to 10:" .rand(1,10)."<br>";
echo "Simulating a dice roll:" . rand(1,6) . "<br>";

echo "<h3>Rounding Numbers:</h3>";
$pi= 3.14159;
echo "Original PI:" . $pi . "<br>";
echo "Rounded tp nearest integer:" . round($pi) . "<br>";
echo "Rounded to 2 decimal place:" . round($pi, 2) . "<br>";

echo "<h3>Formatting Numbers:</h3>";
$bigNumber = 1234567.8912;
echo "Original:" . $bigNumber ."<br>";
echo "Formatted with thousands seperator:" . number_format($bigNumber) . "<br>";
echo "Formatted to 2 decimal places:" . number_format($bigNumber,2) . "<br>";

echo "<h3>Arithmetic Operations (e-commerace example):</h3>";
$quantity = 30 ;
$price = 119.95;
$taxrate = .05;

$subtotal= $quantity * $price;
$totalWithTax = $subtotal + ($subtotal* $taxrate);
echo "<p> You are purchasing <strong>" . $quantity . "</strong> widget(s) at a cost of <strong>$ ".
$price."</strong> each.</p>";
echo "With tax, the total comes to <strong>$" . number_format($totalWithTax, 2) . "</strong>.<br>";

$count = 5;
echo "Initial count: " . $count . "<br>";  
$count++;
echo "After increment: " . $count . "<br>";
$count--;
echo "After decrement: " . $count."<br>";

?>
