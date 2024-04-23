<?php include '../Layout/navbar.php'; ?>
<?php require_once('../template/header.php');
require '../src/DBconnect.php';

if (isset($_SESSION['Username'])) {
    echo 'You are already logged in as ' . $_SESSION['Username'];
    exit;
}
if (isset($_POST['Submit'])) {
    $username = $_POST['Username'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
    $statement = $connection->prepare($sql);
    $statement->bindParam(':username', $username, PDO::PARAM_STR);
    $statement->bindParam(':password', $password, PDO::PARAM_STR);

    try {
        $statement->execute();
        $user_data = $statement->fetch(PDO::FETCH_ASSOC);


        if ($user_data) {

            $_SESSION['Username'] = $username;
            $_SESSION['Active'] = true;
            $_SESSION['is_admin'] = ($user_data['username'] === 'admin');


            if ($_SESSION['is_admin']) {
                header("Location: admin.php");
            } else {
                header("Location: home.php");
            }
            exit;
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</html>