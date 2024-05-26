<?php

$array = [1,2,3,4,5];

echo $array[1];
echo "<br><pre>";
print_r($array);
echo "<br>";

$umur = ["zalfa" => 19, "anisa" => 20, "zulfa" => 30];
$umur['mamat'] = 10;
$umur['mumun'] = 50;

echo $array[1];
echo "<br><pre>";
print_r($umur);
echo "<br>";

foreach ($umur as $key  => $value) {
    echo "Namanya : $key <br> Umurnya : $value <br>
    ";
}



?>
