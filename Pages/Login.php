<?php
session_start();
require_once '../Layout/navbar.php';
require_once '../src/DBconnect.php';
require_once '../logout.php';

if(isset($_SESSION['Username'])) {
    echo 'You are already logged in as ' . $_SESSION['Username'];

    exit;
}

if(isset($_POST['Submit'])) {
    $username = $_POST['Username'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
    $statement = $connection->prepare($sql);
    $statement->bindParam(':username', $username, PDO::PARAM_STR);
    $statement->bindParam(':password', $password, PDO::PARAM_STR);

    try {
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC);

        if($row) {
            echo 'Success';
            $_SESSION['Username'] = $username;

        } else {
            echo 'Incorrect Username or Password';
        }
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>
<html>

<link rel="stylesheet" href="../CSS/Main.css" type="text/css">
<link rel="stylesheet" href="../CSS/Products.css" type="text/css">
<link rel="stylesheet" href="../CSS/Login.css" type="text/css">

<form method="post" action="Login.php">
    <input type="submit" name="logout" value="Logout">
</form>

                        <div class="container">
                            <?php if(isset($_SESSION['Username'])): ?>
                                <h1>Status: You are logged in <?php echo $_SESSION['Username']; ?> </h1>
                            <?php else: ?>
                                <form action="Login.php" method="post">
                                    <label for="Username">Username</label>
                                    <input type="text" id="Username" name="Username" required>

                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password"
                                           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                           title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

                                    <a href="seasonal.php">
                                    <input type="submit" name="Submit" value="Submit">
                                    </a>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</html>