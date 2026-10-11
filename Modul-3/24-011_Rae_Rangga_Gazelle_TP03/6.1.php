<?php

$fruits = array("Avocado", "Blueberry", "Cherry");

array_push($fruits, "Durian");
echo "array_push: ";
print_r($fruits);
echo "<br><br>";

$fruits2 = array("Elderberry", "Fig");
echo "array_merge: ";
print_r(array_merge($fruits, $fruits2));
echo "<br><br>";

$data = array("a" => "Avocado", "b" => "Blueberry", "c" => "Cherry");
echo "array_values: ";
print_r(array_values($data));
echo "<br><br>";

echo "array_search: ";
echo array_search("Blueberry", $fruits);
echo "<br><br>";

$numbers = array(1, 2, 3, 4, 5, 6);
echo "array_filter: ";
print_r(array_filter($numbers, function ($value) {
    return $value > 3;
}));
echo "<br><br>";

$numbers = array(4, 2, 5, 1, 3);
sort($numbers);
echo "sort: ";
print_r($numbers);
echo "<br><br>";

$height = array("Charlie" => 170, "Andy" => 176, "Barry" => 165);
ksort($height);
echo "ksort: ";
print_r($height);

?>