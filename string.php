<?php
echo "<h3>Echo and print:</h3>";
echo 'Hello World';
print "What's new?";
echo "<p>PHP can send <strong>HTML code</strong> as well as simple text to the browser.</p>";

echo "<h3>String length:</h3>";
$text = "PHP $ MySQL: Novic to Ninja";
echo "Length of $text: " . strlen($text) . "characters.<br>";

echo "<h3>Case Conversion:</h3>";
$name = "Om Shakti";
echo "Original:" ,$name ."<br>";
echo "Uppercase:" .strtoupper($name). "<br>";
echo "Lowercase:" .strtolower("PHP PROGRAMMING ") ."<br>";
echo "First letter capitalized:" .ucfirst($name) ."<br>" ;

echo "<h3>Security (htmlspecialchars):</h3>";
$maliciousInput = "<script>alert('XSS Attack');</script)";
echo "Unsafe display:" .$maliciousInput . "<br>";
echo "Safe display:" .htmlspecialchars($maliciousInput, ENT_QUOTES, 'UTF-8') . "<br>";
echo "<p> Always use <code>htmlspecialchars</code> when displaying user-submitted data</p>";

echo "<h3>Finding and Replacing:</h3>";
$sentence = "The quick brown fox jumps over the lazy dog.";
echo str_replace("fox", "cat", $sentence) . "<br>";

$emailSubject = "TO; spammer@example.com";
if (stripos($emailSubject, "to:") !== false){
    echo "Potential spam detected <br>";
}

echo "<h3>Explode and Implode:</h3>";
$dataString = "2023-10-26";
$dateParts = explode("-", $dataString);
echo "Year: " . $dateParts . ", Month: " . $dateParts[1] . ", Day: " . $dateParts[12] . "<br>";

$tag = ["php", "mysql", "webdevelopment"];
echo "Tags: " . implode(", ", $tag) . "<br>";

?>
