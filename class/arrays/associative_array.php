<?php    

echo "<h1>Fun with Associative Arrays</h1>";

/* First method to create an associate array. */
$student_one = array("Math"=>95, "Physics"=>90,   
                  "Chemistry"=>96, "English"=>93,   
                  "Computer"=>98);  
 
 echo "<b>Calc Ave Function: Grade Average for student one:\n </br></b>";
//Calculate the average. 
$average = array_sum($student_one) / count($student_one);
//Print out the average. 
echo $average; 
/* Second method to create an associate array. */
$student_two["Math"] = 95;  
$student_two["Physics"] = 90;  
$student_two["Chemistry"] = 96;  
$student_two["English"] = 93;  
$student_two["Computer"] = 98;  
    
/* Accessing the elements directly */
echo "<h1>Grades for student one are:\n </br></h1>";
echo "<b>English:</b>" . $student_one["English"], "\n</br>";  
echo "<b>Computer:</b>" . $student_one["Computer"], "\n</br>";  

/* Creating an associative array */
$student_one = array("Math"=>95, "Physics"=>90,   
                  "Chemistry"=>96, "English"=>93,   
                  "Computer"=>98);  
    
    
/* Looping through an array using foreach */
echo "</br><b>Looping using foreach: Student One\n</b></br>";  
foreach ($student_one as $subject => $marks){  
    echo "Student one got ".$marks." in ".$subject."\n</br>";  
}  

/* Looping through an array using for */
echo "</br><b>\nLooping using for: Student One\n</b></br>";  
$subject = array_keys($student_one);  
$marks = count($student_one);   
    
for($i=0; $i < $marks; ++$i) {  
    echo $subject[$i] . ' ' . $student_one[$subject[$i]] . "\n</br>";  
} 
echo "</br><b>\n Each Function: Student One\n</b></br>";
// each() function return in the array with four elements
// Two elements (1 and Value) for the element value which
// are Ram, and two  elements (0 and Key) for the element
// key .
print_r (each($student_one));

// Next set is printed as cursor is moved
print_r (each($student_one));


 


echo "<br /> <b> Sum function Student One </b><br />";
function avrg()
{
 $count = func_num_args();
 $args = func_get_args();
 return (array_sum($args) / $count);
}
echo array_sum($student_one)."</br>";

echo "<br /> <b> End function </b><br />";
// end function print the last 
// element of the array. 
echo end($student_one)."</br>";

echo "</br><h1>Grades for student two are:\n </br></h1>";  
echo "<b>Math:</b>" . $student_two["Math"], "\n </br>";  
echo "<b>Physics:</b>" . $student_two["Physics"], "\n</br>";  
echo "<b>Chemistry:</b>" . $student_two["Chemistry"], "\n</br>";
 

/* Creating an associative array */
$student_two = array("Math"=>95, "Physics"=>90,   
                  "Chemistry"=>76, "English"=>98,   
                  "Computer"=>48); 
  
echo "<b>Calc Ave Function: Grade Average for student Two:\n </br></b>";
//Calculate the average. 
$average = array_sum($student_two) / count($student_two);
//Print out the average. 
echo $average;                  
 /* Looping through an array using foreach */
echo "</br><b>Looping using foreach: Student Two \n</b></br>";  
foreach ($student_two as $subject => $marks){  
    echo "Student two got ".$marks." in ".$subject."\n</br>";  
}    

/* Looping through an array using for */
echo "</br><b>\nLooping using for: Student Two\n</b></br>";  
$subject = array_keys($student_two);  
$marks = count($student_two);   
    
for($i=0; $i < $marks; ++$i) {  
    echo $subject[$i] . ' ' . $student_two[$subject[$i]] . "\n</br>";  
} 

echo "</br><b>\n Each Function: Student Two\n</b></br>";
// each() function return in the array with four elements
// Two elements (1 and Value) for the element value which
// are Ram, and two  elements (0 and Key) for the element
// key.
print_r (each($student_two));

// Next set is printed as cursor is moved
print_r (each($student_two));


echo "<br /> <b> End function </b><br />";
// end function print the last 
// element of the array. 
echo end($student_two)."</br>";


?> 