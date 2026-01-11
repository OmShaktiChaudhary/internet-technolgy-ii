<?php 
$age = 25;
$isStudent = true;

if ($age > 18 && $isStudent) {
    echo "<p>Eligible for student discount.</p>";
}

$rolledSix = false;
$rolledFive = true;
if ($rolledSix || $rolledFive) {
    echo "<p>You win! (rolled a 5 or 6).</p>";
}

$isEmpty = false;
if (!$isEmpty){
    echo "<p>The variable is not empty.</p>";
}

$usetrname = $_GET['user'] ?? 'Guest';
echo "<p>Welcome, " .$username ."!</p>";
?>
