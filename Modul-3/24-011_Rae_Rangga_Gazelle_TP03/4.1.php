<?php
$height = array("Andy" => "176", "Barry" => "165", "Charlie" => "170");

$height["David"] = "180";
$height["Edward"] = "175";
$height["Felix"] = "168";
$height["George"] = "172";
$height["Henry"] = "178";

foreach ($height as $name => $value) {
    echo $name . " is " . $value . " cm tall.<br>";
}
?>