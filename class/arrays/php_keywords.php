

<?php

echo "<br /> <b>PHP KEYWORDS each Function</b><br />";
$keywords = array('__halt_compiler', 'abstract', 'and', 'array', 'as', 'break', 'callable', 'case', 'catch', 'class', 'clone', 'const', 'continue', 'declare', 'default', 'die', 'do', 'echo', 'else', 'elseif', 'empty', 'enddeclare', 'endfor', 'endforeach', 'endif', 'endswitch', 'endwhile', 'eval', 'exit', 'extends', 'final', 'for', 'foreach', 'function', 'global', 'goto', 'if', 'implements', 'include', 'include_once', 'instanceof', 'insteadof', 'interface', 'isset', 'list', 'namespace', 'new', 'or', 'print', 'private', 'protected', 'public', 'require', 'require_once', 'return', 'static', 'switch', 'throw', 'trait', 'try', 'unset', 'use', 'var', 'while', 'xor');

print_r($keywords);
echo nl2br( "  \r\n".$keywords); 
// PHP code to illustrate the working 
//  of var_dump() Function  
var_dump($keywords);

echo "<br /> <b>PHP KEYWORDS end function </b><br />";


// end function print the last 
// element of the array. 
echo end($keywords)."</br>";

echo "<br /> <b>PHP KEYWORDS var_dump function int</b><br />";
// PHP code to illustrate the working 
//  of var_dump() Function  
  
var_dump(var_dump(2, 2.1, TRUE, array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64))); 
  


echo "<br /> <b>PHP FUNCTION: CALL ARRAY VALUE BY #</b><br />";
$keywords = array_values($keywords);
echo nl2br( "  \r\n".$keywords[0]); //bar
echo nl2br( "  \r\n".$keywords[1]); //bin
echo nl2br( "  \r\n".$keywords[2]."</br>"); //ipsum

echo "<br /> <b>PHP CONSTANTS each Function</b><br />";
$predefined_constants = array('__CLASS__', '__DIR__', '__FILE__', '__FUNCTION__', '__LINE__', '__METHOD__', '__NAMESPACE__', '__TRAIT__');

print_r($predefined_constants);
// PHP code to illustrate the working 
//  of var_dump() Function  
var_dump($predefined_constants);

echo "<br /> <b>PHP CONSTANTS end function </b><br />";
// end function print the last 
// element of the array. 
echo end($predefined_constants)."</br>";


echo "<br /> <b>PHP PREDEFINED CONSTANTS var_dump function int</b><br />";
// PHP code to illustrate the working 
//  of var_dump() Function  
  
var_dump(var_dump(2, 2.1, TRUE, array(1, 2, 3, 4,5,6,7))); 
  
  
echo "<br /> <b>PHP CALL ARRAY VALUE BY #</b><br />";
$predefined_constants = array_values($predefined_constants);
echo nl2br( "  \r\n".$predefined_constants[0]); //bar
echo nl2br( "  \r\n".$predefined_constants[1]); //bin
echo nl2br( "  \r\n".$predefined_constants[2]."</br>"); //ipsum

echo "<br /> <b>PHP INTERFACES each Function</b><br />";
$interfaces = array('ArithmeticError',
'AssertionError',
'DivisionByZeroError',
'Error',
'Throwable',
'ParseError',
'TypeError');
print_r($interfaces);

echo nl2br( "  \r\n".$interfaces); 
// PHP code to illustrate the working 
//  of var_dump() Function  
var_dump($interfaces);

echo "<br /> <b>PHP INTERFACES end function </b><br />";
// end function print the last 
// element of the array. 
echo end($interfaces)."</br>";

echo "<br /> <b>PHP INTERFACES var_dump function int</b><br />";
// PHP code to illustrate the working 
//  of var_dump() Function  
  
var_dump(var_dump(2, 2.1, TRUE, array(1, 2, 3, 4,5,6,7)));

echo "<br /> <b>PHP CALL ARRAY VALUE BY #</b><br />";
$interfaces = array_values($interfaces);
echo nl2br( "  \r\n".$interfaces[0]); //bar
echo nl2br( "  \r\n".$interfaces[1]); //bin
echo nl2br( "  \r\n".$interfaces[2]."</br>"); //ipsum

echo "<br /> <b>PHP SPECIAL CLASSES each Function</b><br />";
$special_classes = array('self','static','parent');


print_r($special_classes);
echo nl2br( "  \r\n".$special_classes); 
// PHP code to illustrate the working 
//  of var_dump() Function  
var_dump($special_classes);

echo "<br /> <b>PHP SPECIAL CLASSES end function </b><br />";
// end function print the last 
// element of the array. 
echo end($special_classes)."</br>";

echo "<br /> <b>PHP SPECIAL CLASSES var_dump function int</b><br />";
// PHP code to illustrate the working 
//  of var_dump() Function  
  
var_dump(var_dump(2, 2.1, TRUE, array(1, 2, 3)));

echo "<br /> <b>PHP CALL ARRAY VALUE BY #</b><br />";
$special_classes = array_values($special_classes);
echo nl2br( "  \r\n".$special_classes[0]); //bar
echo nl2br( "  \r\n".$special_classes[1]); //bin
echo nl2br( "  \r\n".$special_classes[2]."</br>"); //ipsum
?>