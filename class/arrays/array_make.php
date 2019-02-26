<?php
  $array['name'] = "Toyota";
  $array['type'] = "Celica";
  $array['colour'] = "black";
  $array['manufactured'] = "1991";

  $array2[] = "Toyota";
  $array2[] = "Celica";
  $array2[] = "black";
  $array2[] = "1991";

  $array3['name'] = "Toyota";
  $array3[] = "Celica";
  $array3['color'] = "black";
  $array3[] = "1991";

  print_r($array);
  print_r($array2);
  print_r($array3);
  
  echo nl2br( "  \r\n".$array); 

  var_dump($array);
?>

<?php
  echo "<p>Manufacturer: <b>{$array['name']}</b> </p>";
  echo "<p>Brand: <b>{$array2['1']}</b><br /></p>";
  echo "<p>Color: <b>".$array3['color']."</b><br /></p>";
  echo "<p>Year Manufactured: <b>".$array3[1]."</b><br /></p>";
?>