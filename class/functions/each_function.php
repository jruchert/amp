<?php

echo "<h1>PHP each() Function</h1></br>";

echo "The each() function is an inbuilt function in PHP which basically returns an array with four elements,</br>
two elements (1 and Value) for the element value, and two elements (0 and Key) for the element key and moves </br>
the cursor forward.</br>";

echo "</br><b>Syntax:</b> </br>
<pre>each($ array)</pre> </br>";

echo "<b>Parameters:</b> <b>Array</b>
It specifies the array which is being
taken as input and used for each() function.</br>";

echo "<br><b>Return Value:</b> It returns the current element key and value which are an array with four elements out of
which two elements (1 and Value) for the element value, and two elements (0 and Key) for
the element key.It returns FALSE if there are no array elements.</br>";

echo "</br><b>CODE:</b> </br>";

echo "
<pre>

// PHP program to demonstrate working of each()
// for associative array.

$ a = array("101"=>"Ram", "105"=>"Geeta", "104"=>"Geek");

// each() function return in the array with four elements
// Two elements (1 and Value) for the element value which
// are Ram, and two  elements (0 and Key) for the element
// key which are Boy.
print_r (each($ a));

// Next set is printed as cursor is moved
print_r (each($ a));

</pre>";

?>