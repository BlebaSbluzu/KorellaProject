
//require "../common.php";
//require_once '../src/DBconnect.php';
//
//$productName = isset($_GET['productID']) ? $_GET['productID'] : ''; // Get the product name from the URL
//
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//
//$productName = $_POST['ProductName'];
//$productID = $_POST['productID'];
//$size = $_POST['Size'];
//$price = $_POST['Price'];
//$season = $_POST['Season'];
//$type = $_POST['Type'];
//$description = $_POST['Description'];
//$location = $_POST['Location'];
//$watering = $_POST['Watering'];
//$pruning = $_POST['Pruning'];
//$fertilizing = $_POST['Fertilizing'];
//$pestDisease = $_POST['PestDisease'];
//$image = $_POST['image'];
//$imageDiagram = $_POST['imageDiagram'];
//
//// Update statement
//$sql = "UPDATE product SET ProductName = ?, productID = ?, Size = ?, Price = ?, Season = ?, Type = ?, Description = ?, Location = ?, Watering = ?, Pruning = ?, Fertilizing = ?, PestDisease = ?, image = ?, imageDiagram = ? WHERE ProductName = ?";
//
//try {
//$statement = $connection->prepare($sql);
//$statement->execute([$productName, $productID, $size, $price, $season, $type, $description, $location, $watering, $pruning, $fertilizing, $pestDisease, $image, $imageDiagram, $productName]);
//echo "Product updated successfully.";
//} catch(PDOException $error) {
//echo "Error updating product: " . $error->getMessage();
//}
//}
//else {
//    $sql = "SELECT * FROM product WHERE ProductName = ?";
//    $statement = $connection->prepare($sql);
//    $statement->execute([$productName]);
//    $product = $statement->fetch(PDO::FETCH_ASSOC);
//
//    if ($product === false) {
//        // No product found, handle the error, for example, redirect back with an error message.
//        echo "No product found with the name: " . htmlspecialchars($productName);
//        // Optionally, add a redirect or additional error handling here.
//    }
//}
//?>
<!---->
<!--<h2>Edit Product</h2>-->
<!---->
<!--<form method="post">-->
<!--    <label for="ProductName">Product Name:</label>-->
<!--    <input type="text" name="ProductName" id="ProductName" value=" echo htmlspecialchars($product['ProductName']); ?>" required>-->
<!---->
<!--    <label for="productID">Product ID:</label>-->
<!--    <input type="text" name="productID" id="productID" value=" echo htmlspecialchars($product['productID']); ?>" required>-->
<!---->
<!--    <label for="Size">Size:</label>-->
<!--    <input type="text" name="Size" id="Size" value=" echo htmlspecialchars($product['Size']); ?>" required>-->
<!---->
<!--    <label for="Price">Price:</label>-->
<!--    <input type="text" name="Price" id="Price" value=" echo htmlspecialchars($product['Price']); ?>" required>-->
<!---->
<!--    <label for="Season">Season:</label>-->
<!--    <input type="text" name="Season" id="Season" value=" echo htmlspecialchars($product['Season']); ?>" required>-->
<!---->
<!--    <label for="Type">Type:</label>-->
<!--    <input type="text" name="Type" id="Type" value=" echo htmlspecialchars($product['Type']); ?>" required>-->
<!---->
<!--    <label for="Description">Description:</label>-->
<!--    <textarea name="Description" id="Description" required> echo htmlspecialchars($product['Description']); ?></textarea>-->
<!---->
<!--    <label for="Location">Location:</label>-->
<!--    <input type="text" name="Location" id="Location" value=" echo htmlspecialchars($product['Location']); ?>" required>-->
<!---->
<!--    <label for="Watering">Watering:</label>-->
<!--    <input type="text" name="Watering" id="Watering" value=" echo htmlspecialchars($product['Watering']); ?>" required>-->
<!---->
<!--    <label for="Pruning">Pruning:</label>-->
<!--    <input type="text" name="Pruning" id="Pruning" value=" echo htmlspecialchars($product['Pruning']); ?>" required>-->
<!---->
<!--    <label for="Fertilizing">Fertilizing:</label>-->
<!--    <input type="text" name="Fertilizing" id="Fertilizing" value=" echo htmlspecialchars($product['Fertilizing']); ?>" required>-->
<!---->
<!--    <label for="PestDisease">Pest/Disease:</label>-->
<!--    <input type="text" name="PestDisease" id="PestDisease" value=" echo htmlspecialchars($product['PestDisease']); ?>" required>-->
<!---->
<!--    <label for="image">Image URL:</label>-->
<!--    <input type="text" name="image" id="image" value=" echo htmlspecialchars($product['image']); ?>" required>-->
<!---->
<!--    <label for="imageDiagram">Image Diagram URL:</label>-->
<!--    <input type="text" name="imageDiagram" id="imageDiagram" value=" echo htmlspecialchars($product['imageDiagram']); ?>" required>-->
<!---->
<!--    <button type="submit">Update Product</button>-->
<!--</form>-->
<!---->
<!--<a href="admin.php">Back to home</a>-->
