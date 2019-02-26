<?php 

echo '<b>OUTPUT</b></br>';
$i=1;
while($i<=5)
{
    $j=1;
    while($j<=$i)
    {
      echo"*&nbsp&nbsp";
      $j++;      
    }
    echo"<br>";
    $i++;
}
  echo '<p style="color: blue;"><b>I printed a triangle! </p></br>';
  
  echo '</br>
  CODE</br>
  
  <pre>
  
  $i=1;
while($i<=5)
{
    $j=1;
    while($j<=$i)
    {
      echo"*&nbsp&nbsp";
      $j++;      
    }
    echo"<br>";
    $i++;
}
  
  </pre>'
?>



<?php
echo 'Alt OUTPUT</br>';

// alt -- you can use:
$i=1;
while($i<=5):

    $j=1;
    while($j<=$i):
      echo"*&nbsp&nbsp";
      $j++;      
    endwhile;
    
    echo"<br>";
    $i++;
endwhile;

echo '<p style="color: RED;"><b>I printed a triangle - using a different method!</p> </br>';

echo ' Alt CODE:
<pre>

// alt -- you can use:
$i=1;
while($i<=5):

    $j=1;
    while($j<=$i):
      echo"*&nbsp&nbsp";
      $j++;      
    endwhile;
    
    echo"<br>";
    $i++;
endwhile;


</pre>'

?>




<?php

echo '</br> A note to anyone nesting a while loop inside a while loop....</br>

Consider the example below</br>
<p>CODE</p>
<p style="color: blue;"><b> <pre>
$one = array("10", "20", "30", "40"); 
$two = array("a", "b", "c", "d");

$i=0;
while($i < count($one)) {
    
    while($a = each($two)) { 
        echo $a[1]." - ".$one[$i].", "; 
    }\n
    $i++;
    
}</pre></b></p>
';
echo '<p style="color: blue;">This will return the following:
a - 10, b - 10, c - 10, d - 10
</br>
So in effect the main while loop is only doing one iteration... and not 4 as expected....
</p>
<p>Now the example below works as expected..</p>
CODE: </br>
<p style="color: blue;"><b><pre>

$i=0;\n
while($i < count($one)) {
    
    foreach($two as $a) {
        echo $a." - ".$one[$i]."\n"; 
    }
    $i++;
    
}</pre></b></p>
';
echo '<p style="color: blue;">by returning:
a - 10, b - 10, c - 10, d - 10, a - 20, b - 20, c - 20, d - 20, a - 30, b - 30, c - 30, d - 30, a - 40, b - 40, c - 40, d - 40
</p>
<p>So there is clearly a difference on how while statements work in comparison to other looping structures.</p>

<p style="color: RED;">I think it would be good to have an explaination of this strange behaviour.</p></br>';


echo '<p style="color: blue;">MORE WHILE EXAMPLE CODE</p>';
?>

 

<pre>


 
$finaldir = ' download' ;

$finished = false;                       // were not finished yet (we just started)
while ( ! $finished ):                   // while not finished
  $rn = rand();                          // random number
  $outfile = $finaldir.'/'.$rn.'.gif';   
                                         // output file name
  if ( ! file_exists($outfile) ):        // if file DOES NOT exist...
    $finished = true;                    // ...we are finished  
  endif;
  
 
endwhile;                                // (if not finished, re-start WHILE loop)</pre> 

<?php

echo '</br>O.k, Jeremy - this one is for you</br>';


$brush_price = 5; 
$counter = 10;

echo "<table border=\"1\">";
echo "<tr><th>Quantity</th>";
echo "<th>Price</th></tr>";
while ( $counter <= 100 ) {
	echo "<tr><td>";
	echo $counter;
	echo "</td><td>";
	echo $brush_price * $counter;
	echo "</td></tr>";
	$counter = $counter + 10;
}
echo "</br></table></br>";

echo'</br><p style="color: blue;">MORE!<p></br>';

echo 'OUTPUT:</br>';
$counter = 1;

while ( $counter <= 10 ) {
  echo "I've counted to $counter<br />";
  $counter++;
}

echo "All done!</br>";

echo '</br>CODE</br>';


?>

<pre>$counter = 1;

while ( $counter <= 10 ) {
  echo "I've counted to $counter<br />";
  $counter++;
}

echo "All done!";</pre>
<?php
echo '<p style="color: blue;">TRY ME</br></p>';
?>
<iframe src="https://paiza.io/projects/e/uRMXWyfUjap8X33wd8JmhQ?theme=twilight" width="100%" height="550" scrolling="no" seamless="seamless"></iframe>
</br>
</br>

