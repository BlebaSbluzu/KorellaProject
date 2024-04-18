<?php
//for database connection
require_once 'config.php';
require "../Layout/navbar.php";
?>


<link rel="stylesheet" href="../CSS/Main.css" type="text/css">
<link rel="stylesheet" href="../CSS/Products.css" type="text/css">

<div class="product-container">
    <img src="../Images/Lilacs(Spring).jpg" class="product-image">
    <div class="product-info">
        <h1>Description</h1>
        <p>A stunning addition to any garden! With its blush-pink blossoms and sweet fragrance,</p>
        <p>this shrub is sure to enchant. Perfect for borders or standalone beauty,</p>
        <p>it thrives in various conditions. Add a touch of springtime romance to your garden today!</p>
    </div>
</div>

<div class="product-database">
    <?php
    try {
        // PDO connection
        $connection = new PDO($dsn, $username, $password, $options);

        //SQL statement for Product data
        $sql = "SELECT * FROM product WHERE ProductName = 'Pink Lilacs'";
        $statement = $connection->prepare($sql);
        $statement->execute();

        // Fetch  data
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        // Check if data is found
        if ($result) {
            echo "<h1>" . $result["ProductName"] . "</h1>";
            echo "<p>Size: " . $result["Size"] . "</p>";
            echo "<p>Price: " . $result["Price"] . "</p>";
            echo "<p>Season: " . $result["Season"] . "</p>";
            echo "<p>Type: " . $result["Type"] . "</p>";
        } else {
            echo "Product not found.";
        }
    } catch (\PDOException $e) {
        //if it doesn't connect
        echo "Connection failed: " . $e->getMessage();
    }
    ?>

    <button class="add"> Add to Cart </button>
</div>

<div class="product-container2">
    <img src="../Images/lilac%20pruning.jpg" class="product-image2">
    <div class="product-info2">
        <h1>How to look after your Pink Lilacs:</h1>
        <ul>
            <li>Location: Plant in a sunny spot with well-draining soil</li>
            <li>Watering: Keep the soil evenly moist, especially during the first growing season</li>
            <li>Pruning: Prune after flowering to remove spent blooms and shape the plant and remove old or damaged branches to encourage new growth</li>
            <li>Fertilizing: Apply a balanced fertilizer in early spring before new growth begins</li>
            <li>Pest and Disease Control: Monitor for pests and diseases regularly and treat promptly</li>
        </ul>

    </div>

</div>

