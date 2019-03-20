<!DOCTYPE html>
<html lang="en">
<!-- the head section -->
<head>
    <title>AMP's Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<!-- the body section -->
<body>
<header>
    <h1>Product Manager</h1>
</header>
<main>
    <?php
    if (!empty($error)) {
        print '<p style="color: red; font-weight: bold;">' . $error . '</p>';
    }
    ?>
    <form action="login.php" method="post">
        <label>Username:<input name="user_name" type="text"></label><br>
        <label>Password:<input name="user_password" type="password"></label><br>
        <input name="login" type="submit" value="Login">
        <input name="login" type="submit" value="Join">
    </form>
</main>
<footer>
    <p>&copy; <?= date('Y'); ?> AMP's Guitar Shop, Inc.</p>
</footer>
</body>
</html>
