<?php


/* ****** structure ******

switch (n) {
    case label1:
        code to be executed if n=label1;
        break;
    case label2:
        code to be executed if n=label2;
        break;
    case label3:
        code to be executed if n=label3;
        break;
    ...
    default:
        code to be executed if n is different from all labels;
}

**** EXAMPLE *****

$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
*/

$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "<p style="color: red;">Your favorite color is red!</p>";
        break;
    case "blue":
        echo "<p style="color: blue;">Your favorite color is blue!</p>";
        break;
    case "green":
        echo "<p style="color: green;">Your favorite color is green!</p>";
        break;
    default:
        echo "Your favorite color is neither <p style="color: red;">red</p>,<p style="color: blue;"> blue</p>, nor <p style="color: green;">green!</p>";
}


?>