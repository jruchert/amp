<?php
require_once 'database.php';
/**
 * Makes IDE code complete work better.
 *
 * @var PDO $db
 */
// Get all categories
$query = 'SELECT * FROM amp_guitar_shop.categories ORDER BY categoryID';
try {
    /** @var PDOStatement $statement */
    $statement = $db->prepare($query);
    $statement->execute();
    $categories = $statement->fetchAll();
    $statement->closeCursor();
} catch (\PDOException $e) {
    $error_message = $e->getMessage();
    include 'database_error.php';
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- the head section -->
<head>
    <title>AMP's Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<!-- the body section -->
<body>
<header><h1>Category Manager</h1></header>
<main>
    
    <table>
        <caption><h1>Category List</h1></caption>
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>
        <?php foreach ($categories as $category) : ?>
            <tr>
                <td><?= $category['categoryName']; ?></td>
                <td>
                    <form action="delete_category.php" method="post">
                        <input type="hidden" name="category_id"
                               value="<?= $category['categoryID']; ?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <th colspan="2" style="text-align: center;">New Category</th>
        </tr>
        <tr>
            <td>
                <form action="add_category.php" method="post" id="add_category_form">
                    <!--suppress HtmlFormInputWithoutLabel -->
                    <input type="text" name="name">
                </form>
            </td>
            <td>
                <!--suppress HtmlFormInputWithoutLabel -->
                <input form="add_category_form" type="submit" value="Add">
            </td>
        </tr>
    </table>
    <p><a href="product_list.php">List Products</a></p>
</main>
<footer>
    <p>&copy; <?= date('Y'); ?> AMP's Guitar Shop, Inc.</p>
</footer>
</body>
</html>
