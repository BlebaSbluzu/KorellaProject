<?php

class ProductSet
{

    public $title;
    public $sql;
    public $ItemsAmount;

    public function __construct($title, $sql)
    {
        $this->title = $title;
        $this->sql = $sql;



        MakeSet($title, $sql);

    }

    public function getTitle()
    {
        return $this->title;
    }


}

function MakeSet($title, $sql)
{
include '../src/DBconnect.php';
$rowRefresh = 0;

        $statement = $connection->prepare($sql);

//    I found fetchColumn() on the php.net documentation
        $count = $statement->fetchColumn();
        $remainder = 4-($count % 4);
        $statement->execute();
        $result = $statement->fetchAll();
    ?>

<link rel="stylesheet" href="../CSS/Main.css" type="text/css">

<link rel="stylesheet" href="../CSS/Card.css" type="text/css">


    <div class="Titles">
        <hr class="hrs">
        <h3 class="sacramento-regular ProductSetTitle"> <?php echo $title ?> </h3>
        <hr class="hrs"></div>
<div id="cardRow" class="card-group row">
    <?php

//    for($i=0;$i<=$ItemsAmount;$i++) {
            foreach ($result as $product) {
                $rowRefresh ++;




//                echo escape($product["image"]);
//                $imageName = escape($product["image"]);
//                echo $imageName;

    ?>
<!--                src="/images/--><?php //echo $cutePet['image']; ?><!--"-->


   <div id="cardStyles" class="card col-sm-4 sacramento-regular">
       <input type="hidden" name="ProductID" value="<?php $product["productID"]?>"/>
       <a href="Product.php?param=<?php echo $product["productID"] ?>">;



        <img id="ProductThumb" src="../Images/<?php echo $product["image"]; ?>" class="card-img-top" alt="...">

           <button onclick="" id="productBtn" >Add to Cart</button>

        <div class="card-body">
            <p class="card-title"><?php echo $product["ProductName"] ?> <i class="pricetext">€<?php echo $product["Price"]; ?></i></p>
        </div>
<!--        <div class="card-footer">-->
<!--            <small class="text-muted"></small>-->
<!--        </div>-->
       </a>
    </div>


<?php

if($rowRefresh == 4){
    ?>

    </div>

<div id="cardRow" class="card-group row">


    <?php
    $rowRefresh =0;
}

    }

    for($i=1;$i<$remainder;$i++){
        ?>

        <div id="cardStyles" class="card col-sm-4 ">
        </div>

        <?php

    }

    require_once '../classes/Carts.php';
    require_once ('../template/header.php');
     ?>
</div>

<!--    <script>-->
<!---->
<!--        function addToCart(item) {-->
<!--        }-->
<!---->
<!--    </script>-->


<?php
    }



//if (isset($_GET['item']) && isset($_GET['quantity'])) {
//    $item = $_GET['item'];
//    $quantity = $_GET['quantity'];



//    header('Location: currentPage');
//    exit;
//}
//
//
//if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) ){
//    if (isset($_POST['item']) && isset($_POST['quantity'])) {
//        $item = $_POST['ProductID'];
//
//        $quantity = null;
//        $Cart->additem($item, $quantity);
//    }
//}
//

?>






