<?php
function npv_times($cashflows, $times, $intRate)
{
  $npv = 0;
  $i = 0;
  foreach($cashflows as $cf) {
    $year = $times[$i];
    $npv += $cf / pow(1 + $intRate, $year);
    $i++;
  }
  return($npv);
}

$test_cf = [-100, 10, 20, 30, 40, 50];
$test_times = [0, 1, 2, 3, 4, 5];
echo npv_times($test_cf, $test_times, 0.05); // Output: 25.663934364013

$test_times2 = [0, 3, 4, 5, 6, 9];
echo npv_times($test_cf, $test_times2, 0.05); // Output: 10.677272151561
?>