<?php

class ProductSet
{

    public $title;
    public $sql;
    public $ItemsAmount;

    /**
     * @param $title
     * @param $sql
     * @param $ItemsAmount
     */
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

$statement = $connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
    ?>

<link rel="stylesheet" href="../CSS/Main.css" type="text/css">

<link rel="stylesheet" href="../CSS/Card.css" type="text/css">


    <div class="Titles">
        <hr class="hrs">
        <h3 class="sacramento-regular"> <?php echo $title ?> </h3>
        <hr class="hrs"></div>
<div id="cardRow" class="card-group row">
    <?php

//    for($i=0;$i<=$ItemsAmount;$i++) {
    $rowRefresh = 0;
            foreach ($result as $product) {
                $rowRefresh + 1;


//                echo escape($product["image"]);
//                $imageName = escape($product["image"]);
//                echo $imageName;

    ?>
<!--                src="/images/--><?php //echo $cutePet['image']; ?><!--"-->



    <div id="cardStyles" class="card col-sm-4 ">


        <img src="../Images/<?php echo $product["image"]; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $product["ProductName"]; ?></h5>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>



<?php


    }
}


//public  function getSql() {
//    return $this->sql;
//}
//    function __construct($title, $sql){
//        $this->title = $title;
//        $this->sql = $sql;
//    }
//public $statement = $connection->prepare($sql);
//$statement->execute();
//$result = $statement->fetchAll();
//}

?>
<!--    </div>-->
