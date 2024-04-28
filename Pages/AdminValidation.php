<?php
function test_input($data)
{
    $data = trim($data); //gets rid of whitespace
    $data = stripslashes($data); //removes backslashes
    $data = htmlspecialchars($data); //specialchars to html
    return $data;
}

function ValidateID($productID) {
    // Check if the product name is not empty and is a string
    if (empty($productID) || !is_string($productID)) {
        return "Invalid Product ID: must be a non-empty string.";
    }
    return "Product ID validation passed.";
}

function ValidateName($ProductName) {
    // Check if the product ID is alphanumeric
    if (!preg_match('/^[a-zA-Z0-9]+$/', $ProductName)) {
        return "Invalid Product ID: must be alphanumeric.";
    }
    return "Product ID validation passed.";
}

function ValidatePrice($Price) {
    // Check if the price is a numeric value
    if (!is_numeric($Price)) {
        return "Invalid Price: must be a numeric value.";
    }
    return "Price validation passed.";
}

function ValidateSize($Size) {
    // Validate that size is provided in an expected format, e.g., "2 feet"
    if (!preg_match('/^\d+\s(feet|inches|cm|m)$/', $Size)) {
        return "Invalid Size: must specify number and unit (feet, inches, cm, m).";
    }
    return "Size validation passed.";
}

function ValidateSeasons($Season)
{
    // Array of valid seasons.
    $Seasons = ['Spring', 'Summer', 'Autumn', 'Winter'];

    // Check if the provided $Season is in the $Seasons array.
    if (!in_array($Season, $Seasons)) {
        return "Invalid season selected.";
    } else {
        return "Season validation passed.";
    }
}

function ValidateImage($Image) {
    // Check if the image path exists or is a placeholder for no image
    if ($Image == "NO IMAGE" || file_exists($Image)) {
        return "Image validation passed.";
    } else {
        return "Invalid Image: file does not exist.";
    }
}

    ?>