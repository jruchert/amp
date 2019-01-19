<?php

/**
 *
 * @Get how many years old
 *
 * @param string
 *
 * @return int
 *
 */
function yearsOld($birthday)
{
    if (($birthday = strtotime($birthday)) === false)
    {
        return false;
    }
    for ($i = 0; strtotime("-$i year") > $birthday; ++$i);
    return $i - 1;
}  



 /*** example usage ***/
 $birthday = 'april 20 1961';
 
 echo yearsOld($birthday).' years old';
 
?>