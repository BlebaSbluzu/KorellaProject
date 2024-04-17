
<?php
require "../Layout/navbar.php";
if (isset($_POST['submit'])) {
    require "../common.php";
    try {
        require_once '../src/DBconnect.php';

        $new_user = array(
            "username" => escape($_POST['username']),
            "password" => escape($_POST['password']),
            "email" => escape($_POST['email']),
        );
        $sql = sprintf("INSERT INTO %s (%s) values (%s)", "users",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user)));
        $statement = $connection->prepare($sql);
        $statement->execute($new_user);

        if ($statement) {

            header("Location: login.php");
            exit();
        }

    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>

<html>
<head>
    <link rel="stylesheet" href="../CSS/Main.css" type="text/css">
    <link rel="stylesheet" href="../CSS/Products.css" type="text/css">
    <link rel="stylesheet" href="../CSS/SignUp.css" type="text/css">
</head>
<body>
<div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 10px;">
                    <div class="card-body p-5">
                        <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                        <div class="container">
                            <form method="post" action="SignUp.php">
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username" required>

                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" required>

                                <label for="password">Password</label>
                                <input type="password" id="password" name="password"
                                       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                       title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

                                <input type="submit" name="submit" value="Submit" >
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>