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
?>

    <div class="shopStyle">
    <?php
$Spring = new ProductSet("Spring", "SELECT * from product where SEASON = 'Spring' ");?>
    </div>



    <div class="shopStyle">
        <?php
$Summer = new ProductSet("Summer", "SELECT * from product where SEASON = 'Summer' ");
    ?>

        <div class="shopStyle">
            <?php
$Autumn = new ProductSet("Autumn", "SELECT * from product where SEASON = 'Autumn' ");
    ?>

            <div class="shopStyle">
                <?php
$Winter = new ProductSet("Winter", "SELECT * from product where SEASON = 'Winter' ");

?>
</div>

