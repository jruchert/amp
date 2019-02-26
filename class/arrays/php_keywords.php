
<?php
echo "<br /> <b>PHP KEYWORDS</b><br />";
$keywords = array('__halt_compiler', 'abstract', 'and', 'array', 'as', 'break', 'callable', 'case', 'catch', 'class', 'clone', 'const', 'continue', 'declare', 'default', 'die', 'do', 'echo', 'else', 'elseif', 'empty', 'enddeclare', 'endfor', 'endforeach', 'endif', 'endswitch', 'endwhile', 'eval', 'exit', 'extends', 'final', 'for', 'foreach', 'function', 'global', 'goto', 'if', 'implements', 'include', 'include_once', 'instanceof', 'insteadof', 'interface', 'isset', 'list', 'namespace', 'new', 'or', 'print', 'private', 'protected', 'public', 'require', 'require_once', 'return', 'static', 'switch', 'throw', 'trait', 'try', 'unset', 'use', 'var', 'while', 'xor');


print_r($keywords);
echo nl2br( "  \r\n".$keywords); 

var_dump($keywords);

echo "<br /> <b>PHP CONSTANTS</b><br />";
$predefined_constants = array('__CLASS__', '__DIR__', '__FILE__', '__FUNCTION__', '__LINE__', '__METHOD__', '__NAMESPACE__', '__TRAIT__');

print_r($predefined_constants);

var_dump($predefined_constants);

echo "<br /> <b>PHP INTERFACES</b><br />";
$interfaces = array('ArithmeticError',
'AssertionError',
'DivisionByZeroError',
'Error',
'Throwable',
'ParseError',
'TypeError');
print_r($interfaces);
echo nl2br( "  \r\n".$interfaces); 

var_dump($interfaces);

echo "<br /> <b>PHP SPECIAL CLASSES</b><br />";
$special_classes = array('self','static','parent');
print_r($special_classes);
echo nl2br( "  \r\n".$special_classes); 

var_dump($special_classes);
?>