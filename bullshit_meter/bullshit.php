<?php

/**
 *
 * Function to measure bs in a string
 *
 * @param    string     $string
 * @return    float
 *
 */
function bullshitMeter( $string )
{
    /*** example bs ***/
    $bs = array (
        'synergy',
        'strategic fit',
        'gap analysis',
        'revisit',
        'bandwidth',
        'best practice',
        'bottom line',
        'hardball',
        'out of the loop',
        'benchmark',
        'value added',
        'proactive',
        'win-win',
        'think outside the box',
        'fast track',
        'result driven',
        'empower',
        'knowledge base',
        'total quality',
        'quality driven',
        'touch base',
        'mindset',
        'client focus',
        'ball park',
        'game plan',
        'independent it consultant',
        'automatrix',
        'leverage'
        );

    /*** make the string lower case for comparison ***/
    $string = strtolower( $string );

    /*** check the length of the string ***/
    $text_count = strlen( $string );

    /*** set bs count to zero ***/
    $bs_count = 0;
    foreach( $bs as $text )
    {
        if( $pos = strpos($string, $text ) )
        {
            /*** get the number of occurances ***/
            $occurances = substr_count($string, $text);

            /*** get the lenth of the bs ***/
            $bs_count += strlen( $text ) * $occurances;
        }
    }

    /*** do the percentage ***/
    $percent = (int) $bs_count/ (int)$text_count * 100;

    /*** round to two places ***/
    return round( $percent, 2 );
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>BS Meter</title>
    <link rel="stylesheet" type="text/css" href="mainr.css">
</head>
<body>
    <main>
        <h1>I call BULLSHIT!</h1>
        
         <br> 
        <p><b>Input a string heavy in BS:</b></p> <p class="BS">'I bring your attention today to new benchmarks in quality driven development within the marketting sector. 
By adopting a proactive attitude to client relationships, we can develop a mindset with client focus as its central theme, 
while providing value added service guarentees that leverage new markets for us.'</p>

<p><b>Expected Output:</b></p><p>This program will return, based on a collection of predefined words written in a function, a percentage of how full of BS the inputed string was. (See below)</p>

<p><b>OUTPUT:</b></p>
        <span><?php

/*** a string heavy in bs ***/
$string = 'I bring your attention today to new benchmarks in quality driven development within the marketting sector. 
By adopting a proactive attitude to client relationships, we can develop a mindset with client focus as its central theme, 
while providing value added service guarentees that leverage new markets for us.';

$bs = bullshitMeter( $string );

echo "<b>This string is $bs percent bullshit</b>";

?></span>

    </main>
</body>
</html>
