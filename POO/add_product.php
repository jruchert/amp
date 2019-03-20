<?php
// Bit map options for filtering input from POST array.
$filterOptions = FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK;
// Get the product data
$categoryID = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
$code = filter_input(INPUT_POST, 'code', FILTER_SANITIZE_STRING, $filterOptions);
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING, $filterOptions);
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
// Validate inputs
if (null === $categoryID || false === $categoryID ||
    null === $code || null === $name || null === $price || false === $price) {
    $error = 'Invalid product data. Check all fields and try again.';
    include 'error.php';
    exit();
}
require_once 'database.php';
// Add the product to the database
/**
 * Makes IDE code complete work better.
 *
 * @var PDO $db
 */
$query = <<<'SQL'
INSERT INTO amp_guitar_shop.products
    (categoryID, productCode, productName, listPrice)
    VALUES
    (:category_id, :code, :name, :price)
SQL;
try {
    /** @var PDOStatement $statement */
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $categoryID);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':price', $price);
    $statement->execute();
    $statement->closeCursor();
} catch (\PDOException $e) {
    $error_message = $e->getMessage();
    include 'database_error.php';
    exit();
}
// Display the Product List page
header("Location: product_list.php?category_id=$categoryID", true, 303);
?>