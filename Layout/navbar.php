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




<div id="accountButton">

    <?php

    require_once('../template/header.php');
//    echo '<p>'; print_r($_SESSION); echo '</p>';

        if (isset($_SESSION['Username'])) {
            ?>

<a id="MyAccountBtn" href="../Pages/Account.php">

    <p class="sacramento-regular" id="WelcomeText">Welcome <u id="nameText"><B><?php echo $_SESSION['Username'] ?></B></u> </p>


    <form action="../classes/logout.php" method="post" name="Logout_Form" class="form-signin">
        <button id="LogoutButton" name="Submit" value="Logout" class="button btn btn-danger" type="submit">Log out</button>
    </form>

</a>

<?php


//found $_SERVER['PHP_SELF'] variable on php site as well as the basename function which returns the "trailing name component of path"
} else if(basename($_SERVER['PHP_SELF']) != 'Login.php' && basename($_SERVER['PHP_SELF']) != 'SignUp.php'){

?>
        <div id="logsignbox">
<a id="loginbtn" class="linkStyle" href="../Pages/Login.php">

<p class="signinBtns sacramento-regular">Login</p>

</a>

<p class="signinBtns sacramento-regular">Don't have an account?</p>

<a id="signupbtn " class="linkStyle sacramento-regular" href="../Pages/SignUp.php">
<p>
Sign up here!
    <br>
</p>
</a>
        </div>

            <?php

}
        ?>
</div>


<nav id="OverwriteNAV" class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a class="navbar-brand" href="../Pages/home.php">
            <img src="../Images/logo4.PNG" alt="Logo" width="80" height="80">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse sacramento-regular" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../Pages/seasonal.php">Seasonal</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" aria-current="page"
                       href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                    <ul class="dropdown-menu">
                       <!-- <li><a class="dropdown-item" href="#">Trees</a></li>
                        <li><a class="dropdown-item" href="#">Shrubs</a></li>flowers vine
                        -->
                        <li><a class="dropdown-item" href="../Pages/shop.php?category=Trees">Trees</a></li>
                        <li><a class="dropdown-item" href="../Pages/shop.php?category=Shrubs">Shrubs</a></li>
                        <li><a class="dropdown-item" href="../Pages/shop.php?category=Flowers">Flowers</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>

                    </ul>
                </li>





                <?php
                if (isset($_SESSION['Username'])){



                if (!$_SESSION['is_admin']) {
                ?>


                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="ShoppingCart.php">Shopping Cart</a>
                </li>


                <?php

                }
                else if($_SESSION['Username'] == "admin"){

                ?>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../Pages/create.php">Create User</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../Pages/read.php">Find User</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../Pages/update.php">Change Product</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../Pages/delete.php">Delete User</a>
                    </li>


                <?php }



                }?>
            </ul>



        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i>Search</button>
        </form>

<!--            <form class="d-flex" role="search">-->
<!--                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
<!--                <button class="btn btn-outline-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i>Search</button>-->
<!--            </form>-->




        </div>
    </div>
</nav>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!--<script src="index.js"></script>-->
</body>
</html>