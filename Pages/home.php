
<?php

//PDO Bastard


try {
    $pdo = new PDO('mysql:dbname=gardencentredb;host=localhost', 'root');
    $result = $pdo->query('SELECT * FROM Orders');
    $rows = $result->fetchAll();
    var_dump($rows,1);
}catch(PDOException $err){
    echo "Problem-cry". $err->getMessage();
    exit();
}
//
//$servername = "localhost";
//$username = "root";
//$password = "root";
//$dbname = "GardenCentredb";
//
//$conn = mysqli_connect($servername,$username,$password,$dbname);
//
//    if (!$conn) {
//        die("Connection failed: " . mysqli_connect_error());
//    }
//else{
//    echo "Hurray!";
//}
//
//$sql = "SELECT * from orders";
//$qryResult = mysqli_query($conn,$sql);
//
//while($row = mysqli_fetch_assoc($qryResult)){
//    echo "Order ID: " . $row["OrdersId"]. " -Cost of Order: " . $row["Cost"];
//}

?>
<?php require "../Layout/navbar.php"; ?>

<link rel="stylesheet" href="../CSS/Main.css" type="text/css">
<link rel="stylesheet" href="../CSS/Home.css" type="text/css">
<!--<h1>--><?php //echo 'Hello World'; ?><!--</h1>-->

<div id="carouselExampleCaptions" class="carousel slide carousel-fade spacing" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner sacramento-Bigger">
        <div class="carousel-item active">
            <img src="../Images/rose.jpg" class="d-block carouselImage" alt="Rose for sale">
            <div class="carousel-caption d-none d-md-block">
                <p>Check our seasonal bulbs here!</p>
<!--                <p>Some representative placeholder content for the first slide.</p>-->
            </div>
        </div>
        <div class="carousel-item">
            <img src="../Images/shrub.jpg" class="d-block w-carouselImage" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <p>Shrubs and Bushes!</p>
<!--                <p>Some representative placeholder content for the second slide.</p>-->
            </div>
        </div>
        <div class="carousel-item">
            <img src="../Images/julyFlower.jpg" class="d-block carouselImage" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <p>Flower beds and other decoration</p>
<!--                <p>Some representative placeholder content for the third slide.</p>-->
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<?php require "./Recommended.php" ?>