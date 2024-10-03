<?php

$students = array(
    "meera" => array("Math" => 80, "Science" => 70, "English" => 90),
    "kashmira" => array("Math" => 90, "Science" => 85, "English" => 95),
    "riya" => array("Math" => 75, "Science" => 80, "English" => 85)
);

echo "Student Scores: \n";
foreach ($students as $name => $scores)
 {
    echo"<br>";
    echo "$name: ";
    foreach ($scores as $subject => $score)
     {
        echo "  $subject: $score\n";
    }
    echo "<br>";
}
?>
