<?php require "../Layout/navbar.php";
include "./ProductSet.php";?>

<?php
//season will appear based on current month ref: function.date.php
$month = date('n');

//uncomment for our guidance testing
//$month = 4; // Spring: April
// $month = 7; // Summer: July
//$month = 10; // Autumn: October
// $month = 1; // Winter: January

//determines each season by the month starting with winter
$season = 'Winter';
if ($month >= 3 && $month <= 5) {
$season = 'Spring';
} elseif ($month >= 6 && $month <= 8) {
$season = 'Summer';
} elseif ($month >= 9 && $month <= 11) {
$season = 'Autumn';
}

//seasonal image change
//formats the season text with image ref: function.strtolower.php
$backgroundImage = strtolower($season) . "-header.jpg";

?>

<!--styled here so the php can interacte with our html-->
<style>
    .cardRow {
        background: url('../Images/<?= $backgroundImage ?>') no-repeat center center;
    }
</style>
<link rel="stylesheet" href="../CSS/Main.css" type="text/css">
<link rel="stylesheet" href="../CSS/seasonal.css" type="text/css">

<!--current season will be printed-->
<div id="cardRow" class=" cardRow ">
    <div class="season-greeting">
        <h1 >It's <?= htmlspecialchars($season)?>!</h1>
    </div>
</div>
<?php

$Spring = new ProductSet("Spring", "SELECT * from product where SEASON = 'Spring' ");
$Summer = new ProductSet("Summer", "SELECT * from product where SEASON = 'Summer' ");
$Autumn = new ProductSet("Autumn", "SELECT * from product where SEASON = 'Autumn' ");
$Winter = new ProductSet("Winter", "SELECT * from product where SEASON = 'Winter' ");

?>
</div>

<!---->
<!--<div class="row">-->
<!--    <div class="column">-->
<!--        <div class="container">-->
<!--            <a href="lilacs.php"><img src="../Images/Lilacs(Spring).jpg" alt="Spring Lilacs" title="Lilacs" width="200" height="200"></a>-->
<!--                <div class="text">-->
<!--                    <h1>Lilacs</h1>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="column">-->
<!--        <div class="container">-->
<!--            <a href="floweringcherries.php"><img src="../Images/Flowering%20Cherries%20(Spring).jpg" alt="Spring Flowering Cherries" title="Flowering Cherries" width="200" height="200"></a>-->
<!--            <div class="text">-->
<!--                <h1>Japanese Cherry Blossom</h1>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!---->

<!---->
<!--<h3>Summer</h3>-->
<!---->
<!---->
<!--<div class="row">-->
<!--    <div class="column">-->
<!--        <div class="container">-->
<!--            <a href="ArthurBellRoses.php"><img src="../Images/ArthurBellRoses.jpg" alt="Arthur Bell Roses" title="Arthur Bell Roses" width="200" height="200"></a>-->
<!--            <div class="text">-->
<!--                <h1>Arthur Bell Roses</h1>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--<div class="column">-->
<!--    <div class="container">-->
<!--        <a href=""><img src="../Images/sunflower.jpg" alt="Sunflower" title="Sunflower" width="150" height="65"></a>-->
<!--        <div class="text">-->
<!--            <h1>Sunflowers</h1>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!---->
<!--<h4>Autumn</h4>-->
<!---->
<!---->
<!--    <div class="row">-->
<!--        <div class="column">-->
<!--            <div class="container">-->
<!--                <a href=""><img src="../Images/SugarMaple.jpg" alt="Sugar Maple" title="Sugar Maple" width="200" height="300"></a>-->
<!--                <div class="text">-->
<!--                    <h1>Sugar Maple</h1>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="column">-->
<!--            <div class="container">-->
<!--                <a href=""><img src="../Images/copperbeech1.jpg" alt="Copper Beech" title="Copper Beech" ></a>-->
<!--                <div class="text">-->
<!--                    <h1>Copper Beech</h1>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--<h6>Winter</h6>-->
<!---->
<!---->
<!--        <div class="row">-->
<!--            <div class="column">-->
<!--                <div class="container">-->
<!--                    <a href=""><img src="../Images/WinterJasmine.jpg" alt="Winter Jasmine" title="Winter Jasmine" width="150" height="100"></a>-->
<!--                    <div class="text">-->
<!--                        <h1>Winter Jasmine</h1>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="column">-->
<!--                <div class="container">-->
<!--                    <a href=""><img src="../Images/AmericanHolly.jpg" alt="american Holly" title="American Holly" width="200" height="300" ></a>-->
<!--                    <div class="text">-->
<!--                        <h1>American Holly</h1>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

