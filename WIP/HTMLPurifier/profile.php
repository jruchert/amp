<?php
include 'templates/header.php';
include('session.php');
?>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
 <form>
<input class="MyButton" type="button" value="Add a User" onclick="window.location.href='add_user.php'" />
</form> 
</div>

<?php include 'templates/footer.php'; ?>