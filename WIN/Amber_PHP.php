<?php
 // get the data from the form
    $text_1 = filter_input(INPUT_POST, 'text_1');
    $text_2 = filter_input(INPUT_POST, 'text_2');
         
 
 
 if (isset($_POST['Associative'])) {
        echo "I pressed Associative";
    }         
         /* Creating an associative array */
         $Associative = array("hey"=>Joe);  
    
       /* Looping through an array using foreach */
         
       foreach ($Associative as $greeting => $name){  
          echo "The key in my ass array is: ".$greeting."\n</br>"; 
          echo "The value in my ass arry is: ".$name."\n</br>";  
     }  
   
    elseif (isset($_POST['Index'])) {
           echo "I pressed Index";
    }   
         $Index = array("1", "2", "3", "4", "5"); 
         while($_POST === $Index)) {
              echo "The value in".$Index.", at index[0] is" $Index[0];
              echo "The value in".$Index.", at index[1] is" $Index[1]; 
              echo "The value in".$Index.", at index[2] is" $Index[2]; 
              echo "The value in".$Index.", at index[0] is" $Index[3];
              echo "The value in".$Index.", at index[0] is" $Index[4]; 
               }\n
             ;
    
         }
 
?>

