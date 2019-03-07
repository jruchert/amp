<?php
$x = 100;
$i = 0.05;
$t = 2;
$npv = $x / pow(1+$i, $t);
echo $npv; // Output: 90.702947845805
?>