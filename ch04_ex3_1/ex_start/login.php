<?php
session_start();
if(isset($_POST['submit'])) {
$_SESSION['username'] = $_POST['username'];
}

<form method="post">
<input type="text" name="username">
<input type="submit" name="submit">
</form>