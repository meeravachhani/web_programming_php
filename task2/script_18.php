

<?php
session_start();

if (!isset($_SESSION['random_number'])) {
    $_SESSION['random_number'] = rand(1, 10);
}

if (isset($_POST['submit'])) {
    $guess = $_POST['guess'];
    $random_number = $_SESSION['random_number'];

    if ($guess == $random_number) {
        echo "Congratulations! You guessed the correct number: " . $random_number . "<br>";
        // Reset the random number for a new game
        unset($_SESSION['random_number']);
    } else {
        echo "Sorry, that's not correct. Try again!";
    }
}
?>
