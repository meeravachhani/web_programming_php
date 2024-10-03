<?php
$cities = array(
  "Rome" => array("population" => 2873000,"area" => 1287,"country" => "Italy"),

  "Paris" => array("population" => 2150000, "area" => 105, "country" => "France"),

  "Berlin" => array("population" => 6700000,"area" => 892, "country" => "Germany"),
  
);

echo "City Information:\n";
foreach ($cities as $city => $info) {
  echo "$city:\n";
  echo "  Population: " . $info["population"] . "\n";
  echo "  Area: " . $info["area"] . " km²\n";
  echo "  Country: " . $info["country"] . "\n";
  echo "<br>";
}
?>
