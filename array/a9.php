<?php
$ceu = array(
  "Italy" => "Rome",
  "Luxembourg" => "Luxembourg",
  "Belgium" => "Brussels",
  "Denmark" => "Copenhagen",
  "Finland" => "Helsinki",
  "France" => "Paris",
  
);

ksort($ceu);
echo "Sorted by keys (countries) in ascending order:<br>";
foreach ($ceu as $country => $capital)
 {
  echo "$country: $capital<br>";
}
echo "<br>";
arsort($ceu);
echo "<br>Sorted by values (capitals) in descending order:<br>";
foreach ($ceu as $country => $capital) {
  echo "$country: $capital<br>";
}
?>
