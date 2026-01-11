<?php
function sortArrayAscending($array) {
    sort($array);
    return $array;
}

$data = [3, 37, 45, 1, 2, 9, 8];
$sortedData = sortArrayAscending($data);
echo "sorted array:" .implode(",", $sortedData);
?>