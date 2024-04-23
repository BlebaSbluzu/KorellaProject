<?php
// function used to clean and secure form
function test_input($data) {
    $data = trim($data); //gets rid of whitespace
    $data = stripslashes($data); //removes backslashes
    $data = htmlspecialchars($data); //specialchars to html
    return $data;
}

// Validates username //each regex pattern used from the resource preg_match.php
function validateUsername($username) {
    if (empty($username)) {
        return "Username is required.";
    } elseif (!preg_match("/^\w{5,15}$/", $username)) {
        return "Username must be 5-15 characters long and can only contain letters, numbers, and underscores.";
    } else {
        return "Username validation passed.";
    }
}

// Validates password
function validatePassword($password) {
    if (empty($password)) {
        return "Password is required.";
    } elseif (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z\d]).{8,}$/", $password)) {
        return "Password must be at least 8 characters long and include at least one number, one uppercase letter, one lowercase letter, and one special character.";
    } else {
        return "Password validation passed.";
    }
}

// Validates email to a valid format as defined using FILTER_VALIDATE_EMAIL //source php.net filter-var.php
function validateEmail($email) {
    if (empty($email)) {
        return "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email format.";
    } else {
        return "Email validation passed.";
    }
}

// Validates date //putting date into timestamp using strtotime //strtotime.php
function validateDate($date) {
    if (empty($date)) {
        return "Date is required.";
    } elseif (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $date)) {
        return "Date must be in YYYY-MM-DD format.";
    } elseif (!strtotime($date)) {
        return "Invalid date.";
    } else {
        return "Date validation passed.";
    }
}
?>

