<?php

function isValidUsername($username)
{
    return preg_match('/^[a-zA-Z0-9]{5,15}$/', $username);
}

function isValidPassword($password)
{
    return preg_match('/^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\W_]).{8,20}$/', $password) && !preg_match('/^[\W_]*$/', $password);
}

function isValidEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match('/\s/', $email);
}


function runValidationTests()
{

    $usernames = [
        "User123",    // Valid
        //"User@123",   // Invalid: Contains special characters
       // "Usr",        // Invalid: Less than 5 characters
        //"LongUsername1234567890", // Invalid: More than 15 characters
    ];


    $passwords = [
        "Pass123!",   // Valid
        //"Password",   // Invalid: All letters
        //"1234567890", // Invalid: All numbers
        //"Short1",     // Invalid: Less than 8 characters
        //"VeryLongPassword1234567890$", // Invalid: More than 20 characters
    ];


    $emails = [
        "example@example.com", // Valid
        //"example.com",         // Invalid: Missing '@' symbol
        //"example@",            // Invalid: Missing a domain
        //"example@ example.com", // Invalid: Contains spaces
    ];


    foreach ($usernames as $username) {
        echo "Username '$username' is " . (isValidUsername($username) ? "valid" : "invalid") . ".\n";
    }

    foreach ($passwords as $password) {
        echo "Password '$password' is " . (isValidPassword($password) ? "valid" : "invalid") . ".\n";
    }

    foreach ($emails as $email) {
        echo "Email '$email' is " . (isValidEmail($email) ? "valid" : "invalid") . ".\n";
    }
}

runValidationTests();
?>