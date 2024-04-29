<?php include "../Layout/navbar.php"; ?>
<?php require_once('../template/header.php');
require "../common.php";
require '../src/DBconnect.php';

?>



<?php
if (isset($_SESSION['Username'])) {
        echo 'You are already logged in as ' . $_SESSION['Username'];
        exit;

}

//validating our form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$email = $_POST['email'] ?? '';

//checks data requirements
$usernameValidation = validateUsername($username);
$passwordValidation = validatePassword($password);
$emailValidation = validateEmail($email);



//checks if conditions are true
    if ($usernameValidation === "" && $passwordValidation === "Password validation passed." && $emailValidation === "") {
    try {
        $new_user = array(
            "username" => escape($_POST['username']),
            "password" => escape($_POST['password']),
            "email" => escape($_POST['email']),
            "date" => date("Y-m-d")
        );
        $sql = sprintf("INSERT INTO %s (%s) values (%s)", "users",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user)));
        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
        if ($statement) {
            header("location: Login.php");
            exit;
        }
    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
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

                        <?php

                        //validates username //each regex pattern used from the resource preg_match.php
                        function validateUsername($username) {
                            if (empty($username)) {
                                return "Username is required.";
                            } elseif (!preg_match("/^\w{5,15}$/", $username)) {
                                return "Username must be 5-15 characters long and can only contain letters, numbers, and underscores.";
                            } else {
                                return "";
                            }
                        }

                        // Validates password//each regex pattern used from the resource preg_match.php
                        function validatePassword($password) {
                            if (empty($password)) {
                                return "Password is required.";
                            } elseif (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z\d]).{8,}$/", $password)) {
                                return "Password must be at least 8 characters long and include at least one number, one uppercase letter, one lowercase letter, and one special character.";
                            } else {
                                return "Password validation passed.";
                            }
                        }


                        //validates email to a valid format as defined using FILTER_VALIDATE_EMAIL //source php.net filter-var.php
                        function validateEmail($email) {
                            if (empty($email)) {
                                return "Email is required.";
                            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                return "Invalid email format.";
                            } else {
                                return "";
                            }
                        }
                        $usernameError = $passwordError = $emailError = "";
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $username = $_POST['username'] ?? '';
                            $password = $_POST['password'] ?? '';
                            $email = $_POST['email'] ?? '';

                            $usernameError = validateUsername($username);
                            $passwordError = validatePassword($password);
                            $emailError = validateEmail($email);

                            if (!$usernameError && !$passwordError && !$emailError) {
                                //save to database
                                echo '<p class="success">Form submitted successfully!</p>';
                            }
                        }
                        ?>
                        <div class="container">

                        <form method="post" action="SignUp.php">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username">
                            <small class="error"><?= $usernameError ?></small>

                            <label for="email">Email</label>
                            <input type="email" id="email" name="email">
                            <small class="error"><?= $emailError ?></small>

                            <label for="password">Password</label>
                            <input type="password" id="password" name="password">
                            <small class="error"><?= $passwordError ?></small>

                            <input type="submit" name="submit" value="Submit">
                        </form>


                            <p>Already have an account? <a href="Login.php"><u>Click here</u></a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php include "../template/footer.php";?>