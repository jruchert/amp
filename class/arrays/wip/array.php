

<?php

echo '<p style="color: blue;"><b>Basic Structure </p></br>';
// set_element(array path, mixed value)
function set_element(&$path, $data) {
    return ($key = array_pop($path)) ? set_element($path, array($key=>$data)) : $data;
}

echo "<pre>

// set_element(array path, mixed value)
function set_element(&$path, $data) {
    return ($key = array_pop($path)) ? set_element($path, array($key=>$data)) : $data;
}
</pre>"; 



echo '<pre>echo
$path = array('base', 'category', 'subcategory', 'item');
$array = set_element($path, 'item_value');
print_r($array);
 ';

echo ' <p style="color: blue;"><b>Will display: </p></br>

<pre>Array
(
    [base] => Array
        (
            [category] => Array
                (
                    [subcategory] => Array
                        (
                            [item] => item_value
                        )
                )
        )
)
</pre>';

?>

