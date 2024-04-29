<?php
require_once 'AdminValidation.php';

// User data to validate
$productID = "LOL";
$ProductName = "Sunflower";
$Price = "TEN";
$Size = "2 feet";
$Seasons = "Winter";
$Image = "NO IMAGE";


// Validate each field
$productID = ValidateID($productID);
$ProductName = ValidateName($ProductName);
$Price = ValidatePrice($Price);
$Size = ValidateSize($Size);
$Seasons = ValidateSeasons($Seasons);
$Image = ValidateImage($Image);

// Output the results
echo "ID Validation: " . $productID . "<br>";
echo "ProductName Validation: " . $ProductName . "<br>";
echo "Price Validation: " . $Price. "<br>";
echo "Size Validation: " . $Size . "<br>";
echo "Seasons Validation: " . $Seasons . "<br>";
echo "Image Validation: " . $Image . "<br>";
?>