<?php

/**
*
* Check minimum age. Defaults to 18 years
*
* @param        string  $dob    The date of birth
* @param        int     
* @return       bool
*
*/
function validate_age( $dob, $min_age=18 )
{
        $dob     = new DateTime( $dob );
        $min_age = new DateTime( 'now - ' . $min_age . 'years' );
        return $dob <= $min_age;
}

// the person must be at least 21 years of age
$age = 21;

// persons date of birth (dd-mm-yyyy) Edit to PROMPT for dates

//  $dob = '20-4-1981';

if( validate_age( $dob, $age ) === false )
{
    echo 'Person is not 21 years old';
}
else
{
    echo 'Person is 21 or over';
}

?>