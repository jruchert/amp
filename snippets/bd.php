<?php
    $month = date("n"); //without leading zero(o)
    $year = date("Y"); //four digit format
    $st_year = "1940"; //Starting Year
    $month_names = array("January", "February", "March","April", "May", "June", "July", "August", "September", "October", "November", "December");

?>

<form name="Month_Year" id="Month_Year" action="<?php $SITE['REQURI'] ?>" method="post">
<select name="month" id="month">
<?php
for ($i=1; $i<=12; $i++) {
    echo "<option ";
    if ($i == $month) {
        echo "selected=\"selected\" ";
    }
    echo "value=\"$i\">", $month_names[$i-1], "</option>\n";
}
?>
</select>
<select name="year" id="year">
<?php
for ($i=$st_year; $i<=$year; $i++) {
    echo "<option ";
    if ($i == $year) {
        echo "selected=\"selected\" ";
    }
    echo "value=\"$i\">$i</option>\n";
}
?>
</select>

<input type="submit" name="submit" id="submit" value="Submit" />
</form>

<?php
$month = $_POST['month'];
$year = $_POST['year'];
$final_val = $month ."-". $year ;

echo "<b>Your birthday is:</b> <br>". $final_val;

?>