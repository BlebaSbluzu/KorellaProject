<?php
require '../Layout/navbar.php'; //redirected here from navbar
require_once '../src/DBconnect.php';
include "./ProductSet.php";
require "../common.php";

?>
<link rel="stylesheet" href="../CSS/Main.css" type="text/css">



<div class="shopStyle">



<?php
// filter the key words
$category = $_GET['category'] ?? null;

if ($category) {
    // sql statement
//    $stmt = $connection->prepare("SELECT * FROM product WHERE category = :category");
//    $stmt->execute(['category' => $category]);
//
//    // fetch results
//    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
//    $statement = "SELECT * FROM product WHERE category = :category";

    $statement = "SELECT * FROM product WHERE Type like CONCAT('%','$category','%')";
    $search = new ProductSet("Search results for {$category}", $statement  );

    }
//    if ($products) {
//        foreach ($products as $product) {
//
//        }
     else {
        echo "<div>No products found in this category.</div>";
    }

//else {
//    echo "<div>Please select a category to see products.</div>";
//}
?>
</div>

