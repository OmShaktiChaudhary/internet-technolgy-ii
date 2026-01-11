<?php
// $myArrary = ['one',2,3];
// $myArraryDynamic=[];
// $myArraryDynamic[]= 'one';
// $myArraryDynamic[]=2;
// $myArraryDynamic[]='3';

// foreach ($myArrary as $key=>  $value) {
//     echo "Index $key =>$value/n";
// }



$englishRolls =[
    1=> 'one',
    2=> 'two',
    3=> 'three',
    4=> 'four',
    5=> 'five',
    6=> 'six',
];

$roll = rand(1,6);
echo '<p>You rolled a' . $englishRolls[$roll]. '</p>';
?>
