<?php
$format = "Y-m-d"; // change to "m-d" to ignore years
$today = date($format);

$Bdays = array
(
    array("Lucienne Adkisson", strtotime("2017-10-17")),
    array("Sheryll Nestle", strtotime("2017-02-16")),
    array("Tim Pittman", strtotime("2017-07-29")),
    array("Elmer Letts", strtotime("2017-12-01")),
    array("Gino Massengale", strtotime("2016-04-16")),
    array("Jeremy Wiggs", strtotime("2017-09-17")),
    array("Julian Bulloch", strtotime("2017-06 -21")),
    array("Joella Hinshaw", strtotime("2017-06-25")),
    array("Mamie Burchill", strtotime("2017-11-15")),
    array("Constance Segers", strtotime("2017-06-30")),
    array("Jessy Pinkmann", strtotime("2017-09-11")),
    array("Dudley Currie", strtotime("2017-02-10"))
);


$tmp = 366;
$closest = ["", 0];
for ($i = 0; $i < count($Bdays); $i++)
{
    if (abs($today - date($format, $Bdays[$i][1])) < $tmp)
    {
        $tmp = abs($today - date($format, $Bdays[$i][1]));
        $closest = [$Bdays[$i][0], date("Y-m-d", $Bdays[$i][1])];
    }
}
echo "The upcoming birtday person is: <b>" . $Bdays[$i][0] . '</b> and his birthday is on: <b>' . date_format($Bdays[$i][1], "Y/m/d") . '</b>';


//https://www.w3resource.com/php-exercises/php-date-exercises.php
//https://www.w3resource.com/php-exercises/php-array-exercises.php



?>