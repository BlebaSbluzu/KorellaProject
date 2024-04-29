<?php
require_once "../Layout/navbar.php";
require "../common.php";
require_once '../src/DBconnect.php';

function ValidateID($productID) {
    if (empty($productID) || !is_string($productID)) {
        return "Invalid Product ID: must be a non-empty string.";
    }
    return "";
}

function ValidateName($ProductName) {
    if (!preg_match('/^[a-zA-Z0-9\s]+$/', $ProductName)) {
        return "Invalid Product Name: must be alphanumeric and may include spaces.";
    }
    return "";
}

function ValidatePrice($Price) {
    if (!is_numeric($Price)) {
        return "Invalid Price: must be a numeric value.";
    }
    return "";
}

function ValidateSize($Size) {
    if (!preg_match('/^\d+\s(feet|inches|cm|m)$/', $Size)) {
        return "Invalid Size: must specify number and unit (feet, inches, cm, m).";
    }
    return "";
}

function ValidateSeasons($Season) {
    $Seasons = ['Spring', 'Summer', 'Autumn', 'Winter'];
    if (!in_array($Season, $Seasons)) {
        return "Invalid season selected.";
    }
    return "";
}

function ValidateImage($Image) {
    // Check if the image input is provided and is not empty.
    if (empty($Image)) {
        return "Image is required.";
    }
    return "";
}

function addProduct($data, $connection) {
    try {
        $sql = "INSERT INTO product (productID, ProductName, Size, Price, Season, Type, Description, Location, Watering, Pruning, Fertilizing, PestDisease, image, imageDiagram) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $connection->prepare($sql);
        $stmt->execute([
            $data['productID'], $data['ProductName'], $data['Size'], $data['Price'],
            $data['Season'], $data['Type'], $data['Description'], $data['Location'],
            $data['Watering'], $data['Pruning'], $data['Fertilizing'], $data['PestDisease'],
            $data['image'], $data['imageDiagram']
        ]);
        echo "Product added successfully.";
    } catch (PDOException $e) {
        echo "Error adding product: " . $e->getMessage();
    }
}

function deleteProduct($id, $connection) {
    try {
        $sql = "DELETE FROM product WHERE productID = ?";
        $stmt = $connection->prepare($sql);
        $stmt->execute([$id]);
        echo "Product deleted successfully.";
    } catch (PDOException $e) {
        echo "Error deleting product: " . $e->getMessage();
    }
}

// Handle form submission for adding or deleting products
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {

        $validationErrors = [
            ValidateID($_POST['productID'] ?? ''),
            ValidateName($_POST['ProductName'] ?? ''),
            ValidatePrice($_POST['Price'] ?? ''),
            ValidateSize($_POST['Size'] ?? ''),
            ValidateSeasons($_POST['Season'] ?? ''),
            ValidateImage($_POST['image'] ?? '')
        ];
        // Filter out empty messages
        $validationErrors = array_filter($validationErrors);
        if (!empty($validationErrors)) {
            foreach ($validationErrors as $error) {
                echo $error . "<br>";
            }
        } else {
            addProduct($_POST, $connection);
        }
    } elseif (isset($_POST['delete'])) {
        $deleteID = $_POST['delete_id'] ?? '';
        if (!empty($deleteID)) {
            deleteProduct($deleteID, $connection);
        } else {
            echo "Error: Product ID is missing for deletion.";
        }
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

    <input type="text" name="productID" placeholder="Enter Product ID" required>
    <input type="text" name="ProductName" placeholder="Enter Product Name" required>
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
<!--            from php.net/manual/en/function.htmlspecialchars-->
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
