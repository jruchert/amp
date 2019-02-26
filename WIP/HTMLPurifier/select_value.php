<?php

if (isset($_POST['favsquirell'])){
    $favsquirell = $_POST['favsquirell'];
} else if (isset($_GET['favsquirell'])) {
    $favsquirell = $_GET['favsquirell'];
} else {
    $favsquirell = 'chooseFavsquirell';
}
$favsquirell = "Radical";

switch ($favsquirell) {
    case "Radical":
        $iframe = 'https://www.youtube.com/embed/4yikpWtIFU8'; />
        break;
    case "veryOrganized":
        $iframe = 'https://www.youtube.com/embed/4yikpWtIFU8';/>
        break;
    case "sadFace":
        $iframe = 'https://www.youtube.com/embed/ZUjQtJGaSpk';/>
        break;
    
    default:
        $iframe = "https://earthsky.org/earth/flying-squirrels-go-pink-in-ultraviolet"; />
    case 'choose':
        $iframe = 'select_value.php';
        break;

}

?>