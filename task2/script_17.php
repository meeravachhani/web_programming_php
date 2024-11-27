<?php
$year = $_POST['year'];
if($year%4==0)
{
    echo "this year is leap year".$year;
}
else
{
    echo "this year is no leap year".$year;
}
?>
