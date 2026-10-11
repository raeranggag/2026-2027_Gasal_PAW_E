<?php
$mahasiswa = array(
    array("Alex", "220401", "0812345678"),
    array("Bianca", "220402", "0812345687"),
    array("Candice", "220403", "0812345665"),
    array("David", "220404", "0812345666"),
    array("Edward", "220405", "0812345667"),
    array("Felix", "220406", "0812345668"),
    array("George", "220407", "0812345669"),
    array("Henry", "220408", "0812345670")
);

echo "<table border='1'>";
echo "<tr><th>Name</th><th>NIM</th><th>Mobile</th></tr>";

foreach ($mahasiswa as $data) {
    echo "<tr>";
    echo "<td>" . $data[0] . "</td>";
    echo "<td>" . $data[1] . "</td>";
    echo "<td>" . $data[2] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>