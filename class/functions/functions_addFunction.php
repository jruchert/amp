<html>

   <head>
      <title>Passing Argument by Reference</title>
   </head>

   <body>

<?php

      echo "<p><b>Passing Arguments by Reference</b></p>";
      echo "It is possible to pass arguments to functions by reference. This means that a reference to the variable is manipulated </br>
      by the function rather than a copy of the variable's value.</br>
      Any changes made to an argument in these cases will change the value of the original variable. You can pass an argument by </br>
      reference by adding an ampersand to the variable name in either the function call or the function definition.</br>
      Following example depicts both the cases."
      ;

echo "</br><b>PHP FUNCTIONS: addFunction CODE</b></br>";
echo "
<pre>
 function addFive($num) {
            $num += 5;
         }

         function addSix(&$num) {
            $num += 6;
         }

         $orignum = 10;
         addFive( $orignum );
</pre>"
;


         function addFive($num) {
            $num += 5;
         }

         function addSix(&$num) {
            $num += 6;
         }

         $orignum = 10;
         addFive( $orignum );

#echo "</br><b>PHP FUNCTIONS: addFunction OUTPUT CODE</b></br>";
#echo "<pre>echo "Original Value is $orignum";
#</pre>"
#;

echo "</br><b>PHP FUNCTIONS: addFunction OUTPUT</b></br>";

echo "Original Value is $orignum <br />";

echo "</br><b>PHP FUNCTIONS: addFunction Reference OUTPUT CODE</b></br>";
echo "<pre>
                addSix($orignum);
                echo "Original Value is $orignum"; </pre>";

echo "</br><b>PHP FUNCTIONS: addFunction by reference OUTPUT</b></br>";


addSix( $orignum );

echo "Original Value is $orignum <br />"
         ;
 ?>

   </body>
</html>