<?php
require_once "../Layout/navbar.php";
require "../config.php";
require_once '../src/DBconnect.php';

$success = "";
$error = "";


if (isset($_GET["id"])) {
    $user_id = $_GET["id"];
    $sql = "DELETE FROM users WHERE id = :user_id";

    try {
        $statement = $connection->prepare($sql);
        $statement->bindValue(':user_id', $user_id, PDO::PARAM_INT);
        $statement->execute();
        $success = "User " . htmlspecialchars($user_id) . " successfully deleted.";
    } catch(PDOException $e) {
        $error = "Error deleting user: " . $e->getMessage();
    }
}


try {
    $sql = "SELECT * FROM users";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    $error = "Error fetching users: " . $e->getMessage();
}
?>

<h2>Delete Users</h2>
<?php if (!empty($success)) echo "<p>$success</p>"; ?>
<?php if (!empty($error)) echo "<p>$error</p>"; ?>
<table>
    <thead>
    <tr>
        <th>User ID</th>
        <th>Username</th>
        <th>Email Address</th>
        <th>Date</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($result as $row) : ?>
        <tr>
            <td><?php echo htmlspecialchars($row["id"]); ?></td>
            <td><?php echo htmlspecialchars($row["username"]); ?></td>
            <td><?php echo htmlspecialchars($row["email"]); ?></td>
            <td><?php echo htmlspecialchars($row["date"]); ?></td>
            <td><a href="?id=<?php echo htmlspecialchars($row["id"]); ?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<a href="admin.php">Back to home</a>