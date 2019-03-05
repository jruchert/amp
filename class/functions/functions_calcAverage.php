
<?php

echo "<h1><b>PHP FUNCTIONS: calcAverage</b></h1><br />";
function calcAverage() {
    // initialize value to be used in calculation
    $total = 0;							

    // find out how many arguments were given
    $arguments = func_num_args();     	

    // loop to process each argument separately
    for ($i = 0; $i < $arguments; $i++) {
        // add the value in the current argument to the total
        $total += func_get_arg($i);
    }
    // after adding all arguments, calculate the average
    $average = $total / $arguments;		

    // return the average
    return $average;
}

// echo code
echo "</br><b>PHP FUNCTIONS: calcAverage CODE</b></br>";
echo "
<pre>function calcAverage() {
    // initialize value to be used in calculation
    $total = 0;							

    // find out how many arguments were given
    $arguments = func_num_args();     	

    // loop to process each argument separately
    for ($i = 0; $i < $arguments; $i++) {
        // add the value in the current argument to the total
        $total += func_get_arg($i);
    }
    // after adding all arguments, calculate the average
    $average = $total / $arguments;		

    // return the average
    return $average;
}</pre></br>";

echo "</br><b>PHP FUNCTIONS: calcAverage OUTPUT CODE</b>";

echo "<pre> 

// invoke the function with 5 arguments
echo calcAverage(44, 55, 66, 77, 88);	

</pre>";

echo "</br><b>PHP FUNCTIONS: calcAverage OUTPUT </b></br>";
// invoke the function with 5 arguments
echo calcAverage(44, 55, 66, 77, 88);	

echo "</br></br><b>PHP FUNCTIONS: calcAverage OUTPUT CODE</b>";

echo "<pre> 
// invoke the function with 8 arguments
echo calcAverage(12, 34, 56, 78, 90, 9, 8, 7);
</pre>";

echo "</br><b>PHP FUNCTIONS: calcAverage OUTPUT</b></br>";
// invoke the function with 8 arguments
echo calcAverage(12, 34, 56, 78, 90, 9, 8, 7);
?>

