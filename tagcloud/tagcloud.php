<!DOCTYPE html>
<html>
<head>
    <title>Demo Tag Cloud</title>
    <link rel="stylesheet" type="text/css" href="styling.css">
</head>
<body>
    <main>


<div id="tagcloud">

<?php
/** this is our array of tags
 * We feed this array of tags and links the tagCloud
 * class method createTagCloud
 */
$tags = array(
        array('weight'  =>40, 'tagname' =>'tutorials', 'url'=>'http://www.phpro.org/tutorials/'),
        array('weight'  =>12, 'tagname' =>'examples', 'url'=>'http://www.phpro.org/examples/'),
        array('weight'  =>10, 'tagname' =>'contact', 'url'=>'http://www.phpro.org/contact/'),
        array('weight'  =>15, 'tagname' =>'quotes', 'url'=>'http://www.phpro.org/quotes/'),
        array('weight'  =>28, 'tagname' =>'devel', 'url'=>'http://www.phpro.org/phpdev/'),
        array('weight'  =>35, 'tagname' =>'manual', 'url'=>'http://www.phpro.org/en/index.html'),
        array('weight'  =>20, 'tagname' =>'articles', 'url'=>'http://www.phpro.org/articles/'),
);

 
/*** create a new tag cloud object ***/
$tagCloud = new tagCloud($tags);

echo $tagCloud -> displayTagCloud();

?>
</div>
</main>

</body>
</html>
<?php

class tagCloud{

/*** the array of tags ***/
private $tagsArray;


public function __construct($tags){
 /*** set a few properties ***/
 $this->tagsArray = $tags;
}

/**
 *
 * Display tag cloud
 *
 * @access public
 *
 * @return string
 *
 */
public function displayTagCloud(){
 $ret = '';
 shuffle($this->tagsArray);
 foreach($this->tagsArray as $tag)
    {
    $ret.='<a style="font-size: '.$tag['weight'].'px;" href="'.$tag['url'].'">'.$tag['tagname'].'</a>'."\n";
    }
 return $ret;
}
    

} /*** end of class ***/

?>