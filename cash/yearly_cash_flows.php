<?php
function npv($cashflows, $intRate)
{
  $npv = 0;
  $year = 0; // First cashflow at time 0
  foreach($cashflows as $cf) {
    $npv += $cf / pow(1 + $intRate, $year);
    $year++;
  }
  return($npv);
}

$test_cf = [-100, 10, 20, 30, 40, 50];
echo npv($test_cf, 0.05); // Output: 25.663934364013
?>