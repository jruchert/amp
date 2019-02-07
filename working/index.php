<?php 

require_once 'config.php';

include "templates/header.php";
 
?>
 




<div class="add_product_form">
 <div class="login-container">
 <ul>
	<p class="add_product_form label">add a user</p><button class="topnav login-container button" type="submit"><a href="create.php"><strong>Create</strong></a></button>
	<p class="add_product_form label" >find a user</p><button class="topnav login-container button" type="submit"><a href="read.php"><strong>Read</strong></a></button>
	<p class="add_product_form label">edit a user</p><button class="topnav login-container button" type="submit"><a href="update.php"><strong>Update</strong></a></button>
	<p class="add_product_form label">delete a user</p><button class="topnav login-container button" type="submit"><a href="delete.php"><strong>Delete</strong></a></button>
</ul>
 </div>
 </div>
<?php include "templates/footer.php"; ?>
