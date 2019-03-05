<?php 

echo "<h1>PHP end() Function</br></h1>";

echo "The end() function is an inbuilt function in PHP and is used to find the last element of the given array.</br> 
The end() function changes the internal pointer of an array to point to the last element and returns the value of the last element.</br>";

echo "</br><b>Syntax:</b> </br>
<pre>end($ array)</pre> </br>"
;

echo "<b>Parameters:</b> This function accepts a single parameter. It is the array of which the last element we 
want to find.</br>";

echo "<br><b>Return Value:</b> It returns the value of the last element of the array on success but FALSE on failure i.e, when the <br>
array is empty.</br>";

echo "</br><b>CODE:</b> </br>";
echo "<pre>

// input array 
$arr = array('Ram', 'Shita', 'Geeta'); 
  
// end function print the last 
// element of the array. 
echo end($ arr);  </pre>";

?>