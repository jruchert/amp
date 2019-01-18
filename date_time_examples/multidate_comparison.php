<?php

/*** set the default timezone ***/
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
        $dob = new DateTime( $dob );
        $age = 0;
        $now = new DateTime( $tdate );
        while( $dob->add( new DateInterval('P1Y') ) < $now )
        {
                $age++;
        }
        return $age;
}

?>

<?php

/*** a date before 1970 ***/
$dob = "April 20 1961";

/*** another date ***/
$tdate = "21-04-2009";

/*** show the date ***/
echo getAge( $dob, $tdate );

?>