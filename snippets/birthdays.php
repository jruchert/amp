<?php
$today = new DateTime();

$Bdays = array
(
    array("Lucienne Adkisson", date_create("1945-10-17")),
    array("Sheryll Nestle", date_create("1913-02-16")),
    array("Tim Pittman", date_create("1917-07-29")),
    array("Elmer Letts", date_create("1967-12-01")),
    array("Gino Massengale", date_create("1989-04-16")),
    array("Jeremy Wiggs ", date_create("1974-09-17")),
    array("Julian Bulloch ", date_create("1943-06 -21")),
    array("Joella Hinshaw  ", date_create("1932-06-25")),
    array("Mamie Burchill  ", date_create("1980-11-15")),
    array("Constance Segers  ", date_create("1944-06-30")),
    array("Jessy Pinkmann", date_create("1970-09-11")),
    array("Dudley Currie", date_create("1967-02-10"))
);

# echos the most recent birthdate into an array
$len = count($Bdays);
$minDiff = PHP_INT_MAX;
$minIndex = -1;

for ($i = 0; $i < $len; $i++) {
    $diff = $today->diff($Bdays[$i][1]);

    if ($diff->days < $minDiff) {
        $minIndex = $i;
        $minDiff = $diff->days;
    }
}

print_r($Bdays[$minIndex]);
?>

