
	  


<?php
// generating an array with random even numbers between 1 and 1000

$numbers = array();
$array_size = 10;

// for loop runs as long as 2nd condition evaluates to true
for ($i=0;$i<$array_size;$i++) { 

      // always executes (as long as the for-loop runs)
      do { 
         $random = rand(1,1000);

     // if the random number is even (condition below is false), the do-while-loop execution ends
     // if it's uneven (condition below is true), the loop continues by generating a new random number
     } while (($random % 2) == 1);

     // even random number is written to array and for-loop continues iteration until original condition is met
     $numbers[] = $random; 
}

// sorting array by alphabet

asort($numbers);

// printing array
echo '<p style="color: blue;">OUTPUT</br></p>';
echo '<pre>';
print_r($numbers);
echo '</pre>';

echo '<p style="color: blue;">CODE </br></p>';
?>


<pre>

// generating an array with random even numbers between 1 and 1000

$numbers = array();
$array_size = 10;

// for loop runs as long as 2nd condition evaluates to true
for ($i=0;$i<$array_size;$i++) { 

      // always executes (as long as the for-loop runs)
      do { 
         $random = rand(1,1000);

     // if the random number is even (condition below is false), the do-while-loop execution ends
     // if it's uneven (condition below is true), the loop continues by generating a new random number
     } while (($random % 2) == 1);

     // even random number is written to array and for-loop continues iteration until original condition is met
     $numbers[] = $random; 
}

// sorting array by alphabet

asort($numbers);

// printing array

echo '<pre>';
print_r($numbers);
echo '</pre>';

</pre>

<?php
echo '<p style="color: blue;">TRY ME</br></p>';
?>
<iframe src="https://paiza.io/projects/e/uRMXWyfUjap8X33wd8JmhQ?theme=twilight" width="100%" height="550" scrolling="no" seamless="seamless"></iframe>
</br>
</br>

           
