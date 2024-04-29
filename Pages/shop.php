<?php
require '../Layout/navbar.php'; //redirected here from navbar
require_once '../src/DBconnect.php';



// filter the key words
$category = $_GET['category'] ?? null;

if ($category) {
    // sql statement
    $stmt = $conn->prepare("SELECT * FROM product WHERE category = :category");
    $stmt->execute(['category' => $category]);

    // fetch results
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($products) {
        foreach ($products as $product) {

        }
    } else {
        echo "<div>No products found in this category.</div>";
    }
} else {
    echo "<div>Please select a category to see products.</div>";
}
?>


