<?php
require "../Layout/navbar.php";

require '../src/DBconnect.php';

require_once ('../template/header.php');


var_dump($Cart->CartItems);
$product_id = "";
if (isset($_GET['param'])) {
$product_id = $_GET['param'];
//---VERY strong attempt at using sessions for cart---

//if (isset($_POST['addButton'])) {
//    //check if item exists in array
//    if(!array_key_exists($_POST['product_id'],$_SESSION['cart']->CartItems)){
//        $_SESSION['cart']->CartItems[$_POST['product_id']] = $_POST['quantity'];
//    }else{
//       //get quantity in session, add new quantity and save in session
//    }
//    if(!array_key_exists($_POST['product_id'],$_SESSION['cart2'])){
//        $_SESSION['cart2'][$_POST['product_id']] = $_POST['quantity'];
//    }else{
//        //get quantity in session, add new quantity and save in session
//    }
//    var_export(
//        array_key_exists($_POST['product_id'],$_SESSION['cart']->CartItems)
//    );
//    var_export(
//        array_key_exists($_POST['product_id'],$_SESSION['cart2'])
//    );

    //comm
//    $item=new CartItem();
//    $item->set_item($_POST['product_id']);
//    $item->set_quantity($_POST['quantity']);
//    array_push($_SESSION['cart']->CartItems,$item);
    //uncomm
//    echo json_encode($_SESSION['cart']->CartItems);
//}
//if (isset($_POST['button2'])) {
//    echo "This is Button2 that is selected";
//}
//?>


<?php
//
//if (isset($_POST['addButton'])) {
//
/*    $sql2 = "select * from users where username = <?php echo $_SESSION[username]?>";*/
//    $userDetails = (($connection->prepare($sql2))->execute())->fetchAll();
//
//var_dump($userDetails);
//    $sql = "INSERT INTO ShoppingCart (user_id,product_id,quantity)
// VALUES ( :user_id, :product_id, :quantity)";
//
//    $stmt = $pdo->prepare($sql);
//
//    $stmt->bindParam(':user_id', $userDetails["id"], PDO::PARAM_INT);
//    $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
//    $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
//
//    $stmt->execute();
//
//
//
//    $statement = $connection->prepare($sql);
//
////    I found fetchColumn() on the php.net documentation
//    $count = $statement->fetchColumn();
//
//    $statement->execute();
//    $result = $statement->fetchAll();
//
//
//}
?>


<link rel="stylesheet" href="../CSS/Products.css" type="text/css">

<div class="sacramento-regular" id="ProductPage">

<?php
    // SQL to select product details based on product ID
    $sql = "SELECT * FROM product WHERE productID = $product_id";
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

                <form method="post">
                <button class="quantitybtns addminus" type="button" onclick="decreaseQuantity()">-</button>
                <input class="quantitybtns" type="number" name="quantity" id="quantity" class="quantity" value="1" min="1">
                <button class="quantitybtns addminus" type="button" onclick="increaseQuantity()">+</button>

                <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">

                <button type="submit" name="addButton" value="<?php echo $product_id ?>">Add to Cart</button>


<!--                <button type="submit"  id="CartBtn">Add to Cart</button>-->
                </form>

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
        echo "";
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

        if (parseInt(quantityInput.value) == '1'||parseInt(quantityInput.value) == 1){
            quantityInput.value = parseInt(quantityInput.value) == '1'||1
        }
        else{
        quantityInput.value = parseInt(quantityInput.value) - 1;
    }}

    function increaseQuantity() {
        var quantityInput = document.getElementById('quantity');
        quantityInput.value = parseInt(quantityInput.value) + 1;
    }

    function addItemJS() {
        alert("cry");
        console.log("BUTTON HELLO!");
    }
</script>
</body>
</html>