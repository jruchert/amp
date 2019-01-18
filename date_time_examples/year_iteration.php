<?php

/*** make sure this is set ***/
date_default_timezone_set('America/LosAngeles');

/**
 *
 * Get the age of a person in years at a given time
 *
 * @param       int     $dob    Date Of Birth
 * @param       int     $tdate  The Target Date
 * @return      int     The number of years
 *
 */
function getAge( $dob, $tdate )
{
        $age = 0;
        while( $tdate > $dob = strtotime('+1 year', $dob))
        {
                ++$age;
        }
        return $age;
}
?>

 


<?php

// example useage

/*** a date before 1970 ***/
$dob = strtotime("april 20 1961");

/*** another date ***/
$tdate = strtotime("june 2 2019");

/*** show the date ***/
echo getAge( $dob, $tdate );

?>
