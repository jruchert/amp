<!DOCTYPE html>
<html lang="en">
<!-- the head section -->
<head>
    <title>AMPS's Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<!-- the body section -->
<body>
<header><h1>AMP's Guitar Shop</h1></header>
<main>
    <h1>Database Error</h1>
    <p>There was an error connecting to the database.</p>
    <p>The database must be installed as described in the appendix.</p>
    <p>MySQL must be running as described in chapter 1.</p>
    <p>Error message: <?php echo $error_message; ?></p>
</main>
<footer>
    <p>&copy; <?= date('Y'); ?> AMP's Guitar Shop, Inc.</p>
</footer>
</body>
</html>
