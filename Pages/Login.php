<?php session_start(); ?>
<?php require "../Layout/navbar.php"; ?>
<?php
require_once '../config.php';
?>
<?php require_once '../src/DBconnect.php';
?>
<?php

if(isset($_POST['Submit']))
{

    if( ($_POST['Username'] == $Username) && ($_POST['password'] ==
            $password) )
    {
        echo 'Success';

        $_SESSION['Username'] = $Username;
    }
    else
        echo 'Incorrect Username or Password';
}
?>
<html>

<link rel="stylesheet" href="../CSS/Main.css" type="text/css">
<link rel="stylesheet" href="../CSS/Products.css" type="text/css">
<link rel="stylesheet" href="../CSS/SignUp.css" type="text/css">


<div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 10px;">
                    <div class="card-body p-5">
                        <h1>Status: You are logged in <?php echo
                            $_SESSION['Username'];?> </h1>

                        <div class="container">
                            <form action="Login.php">

                                <label for="Username">Username</label>
                                <input type="Username" id="Username" name="Username" required>

                                <label for="password">Password</label>
                                <input type="password" id="password" name="password"
                                       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                       title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>


                                <input type="submit" value="Submit">

                            </form>
                        </div>


                    </div>
                </div>


</html>
