<?php
$number = $_POST['fir'];
$numb = $_POST['sec'];
$num = $_POST['thi'];

if($number>$numb)
{
    echo "  first number is larger".$number;
}
elseif( $numb>$num)
{
    echo " second number is larger".$numb;
}
elseif( $number>$num)
{
    echo "first number is larger".$number;
}
else
{
 echo "third number is larger".$num;
}

?>
