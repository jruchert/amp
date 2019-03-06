


<!DOCTYPE html>
<html lang="en">

<!-- the head section -->
<head>
    <title>My Template</title>
</head>

<!-- the body section -->
<body>
    <header><h1>Where am I now?</h1></header>

    <main>
        <h1>This is your title</h1>
        <form action="Amber_PHP.php" method="post"
              id="application_form">

            <label>Text1:</label>
            <input type="text" name="text1"><br>

            <label>Text2:</label>
            <input type="text" name="text2"><br>

            <label>&nbsp;</label>
            <input type="submit" name="Associative" value="Associative"><br>
            <span><?php echo $Associative($text_1); ?></span><br>
            <label>&nbsp;</label>
            <input type="submit" name="Index" value="Index"><br>
            <span><?php echo $Index($Itext_2); ?></span><br>
        </form>
    </main>

    <footer>
        <p>My Template.</p>
    </footer>
</body>
</html>