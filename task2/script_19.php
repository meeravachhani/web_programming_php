
<?php
if (isset($_POST['submit']))
 {
    $number = $_POST['number'];
   
    function isPrime($num) {
        if ($num < 2)
         {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++)
         {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if (isPrime($number)) 
    {
        echo $number . " is a prime number.";
    } else 
    {
        echo $number . " is not a prime number.";
    }
}
?>
