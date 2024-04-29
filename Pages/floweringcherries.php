<?php
//for database connection
require_once 'config.php';
require "../Layout/navbar.php";
?>

<link rel="stylesheet" href="../CSS/Main.css" type="text/css">
<link rel="stylesheet" href="../CSS/Products.css" type="text/css">

<div class="product-container">
    <img src="../Images/Flowering%20Cherries%20(Spring).jpg" class="product-image">
    <div class="product-info">
        <h1>Description:</h1>
        <p>The epitome of springtime allure! With delicate pink blossoms, </p>
        <p>these ornamental cherry trees add an enchanting touch to any garden. </p>
        <p>Renowned for vibrant blooms that burst forth in early spring, they create a captivating focal point,</p>
        <p>drawing admiration from all who behold them. Easy to care for and adaptable,</p>
        <p>our Pink Blossom Cherries bring seasonal charm and elegance to your outdoor space.</p>

    </div>
</div>

<div class="product-database">

    <?php
    try {
        // PDO connection
        $connection = new PDO($dsn, $username, $password, $options);

        //SQL statement for Product data
        $sql = "SELECT * FROM product WHERE ProductName = 'Japanese Cherry Blossom'";
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
    <img src="../Images/Cherry-Blossom-Tree-Growth-Rate-Chart.png" class="product-image2">
    <div class="product-info2">
        <h1>How to look after your Cherry Blossom:</h1>
        <ul>
            <li>Location: Plant in a sunny spot with good air circulation</li>
            <li>Watering: Keep the soil consistently moist, especially during dry spells</li>
            <li>Pruning: Prune in late winter to remove dead or crossing branches and promote better flowering.</li>
            <li>Pest and Disease Control: Monitor for pests and diseases regularly and treat promptly</li>
            <li>Mulching: Apply organic mulch to retain moisture and suppress weeds around the tree's base</li>
        </ul>

    </div>

</div>
