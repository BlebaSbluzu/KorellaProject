<?php include "../Layout/navbar.php"; ?>
<?php require_once('../template/header.php');
require "../common.php";
require '../src/DBconnect.php';
require_once 'UserAuth.php';


$userAuth = new UserAuth($connection);
$userAuth->checkLoggedIn();
$userAuth->registerUser();
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