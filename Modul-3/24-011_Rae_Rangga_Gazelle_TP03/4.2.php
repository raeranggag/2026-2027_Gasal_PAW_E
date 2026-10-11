<?php
$weight = array("Andy" => "60", "Barry" => "65", "Charlie" => "70");

$names = array_keys($weight);
$values = array_values($weight);
$arrlength = count($weight);

for ($x = 0; $x < $arrlength; $x++) {
    echo $names[$x] . " weighs " . $values[$x] . " kg.<br>";
}
?>