<?php
include '../Layout/navbar.php';
require '../src/DBconnect.php';
require_once ('../template/header.php');


var_dump($_SESSION);

if (isset($_SESSION['Cart'])) {

//    var_dump($Cart->$CartItems);
echo $_SESSION['Cart'];
    var_dump($_SESSION['Cart']->$CartItems);

//    echo 'You are already logged in as ' . $_SESSION['Username'];
//    exit;
}
else
{
    echo "didnt work";
}