<?php

/*** dont forget to set this ***/
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
        $d1 = new DateTime( $dob );
        $d2 = new DateTime($tdate );
        $age = $d2->diff( $d1 );
        return $age->y;
}


// examples //

// ?php

/*** a date before 1970 ***/
//$dob = "April 20 1961";

/*** another date ***/
//$tdate = "21-04-2009";

/*** show the date ***/
//echo getAge( $dob, $tdate );

// ?

?>

