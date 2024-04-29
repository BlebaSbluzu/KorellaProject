
<?php include '../Layout/navbar.php'; ?>
<?php require_once('../template/header.php');
require '../src/DBconnect.php';
require_once '../common.php';

?>
<?php


if (!isset($_SESSION['Username']) || empty($_SESSION['Username'])) {
    echo "Please log in to view this page.";
    exit;
}

$username = $_SESSION['Username'];
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {

    $new_username = $_POST['new_username'];
    $new_password = $_POST['new_password'];
    $new_email = $_POST['new_email'];

    try {

        $update_sql = "UPDATE users SET username = :new_username, password = :new_password, email = :new_email WHERE username = :username";
        $statement = $connection->prepare($update_sql);
        $statement->bindParam(':new_username', $new_username, PDO::PARAM_STR);
        $statement->bindParam(':new_password', $new_password, PDO::PARAM_STR);
        $statement->bindParam(':new_email', $new_email, PDO::PARAM_STR);
        $statement->bindParam(':username', $username, PDO::PARAM_STR);

        $statement->execute();


        if ($username !== $new_username) {
            $_SESSION['Username'] = $new_username;
            $username = $new_username;
        }

        $message = "<p>Account updated successfully.</p>";
    } catch (PDOException $e) {
        $message = "<p>Error updating account: " . $e->getMessage() . "</p>";
    }
}


try {
    $fetch_sql = "SELECT username, Password, email FROM users WHERE username = :username";
    $statement = $connection->prepare($fetch_sql);
    $statement->bindParam(':username', $username, PDO::PARAM_STR);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        $message = "<p>No user data found.</p>";
    }
} catch (PDOException $e) {
    $message = "<p>Error fetching user details: " . $e->getMessage() . "</p>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Account Management</title>
</head>
<body>
<h2>View Account Details</h2>
<?php if ($user): ?>
    <p>Username: <?php echo escape($user['username']); ?></p>
    <p>Email: <?php echo escape($user['email']); ?></p>
    <p>Password: <?php echo escape($user['Password']); ?></p>
    <?php echo $message; ?>


    <h2>Update Account Details</h2>
    <form method="post">
        <p>New Username: <input type="text" name="new_username" value="<?php echo escape($user['username']); ?>"><br></p>
        <p>New Password: <input type="password" name="new_password"><br></p>
        <p>New Email: <input type="email" name="new_email" value="<?php echo escape($user['email']); ?>"><br></p>
        <input type="submit" name="update" value="Update Details">
    </form>
<?php else: ?>
    <p>User details not found.</p>
<?php endif; ?>
</body>
</html>
<?php
include "../template/footer.php"; ?>

