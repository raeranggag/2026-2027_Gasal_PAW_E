<?php
$height = array("Andy" => "176", "Barry" => "165", "Charlie" => "170");

$height["David"] = "180";
$height["Edward"] = "175";
$height["Felix"] = "168";
$height["George"] = "172";
$height["Henry"] = "178";

echo "Nilai indeks terakhir: " . end($height) . "<br>";

unset($height["Henry"]);

echo "Nilai indeks terakhir setelah dihapus: " . end($height);
?>