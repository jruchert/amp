

    <?php
       /* Asshole repellent */
        $postfilter =
          array(
            'user_tasks'    =>    array('filter' => FILTER_SANITIZE_STRING, 'flags' => !FILTER_FLAG_STRIP_LOW),    // removes tags. formatting code is encoded -- add nl2br() when displaying
        );
        $revised_post_array = filter_input_array(INPUT_POST, $postfilter);    // must be referenced via a variable which is now an array that takes the place of $_POST[]
          echo (nl2br($revised_post_array['user_tasks']));    // here we use nl2br() for the displayed value, for the ['user_tasks'] array value so that the newlines are formatted ?>
    
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
         <?php 
     /* INTRO */
          echo '<b>What does this do?</b><i></br><b>The act of calling bullshit:</b> When one person says something that another person</br>
          is not in agreement with, that second person may "call bullshit" on whatever the first person said. By doing this, they</br>
          are expressing their disagreement with what the person said in a humorous and yet serious way.</br> </i><p>This app will
          take this act a step further --- by calculating the percentage of said bullshit.</p> ';?>
    <?php 
    /* Leonardo da Pisa, Mathmetician, fibanocci creator */
          echo '<img height="336px" width="500px" src="https://wp-media.patheos.com/blogs/sites/268/2012/09/I-call-bullshit.jpg"/> </br>'; ?>

        <p><b>Input a string heavy in BS:</b></p> <p class="BS">'I bring your attention today to new benchmarks in quality driven development within the marketting sector. 
By adopting a proactive attitude to client relationships, we can develop a mindset with client focus as its central theme, 
while providing value added service guarentees that leverage new markets for us.'</p>

<p><b>Expected Output:</b></p><p>This program will return, based on a collection of predefined words written in a function, a percentage of how full of BS the inputed string was. (See below)</p>

<p><b>OUTPUT:</b></p>
        <span><?php

/*** a string heavy in bs ***/
$string = '<i>I bring your attention today to new benchmarks in quality driven development within the marketting sector. 
By adopting a proactive attitude to client relationships, we can develop a mindset with client focus as its central theme, 
while providing value added service guarentees that leverage new markets for us.</i>';

$bs = bullshitMeter( $string );

echo "<b>This string is $bs percent bullshit</b>";

?></span>

    </main>
</body>
</html>
