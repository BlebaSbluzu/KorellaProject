<?php
require "../common.php";
require_once '../src/DBconnect.php';
try {

    $sql = "SELECT * FROM product";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $error) {
    echo "Error fetching users: " . $error->getMessage();
}
?>

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
            <td><?php echo htmlspecialchars($row["ProductName"]); ?></td>
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
            <td><a href="editproducts.php?id=<?php echo $row['ProductName']; ?>">Edit</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<a href="../admin.php">Back to home</a>


