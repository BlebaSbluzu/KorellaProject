<?php
//for database connection
require_once '../config.php';
require "../Layout/navbar.php";
?>

<link rel="stylesheet" href="../CSS/Main.css" type="text/css">
<link rel="stylesheet" href="../CSS/Products.css" type="text/css">


<div class="product-container">

    <img src='../Images/ArthurBellRoses.jpg' alt='Arthur Bell Roses' class='product-image'>
    <div class="product-info">
        <h1> Description </h1>
        <p>Arthur Bell Roses are a breathtaking sight in any garden! Their vibrant yellow blossoms bring a burst of sunshine and warmth to your outdoor space.</p>
        <p>With a delightful fragrance and elegant blooms, these roses are perfect for adding a touch of elegance to borders or as standalone specimens.</p>
        <p>Thriving in various conditions, Arthur Bell Roses are easy to care for, making them a versatile and beloved choice for gardeners seeking beauty and charm.</p>
    </div>

</div>


<div class="product-database">
    <?php
    try {
        // PDO connection
        $connection = new PDO($dsn, $username, $password, $options);

        //SQL statement for Product data
        $sql = "SELECT * FROM product WHERE ProductName = 'Arthur Bell Roses'";
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
 <img src="../Images/abroses.jpg.png" class="product-image2">
    <div class="product-info2">
        <h1>How to look after your Roses:</h1>
        <ul>
            <li>Location: Plant in a sunny spot with well-draining soil</li>
            <li>Watering: Keep the soil evenly moist, especially during the first growing season</li>
            <li>Pruning: Prune after flowering to remove spent blooms and shape the plant. Additionally, remove old or damaged branches to encourage new growth</li>
            <li>Fertilizing: Apply a balanced fertilizer in early spring, to provide essential nutrients for healthy growth</li>
            <li>Pest and Disease Control: Monitor for pests and diseases regularly and treat promptly</li>
        </ul>
    </div>
</div>







