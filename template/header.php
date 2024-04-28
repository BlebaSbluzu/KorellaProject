<?php


session_start();

//use classes\session;
//$session = new session();

use classes\session;
use classes\Carts;

require_once '../classes/session.php';
require '../classes/Carts.php';

$session = new session();
$Cart = new Carts();
//$session->killSession();

if (isset($_POST['product_id'], $_POST['quantity'])) {
    header('Location: ../Pages/ShoppingCart.php');

    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    echo $product_id + $quantity;
    if (isset($_SESSION['Username'])) {
        // Call your PHP function to add the item to the cart
        echo $product_id + $quantity;
        $Cart->addItem($product_id, $quantity);
        // Redirect to the previous page or wherever you need to go next
        header('Location: ../Pages/ShoppingCart.php');
        exit;
    } else {
        // Redirect to the login page
        header('Location: Login.php');
        exit;
    }
}

//
//$action = filter_input(INPUT_GET, 'action');
//switch ($action){
//
// case 'cart':
//    displayCart();
//    break;
//    case 'addToCart':
//    $id = filter_input(INPUT_GET, 'id');
//    $quantity = filter_input(INPUT_GET, 'quantity');
//
//    addItem($id,$quantity);
//
//    displayCart();
//    break;
//
//     case 'removeFromCart':
//    $id = filter_input(INPUT_GET, 'id');
//    removeItemFromCart($id);
//    displayCart();
//    break;
//
//    case 'changeCartQuantity':
//    $id = filter_input(INPUT_GET, 'id');
//    $amount = filter_input(INPUT_POST, 'amount');
//    if($amount == 'increase'){
//        increaseCartQuantity($id);
//    } else {
//        reduceCartQuantity($id);
//    }
//    displayCart();
//    break;
//
//
//}





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
