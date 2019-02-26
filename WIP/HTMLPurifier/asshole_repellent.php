<?php
function sanitize($input) {
    if (is_array($input)) {
        foreach($input as $var=>$val) {
            $output[$var] = sanitize($val);
        }
    }
    else {
        if (get_magic_quotes_gpc()) {
            $input = stripslashes($input);
        }
        $input  = cleanInput($input);
        $output = mysql_real_escape_string($input);  
        
    }
    return $output;
}

/*function text_global($poster) {
  $poster = stripslashes();
  $poster = str_replace(Array("\n", "'", "‘", "’", "′", "“", "”", "„", "″", '"'), Array("", "’", "’", "’", "’", """, """, """, """, """), $poster);
    
  /*Strip out all bbcode */
  //$poster = preg_replace(‘/\[(.*?)\](.*?)\[\/?(.*?)\]/iu’, ‘\\2’, $poster);

// Convert the ok markup to bbcode
  //$poster = preg_replace(array_keys($this->markup), $this->markup, $poster);

// Strip out all html tags
  //$poster = preg_replace(‘/\(.*?)\/iu’, ‘\\2’, $poster);

// Run strip tags to make sure we got everything
  //$poster = strip_tags($poster);

// Replace double quotes with single quotes
  //$poster = preg_replace(‘/(“)+/u’, “‘”, $poster);

// Matche one or more spaces and replaces it with a single space
  //$poster = preg_replace(‘/( )+/u’, ‘ ‘, trim($poster));

                  
    //return $poster;
 

?>