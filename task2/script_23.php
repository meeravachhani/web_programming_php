<?php

$no1=$_POST['num1'];
$no2=$_POST['num2'];
$no3=$_POST['num3'];

if($no1 > $no2)
{
    if($no1 > $no3)
    {
        echo "$no1 is largest";
    }
    else{
        echo "$no3 is largest";
    }
}
else
{
    if($no2 > $no3)
    {
        echo "$no2 is largest";
    }
    else
    {
        echo "$no3 is largest";
    }
}
?>
