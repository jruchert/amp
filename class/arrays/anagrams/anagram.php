<?php

class anagrams {

private $anagram_string;

/**
 *
 * @set the string
 *
 * @access public
 *
 * @param string $string
 *
 */
public function setAnagram($string){
 $this->anagram_string = $this->sanitizeString($string);
}

/**
 *
 * @remove any nasties
 *
 * @access private
 *
 * @return string
 *
 */
private function sanitizeString($string){
 return str_replace(' ', '', strtolower($string));
}

/**
 *
 * @filter our by first letter
 *
 * @access public
 *
 * @param string $char
 *
 * @return array
 *
 */
public function filterFirstLetter($char){
 $return_array = array();
 $array = $this->createAnagrams();
 foreach($array as $word)
    {
    if(substr($word, 0, 1) == $char)
        {
        array_push($return_array, $word);
        }
    }
 return $return_array;
}

/**
 *
 * @create the anangrams
 *
 * @access public
 *
 * @return array
 *
 */
function createAnagrams(){

/*** split the string into chars ***/
$input = str_split($this->anagram_string);

/*** output array(s) ***/
$output=array( array() );

/*** length of input ***/
$inputLength = sizeof($input);

for($scan=0; $scan<$inputLength; $scan++)
    {
    $pickLatest = array();
    $outputLength = sizeof($output);

    for($out=0; $out<$outputLength; $out++)
        {
        /*** add an input char to each entry ***/
        array_push($output[$out], $input[$scan]);
        $pickLatest[$out] = $output[$out];
        }
    $pickLatestLength = sizeof($pickLatest);
    for($a=0; $a<$pickLatestLength; $a++)
        {
        for($x=sizeof($pickLatest[$a])-1; $x>0; $x--)
            {
            $swap = $pickLatest[$a][$x-1];
            $pickLatest[$a][$x-1] = $pickLatest[$a][$x];
            $pickLatest[$a][$x] = $swap;
            if(!in_array($pickLatest[$a], $output))
                {
                $output[] = $pickLatest[$a];
                }
            }
        }
    }

return $this->sortAnagrams($output);
}

/**
 *
 * @sort array of letters into words and 
 * only return unique values (no duplicates)
 *
 * @access private
 *
 * @param array $array
 *
 * @return array
 *
 */
private function sortAnagrams($array){
$word_array = array();
foreach($array as $letters)
        {
    $word = implode('', $letters);
    if(!in_array($word, $word_array))
        {
        $ret[] = $word;
        }
        }
return $ret;
}

} /*** end of class ***/

/** example implentation **/

/*** a new anagrams object ***/
$anagrams = new anagrams;
/*** set the letters for the anagram ***/
$anagrams->setAnagram('lop');
/*** get only anagrams beginnig with the letter p ***/
$anagram_array = $anagrams->filterFirstLetter('p');
/*** loop over the array of words found ***/
echo 'found '.sizeof($anagram_array).' anagrams<br />';
foreach($anagram_array as $anagram )
        {
        echo $anagram,'<br />';
        }
echo '<hr />';

/*** get all the anagrams ***/

/*** set the letters for the anagram ***/
$anagram_array = $anagrams->createAnagrams();
/*** number of anagrams ***/
echo 'found '.sizeof($anagram_array).' anagrams<br />';
/*** loop over the array of words found ***/
foreach($anagram_array as $anagram )
        {
        echo $anagram,'<br />';
        }
?>