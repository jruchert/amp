<?php

//not equal to 'True' (0) - does display

$myfunc = 'True'; 

if ($myfunc == 0){ 
echo 'This func is TRUE!<p style="color: blue;"><b> Jeremy shouts: HOLY F*CKBALLS -- A SQUIREL ! </b></p>
<img src="https://thumbs-prod.si-cdn.com/hCZxiSD9bX8sZeyv5GMaBANZeuM=/800x600/filters:no_upscale()/https://public-media.si-cdn.com/filer/52/f9/52f93262-c29b-4a4f-b031-0c7ad145ed5f/42-33051942.jpg" alt="icon" />

';
}

//Equal to False (1) -  doesn't display
$myfunc = 'False'; 

if ($myfunc == 1){ 

echo 'This statement is FALSE!!<p><b> Jeremy Ruchert </b></p> 
It do not matter what I write here anyway, cuz this will not print ';
}
?>