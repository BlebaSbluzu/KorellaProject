<?php
require_once ('../template/header.php');

//include '../Layout/navbar.php';
require '../src/DBconnect.php';

$_SESSION['SC'] = [];

if(basename($_SERVER['PHP_SELF']) == 'ShoppingCart.php'){
    echo json_encode($_SESSION['SC']);
    echo "-- Done --";

}
//
//if (isset($_POST['addButton'])) {
//    //check if item exists in array
//    array_push($_SESSION['SC'],$_POST['product_id'],$_POST['quantity']);
//
//    if(!array_key_exists($_POST['product_id'],$_SESSION['cart']->CartItems)){
//        $_SESSION['cart']->CartItems[$_POST['product_id']] = $_POST['quantity'];
//    }else{
//        //get quantity in session, add new quantity and save in session
//    }
//
//
//
//    if(!array_key_exists($_POST['product_id'],$_SESSION['cart2'])){
//        $_SESSION['cart2'][$_POST['product_id']] = $_POST['quantity'];
//    }else{
//        //get quantity in session, add new quantity and save in session
//    }
//
//
//
//    var_export(
//        array_key_exists($_POST['product_id'],$_SESSION['cart']->CartItems)
//    );
//    var_export(
//        array_key_exists($_POST['product_id'],$_SESSION['cart2'])
//    );
////    $item=new CartItem();
////    $item->set_item($_POST['product_id']);
////    $item->set_quantity($_POST['quantity']);
//
//
//
////    array_push($_SESSION['cart']->CartItems,$item);
//    echo json_encode($_SESSION['cart']);
//    echo json_encode($_SESSION['cart2']);
//    var_dump($_SESSION);
//
//}
//
//
//
//
//var_dump($_SESSION);
//
//echo "---  SPACE  ---";
//
//var_dump($_SESSION['cart']);
//
//echo "---  SPACE  ---";
//
//
//
//if (isset($_SESSION['Active'])) {
//echo "is set session";}
//if (isset($_SESSION['cart'])) {
//echo "  is set cart gggggggg    ";
//    var_export(
//        array_key_exists(1,$_SESSION['cart']->CartItems)
//    );
//    var_export(
//        array_key_exists(1,$_SESSION['cart2'])
//    );
//    echo " array contents :     ";
//
//
//
//    echo json_encode($_SESSION['cart']->CartItems);
//    echo json_encode($_SESSION['cart2']);
//    echo json_encode($_SESSION['cart']);
//
//    echo "another thing ";
//    echo json_encode($Cart2);
//
////    var_dump($Cart->$CartItems);
////echo $_SESSION['Cart'];
////    var_dump($_SESSION['Cart']->$CartItems);
//
////    echo 'You are already logged in as ' . $_SESSION['Username'];
////    exit;
//}
//else
//{
//echo "didnt work";
//}
//
//



?>
<?php include "../template/footer.php"; ?>
<!--<div class="shopStyle">-->
<?php
//
//?>
<!---->
<!---->
<!---->
<!---->
<!--</div>-->