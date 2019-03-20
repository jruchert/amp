<?php
require_once 'database.php';
// Get IDs
$productID = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
$categoryID = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
// Delete the product from the database
if (false !== $productID && false !== $categoryID) {
    $query = 'DELETE FROM amp_guitar_shop.products WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $productID);
    $statement->execute();
    $statement->closeCursor();
}
// Display the Product List page
header("Location: product_list.php?category_id=$categoryID", true, 303);
?>