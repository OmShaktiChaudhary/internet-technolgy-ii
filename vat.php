<?php
function calculateVAT($amount, $rate) {
    $vat = ($amount * $rate) / 100;
    return $amount + $vat;
}
echo calculateVAT(1000, 13)
?>