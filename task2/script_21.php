<?php

$number=$_POST['num'];
$string=strval($number);
$rev_str=strrev($string);

if($rev_str == $string)
{
    echo "$number Number is palindrome";
}
else
{
    echo "$number Number is not palindrome";
}

?>
