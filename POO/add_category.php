<?php
declare(strict_types=1);
// Bit map options for filtering input from POST array.
$filterOptions = FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK;
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING, $filterOptions);
if (null === $name || false === $name) {
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
$query = <<<'SQL'
INSERT INTO amp_guitar_shop.categories
    (categoryName)
    VALUES
    (:name)
SQL;
try {
    /** @var PDOStatement $statement */
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $statement->closeCursor();
} catch (\PDOException $e) {
    $error_message = $e->getMessage();
    include 'database_error.php';
    exit();
}
header('Location: category_list.php', true, 303);
?>