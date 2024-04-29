<?php
include '../Layout/navbar.php';
require '../src/DBconnect.php';
require_once ('../template/header.php');






var_dump($_SESSION);

echo "---  SPACE  ---";

var_dump($_SESSION['cart']);

echo "---  SPACE  ---";


if (isset($_SESSION['Active'])) {
echo "is set session";}
if (isset($_SESSION['cart'])) {
echo "  is set cart";

//    var_dump($Cart->$CartItems);
//echo $_SESSION['Cart'];
//    var_dump($_SESSION['Cart']->$CartItems);

//    echo 'You are already logged in as ' . $_SESSION['Username'];
//    exit;
}
else
{
echo "didnt work";
}





?>
<!--<div class="shopStyle">-->
<?php
//
//?>
<!---->
<!---->
<!---->
<!---->
<!--</div>-->