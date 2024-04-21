<?php //running the validation
require_once 'Validation.php';

// User data to validate
$username = "PJ";
$password = "12";
$email = "pjemail";
$date = "2023-04-20";

// Validate each field
$usernameValidation = validateUsername($username);
$passwordValidation = validatePassword($password);
$emailValidation = validateEmail($email);
$dateValidation = validateDate($date);

// Output the results
echo "Username Validation: " . $usernameValidation . "<br>";
echo "Password Validation: " . $passwordValidation . "<br>";
echo "Email Validation: " . $emailValidation . "<br>";
echo "Date Validation: " . $dateValidation . "<br>";
?>

