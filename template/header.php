<?php


session_start();

//use classes\session;
//$session = new session();

use classes\session;
require_once '../classes/session.php';
require_once '../classes/Cart.php';

$session = new session();
$Cart = new Cart();
//$session->killSession();



$action = filter_input(INPUT_GET, 'action');
switch ($action){

 case 'cart':
    displayCart();
    break;
    case 'addToCart':
    $id = filter_input(INPUT_GET, 'id');
    $quantity = filter_input(INPUT_GET, 'quantity');

    addItem($id,$quantity);

    displayCart();
    break;

     case 'removeFromCart':
    $id = filter_input(INPUT_GET, 'id');
    removeItemFromCart($id);
    displayCart();
    break;

    case 'changeCartQuantity':
    $id = filter_input(INPUT_GET, 'id');
    $amount = filter_input(INPUT_POST, 'amount');
    if($amount == 'increase'){
        increaseCartQuantity($id);
    } else {
        reduceCartQuantity($id);
    }
    displayCart();
    break;


}





if($_SESSION['Active'] = false){ /* Redirects user to Login.php if
not logged in. Remember, we set $_SESSION['Active'] == true in
login.php*/
    header("location:login.php");
    exit;
}
/*the code inside these php tags (i.e. the 5 lines of code above) are
required for every page you wish to be accessible only after login*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
