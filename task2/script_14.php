<?php
function calculateSum() 
{
    $sum = 0;
    for ($i = 1; $i <= 100; $i++) 
    {
        $sum += $i;
    }
    return $sum;
}

$sum = calculateSum();

echo "The sum of all numbers from 1 to 100 is: " . $sum;

?>
