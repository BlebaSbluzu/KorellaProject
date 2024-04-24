<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/Main.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Pacifico&family=Sacramento&family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>


<a
<?php

if (isset($_SESSION['Username'])) {
    echo 'You are already logged in as ' . $_SESSION['Username'];
//            exit;
//        }

    ?>

    <button>

        Welcome <?php echo $_SESSION['Username']?>

    </button>

    <?php
}
else{


    ?>
    id="loginButton" href="signup.php"><p>Login / Signup</p>

    <?php
}

?>

</a>


<nav id="OverwriteNAV" class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a class="navbar-brand" href="../Pages/home.php">
            <img src="../Images/logo4.PNG" alt="Logo" width="80" height="80">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse sacramento-regular" id="navbarSupportedContent">
                <li><a href="../Pages/create.php">Create User</a></li>
                <li><a href="../Pages/read.php">Find User</a></li>
                <li><a href="../Pages/update.php">Change Product</a></li>
                <li><a href="../Pages/delete.php">Delete User</a></li>
            <form action="../classes/logout.php" method="post" name="Logout_Form" class="form-signin">
                <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
            </form>

        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="index.js"></script>
</body>
</html>