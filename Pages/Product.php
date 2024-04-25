<?php
require "../Layout/navbar.php";

require '../src/DBconnect.php';

require_once('../classes/Carts.php');
require_once ('../template/header.php');



//var_dump($Cart->CartItems);

$product_id = "";

if (isset($_GET['param'])) {
$product_id = $_GET['param'];



?>
<link rel="stylesheet" href="../CSS/Products.css" type="text/css">

<div class="sacramento-regular" id="ProductPage">

<?php


    // SQL to select product details based on product ID
    $sql = "SELECT * FROM products WHERE productID = $product_id";
    $result = $connection->query($sql);

    if ($result->rowCount() > 0) {
        // Output data of each row
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <div id="imageSection">
                <h2 class="Productlabel">Season : <?php echo $row['Season']; ?></h2>
                <img id="ProductPageImg" src="../images/<?php echo $row['image']; ?>" alt="<?php echo $row['ProductName']; ?>">


                <div>
                    <p><b>Location:</b> <?php echo $row['Location']; ?></p>
                    <p><b>Watering:</b> <?php echo $row['Watering']; ?></p>
                    <p><b>Pruning:</b> <?php echo $row['Fertilizing']; ?></p>
                    <p><b>Pest and Disease Control:</b> <?php echo $row['PestDisease']; ?></p>

                </div>

            </div>

            <div id="NameSection">

                <h2 class="Productlabel"><?php echo $row['ProductName']; ?></h2>
                <p><b>Description:</b> <?php echo $row['Description']; ?></p>
<!--                <form method="post" action="/?action=addToCart&id=--><?php //=$row['productID']?><!--&quantity=quantity" style="display: inline">-->

<!--                <form method="post" action="../template/header.php">-->
                <button class="quantitybtns addminus" type="button" onclick="decreaseQuantity()">-</button>
                <input class="quantitybtns" type="number" name="quantity" id="quantity" class="quantity" value="1" min="1">
                <button class="quantitybtns addminus" type="button" onclick="increaseQuantity()">+</button>

                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">


                                <button onclick="alertfunc()"  id="CartBtn">Add to Cart</button>

<!--                <button type="submit"  id="CartBtn">Add to Cart</button>-->
<!--                </form>-->

                <div id="sizingDiv">
                <h2 class="Productlabel">Sizing Information</h2>
                <p><b>This product tends to grow to about :</b> <?php echo $row['Size']; ?></p>
                <img src="../images/<?php echo $row['imageDiagram']; ?>">
                </div>
                
            </div>

            <?php
        }
    }

    else {
        echo "No product found with the given ID.";
    }
    } else {
        echo "Product ID not provided.";
    }

?>
</div>


<script>

    function decreaseQuantity() {
        var quantityInput = document.getElementById('quantity');

        if (parseInt(quantityInput.value) == '1'||1){
            quantityInput.value = parseInt(quantityInput.value) == '1'||1
        }
        else{
        quantityInput.value = parseInt(quantityInput.value) - 1;
    }}

    function increaseQuantity() {
        var quantityInput = document.getElementById('quantity');
        quantityInput.value = parseInt(quantityInput.value) + 1;
    }
    function alertfunc() {
        alert("Added to Cart!");
    }
    //function addToCart(){
    //
    //    <?php
    //
    //    if (isset($_SESSION['Username'])) {
    //
    //        $Cart->addItem($product_id, 0);
    //    }
    //
    //    else{
    //        header('Location: Login.php');
    //    }
    //    ?>
    //
    //}

</script>
</body>
</html>