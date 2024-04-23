<?php
require_once "../Layout/navbaradmin.php";
require "../common.php";
require_once '../src/DBconnect.php';


function addProduct($data, $connection) {
$sql = "INSERT INTO product (ProductName, productID, Size, Price, Season, Type, Description, Location, Watering, Pruning, Fertilizing, PestDisease, image, imageDiagram) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $connection->prepare($sql);
$stmt->execute([
$data['ProductName'], $data['productID'], $data['Size'], $data['Price'],
$data['Season'], $data['Type'], $data['Description'], $data['Location'],
$data['Watering'], $data['Pruning'], $data['Fertilizing'], $data['PestDisease'],
$data['image'], $data['imageDiagram']
]);
}


function deleteProduct($id, $connection) {
$sql = "DELETE FROM product WHERE productID = ?";
$stmt = $connection->prepare($sql);
$stmt->execute([$id]);
}

// Check if the form was submitted for adding or deleting
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST['add'])) {
addProduct($_POST, $connection);
} elseif (isset($_POST['delete'])) {
deleteProduct($_POST['delete_id'], $connection);
}
}

try {
$sql = "SELECT * FROM product";
$statement = $connection->prepare($sql);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $error) {
echo "Error fetching products: " . $error->getMessage();
}
?>

<h2>Add New Product</h2>
<form method="post">

    <input type="text" name="ProductName" placeholder="Enter Product Name" required>
    <input type="text" name="productID" placeholder="Enter Product id" required>
    <input type="text" name="Size" placeholder="Enter Product size" required>
    <input type="text" name="Price" placeholder="Enter Product price" required>
    <input type="text" name="Season" placeholder="Enter Product season" required>
    <input type="text" name="Type" placeholder="Enter Product type" required>
    <input type="text" name="Description" placeholder="Enter Product description" required>
    <input type="text" name="Location" placeholder="Enter Product location" required>
    <input type="text" name="Watering" placeholder="Enter Product watering" required>
    <input type="text" name="Pruning" placeholder="Enter Product pruning" required>
    <input type="text" name="Fertilizing" placeholder="Enter Product fertilizing" required>
    <input type="text" name="PestDisease" placeholder="Enter Product pestdisease" required>
    <input type="text" name="image" placeholder="Enter Product image" required>
    <input type="text" name="imageDiagram" placeholder="Enter Product imagediagram" required>
    <!-- Additional fields -->
    <button type="submit" name="add">Add Product</button>
</form>

<h2>Update Products</h2>
<table>
    <thead>
    <tr>
        <th>ProductName</th>
        <th>productID</th>
        <th>Size</th>
        <th>Price</th>
        <th>Season</th>
        <th>Type</th>
        <th>Description</th>
        <th>Location</th>
        <th>Watering</th>
        <th>Pruning</th>
        <th>Fertilizing</th>
        <th>PestDisease</th>
        <th>image</th>
        <th>imageDiagram</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($result as $row) : ?>
        <tr>
            <!-- Product details -->
            <td><?php echo htmlspecialchars($row['ProductName']); ?></td>
            <td><?php echo htmlspecialchars($row["productID"]); ?></td>
            <td><?php echo htmlspecialchars($row["Size"]); ?></td>
            <td><?php echo htmlspecialchars($row["Price"]); ?></td>
            <td><?php echo htmlspecialchars($row["Season"]); ?></td>
            <td><?php echo htmlspecialchars($row["Type"]); ?></td>
            <td><?php echo htmlspecialchars($row["Description"]); ?></td>
            <td><?php echo htmlspecialchars($row["Location"]); ?></td>
            <td><?php echo htmlspecialchars($row["Watering"]); ?></td>
            <td><?php echo htmlspecialchars($row["Pruning"]); ?></td>
            <td><?php echo htmlspecialchars($row["Fertilizing"]); ?></td>
            <td><?php echo htmlspecialchars($row["PestDisease"]); ?></td>
            <td><?php echo htmlspecialchars($row["image"]); ?></td>
            <td><?php echo htmlspecialchars($row["imageDiagram"]); ?></td>


            <td>
                <form method="post">
                    <input type="hidden" name="delete_id" value="<?php echo $row['productID']; ?>">
                    <button type="submit" name="delete">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<a href="admin.php">Back to home</a>
