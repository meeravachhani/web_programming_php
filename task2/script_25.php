<?php

$no1=$_POST['num1'];
$no2=$_POST['num2'];

echo "Before swaping<br>number1=$no1 & number2=$no2";

$no1=$no1+$no2;
$no2=$no1-$no2;
$no1=$no1-$no2;

echo " <br>
After swaping<br>number1=$no1 & number2=$no2";

?>
