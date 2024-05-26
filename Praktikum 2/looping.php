<?php

/**
 * for looping
 */

for ($i=1; $i < 10; $i++) { 
    echo "$i";
}

echo "<br>";
/**
 * 
 *while looping
 */

$a = 1;
 while ($a <= 10) {
    echo "$a";
    $i++;
 }

 echo "<br>";
 /**do while loop */

 $b = 0;
 do {
    echo "$b";
    $b++
 } while ($a <= 10);

 echo "<br>";

 /**foreach loop */

 array = ['zalfa', 'nisa', 'khoirun'];

 foreach ($array as $key => $value) {
    echo "$key - $value";
 }
?>


 