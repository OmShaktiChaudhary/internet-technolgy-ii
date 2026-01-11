<?php
echo "<h3> Simple Date Formatting:</h3>";
echo "Current Date:" .date('Y-m-d') ."<br>";
echo "Current Date and Time:" .date('Y-m-d H:i:s') ."<br>";

echo "<h3>Date Time Class (Object-Oriented):</h3>";
$currentDate = new DateTime();
echo "Current DateTime Object: " . $currentDate->format('Y-m-d H:i:s') . "<br>";    

$futureDate = new DateTime('2025-10-17 8:50:00');
echo "Future Date: " . $futureDate->format('F j, Y, g:i a') . "<br>";

$date1 = new DateTime('2023-10-01');
$date2 = new DateTime('2023-10-26');

$interval = $date1->diff($date2);
echo "Difference between " . $date1->format('Y-m-d') . " and " . $date2->format('Y-m-d') . " is " . $interval->days . " days.<br>";

$modifiedDate = new DateTime();
$modifiedDate->modify('+1 month');
echo "Date after 1 month: " . $modifiedDate->format('Y-m-d') . "<br>";

echo "<h3>Date Validation:</h3>";
$month = 2; $day = 29; $year = 2025;
if (checkdate($month, $day, $year)){
    echo "The date $month/$day/$year is valid.<br>";
} else {
    echo "The date $month/$day/$year is not valid.<br>";
}
?>