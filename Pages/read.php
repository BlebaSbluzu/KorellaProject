<?php

require "../common.php";
require_once '../src/DBconnect.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];

    try {
        $sql = "SELECT * FROM users WHERE username = :username";
        $statement = $connection->prepare($sql);
        $statement->bindParam(':username', $username, PDO::PARAM_STR);
        $statement->execute();
        $result = $statement->fetchAll();

        // Checking and displaying results
        if ($result && $statement->rowCount() > 0) {
            ?>
            <h2>Results</h2>
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($result as $row) { ?>
                    <tr>
                        <td><?php echo escape($row["id"]); ?></td>
                        <td><?php echo escape($row["username"]); ?></td>
                        <td><?php echo escape($row["Password"]); ?></td>
                        <td><?php echo escape($row["email"]); ?></td>
                        <td><?php echo escape($row["date"]); ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <?php
        } else {
            echo "<p>No results found for " . escape($username) . ".</p>";
        }
    } catch(PDOException $error) {
        echo "<p>Error: " . $error->getMessage() . "</p>";
    }
}
?>
<h2>Find user based on username</h2>
<form method="post">
    <label for="username">Username</label>
    <input type="text" id="username" name="username">
    <input type="submit" name="submit" value="View Results">
</form>
<a href="../admin.php">Back to home</a>