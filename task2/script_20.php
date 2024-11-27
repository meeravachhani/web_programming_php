<?php
// Function to calculate the factorial of a number
$number = $_POST['number1'];
$fac=1;

for ($i=$number; $i>=1 ;$i--)
{
    $fac=$fac*$i;
}
echo $fac;
?>
