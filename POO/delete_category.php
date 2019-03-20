<?php
declare(strict_types=1);
// Get ID
$categoryID = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
// Delete the product from the database
if (false === $categoryID) {
    $error = 'Invalid category name. Check input and try again.';
    include 'error.php';
    exit();
}
require_once 'database.php';
/**
 * Makes IDE code complete work better.
 *
 * @var PDO $db
 */
$query = 'DELETE FROM amp_guitar_shop.categories WHERE categoryID = :category_id';
try {
    /** @var PDOStatement $statement */
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $categoryID);
    $statement->execute();
    $statement->closeCursor();
} catch (\PDOException $e) {
    $error_message = $e->getMessage();
    include 'database_error.php';
    exit();
}
// Display the Product List page
header('Location: category_list.php', true, 303);
?>