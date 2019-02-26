/* ?php
$s = time();
for ($i = 0; $i < 1000000000; ++$i) {
  $x = $i%10;
  if ($x == 1) {
    $y = $x * 1;
  } elseif ($x == 2) {
    $y = $x * 2;
  } elseif ($x == 3) {
    $y = $x * 3;
  } elseif ($x == 4) {
    $y = $x * 4;
  } elseif ($x == 5) {
    $y = $x * 5;
  } elseif ($x == 6) {
    $y = $x * 6;
  } elseif ($x == 7) {
    $y = $x * 7;
  } elseif ($x == 8) {
    $y = $x * 8;
  } elseif ($x == 9) {
    $y = $x * 9;
  } else {
    $y = $x * 10;
  }
}
echo("if: ".(time() - $s)."sec\n");

$s = time();
for ($i = 0; $i < 1000000000; ++$i) {
  $x = $i%10;
  switch ($x) {
  case 1:
    $y = $x * 1;
    break;
  case 2:
    $y = $x * 2;
    break;
  case 3:
    $y = $x * 3;
    break;
  case 4:
    $y = $x * 4;
    break;
  case 5:
    $y = $x * 5;
    break;
  case 6:
    $y = $x * 6;
    break;
  case 7:
    $y = $x * 7;
    break;
  case 8:
    $y = $x * 8;
    break;
  case 9:
    $y = $x * 9;
    break;
  default:
    $y = $x * 10;
  }
}

//not equal to 'True' (0) - does display

$myfunc = 'True'; 

if ($myfunc == 1){ 
echo '<p style="color: blue;"><b> The answer to the eternal question " what is faster?":
1 000 000 000 iterations. </b></p>
<img src="https://www.infobip.com/assets/uploads/blog/step_by_step_php_tutorial_card.jpg" alt="icon" />
';
}


echo '("switch: ".(time() - $s)."sec\n")';
*/