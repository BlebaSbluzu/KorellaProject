<?php
require_once "../Layout/navbaradmin.php";

if (isset($_POST['submit'])) {
    require "../common.php";
    try {
        require_once '../src/DBconnect.php';
        $new_user = array(
            "Username" => escape($_POST['username']),
            "email" => escape($_POST['email']),
            "password" => escape($_POST['password'])
        );
        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "users",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user))
        );
        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

if (isset($_POST['submit']) && $statement){
    echo $new_user['Username']. ' successfully added';
}
?>
    <h2>Add a user</h2>
    <form method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">

        <label for="email">Email Address</label>
        <input type="text" name="email" id="email">

        <label for="password">Password</label>
        <input type="text" name="password" id="password">
        <input type="submit" name="submit" value="Submit">
    </form>
    <a href="admin.php">Back to home</a>
