<?php
function sortArrayDeacending($array) {
    Rsort($array);
    return $array;
}

$data = [3, 37, 45, 1, 2, 9, 8];
$sortedData = sortarraydeacending($data);
echo "sorted array:" .implode(",", $sortedData);
?>