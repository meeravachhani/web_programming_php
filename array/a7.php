<?php

$countries = array(
    "France" => "Paris",
    "Japan" => "Tokyo",
    "Australia" => "Canberra",
    "Brazil" => "Brasilia",
    "China" => "Beijing"
);

echo "Country-Capital Pairs:";
echo "<br>";
foreach ($countries as $country => $capital) {
    echo "$country: $capital<br>";
}
echo"<br>";
$countries["India"] = "New Delhi";

$countries["Australia"] = "Sydney";
echo "Updated Country-Capital Pairs:";
echo "<br>";
foreach ($countries as $country => $capital)
 {
    echo "$country: $capital<br>";
}
?>
