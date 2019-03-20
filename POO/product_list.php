<?php
declare(strict_types=1);
// Get category ID
$categoryID = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
if (false === $categoryID || null === $categoryID) {
    $categoryID = 1;
}
require_once 'database.php';
/**
 * Makes IDE code complete work better.
 *
 * @var PDO $db
 */
// Get name for selected category
$query= 'SELECT * FROM amp_guitar_shop.categories WHERE categoryID = :category_id';
try {
    /** @var PDOStatement $statement */
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $categoryID);
    $statement->execute();
    $currentCategory = $statement->fetch();
    $statement->closeCursor();
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include 'database_error.php';
    exit();
}
// Get all categories
$query = 'SELECT * FROM amp_guitar_shop.categories ORDER BY categoryID';
try {
    $statement = $db->prepare($query);
    $statement->execute();
    $categories = $statement->fetchAll();
    $statement->closeCursor();
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include 'database_error.php';
    exit();
}
// Get products for selected category
$query = 'SELECT * FROM amp_guitar_shop.products WHERE categoryID = :category_id ORDER BY productID';
try {
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $categoryID);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
} catch (PDOException $e) {
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
<header>
    <h1>Product Manager</h1>
</header>
<main>
    <h1>Product List</h1>
    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <nav>
            <ul>
                <?php foreach ($categories as $category) : ?>
                    <li><a href="product_list.php?category_id=<?= $category['categoryID']; ?>">
                            <?= $category['categoryName']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </aside>
    <section>
        <!-- display a table of products -->
        
        <table>
            <caption><h2>Category: <?= $currentCategory['categoryName']; ?></h2></caption>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?= $product['productCode']; ?></td>
                    <td><?= $product['productName']; ?></td>
                    <td class="right"><?= $product['listPrice']; ?></td>
                    <td>
                        <form action="delete_product.php" method="post">
                            <input type="hidden" name="product_id"
                                   value="<?= $product['productID']; ?>">
                            <input type="hidden" name="category_id"
                                   value="<?= $product['categoryID']; ?>">
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <th colspan="4" style="text-align: center;">New Product</th>
            </tr>
            <tr>
                <td>
                    <!--suppress HtmlFormInputWithoutLabel -->
                    <input form="add_product_form" type="text" name="code">
                </td>
                <td>
                    <!--suppress HtmlFormInputWithoutLabel -->
                    <input form="add_product_form" type="text" name="name">
                </td>
                <td>
                    <!--suppress HtmlFormInputWithoutLabel -->
                    <input form="add_product_form" type="text" name="price">
                </td>
                <td>
                    <form action="add_product.php" method="post" id="add_product_form">
                        <input type="hidden" name="category_id"
                               value="<?= $currentCategory['categoryID']; ?>">
                        <input type="submit" value="Add">
                    </form>
                </td>
            </tr>
        </table>
        <p><a href="category_list.php">List Categories</a></p>
    </section>
</main>
<footer>
    <p>&copy; <?= date('Y'); ?> AMP's Guitar Shop, Inc.</p>
</footer>
</body>
</html>
