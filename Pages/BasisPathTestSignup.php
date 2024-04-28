<?php
function validateUsername($username) {
    return !empty($username) && preg_match("/^\w{5,15}$/", $username);
}

function validatePassword($password) {
    return !empty($password) && preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z\d]).{8,}$/", $password);
}

function validateEmail($email) {
    return !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Simulated test function
function testRegistration($username, $password, $email, $sessionExists) {
    if ($sessionExists) {
        echo "Already logged in. Test failed.\n";
        return;
    }

    if (validateUsername($username) && validatePassword($password) && validateEmail($email)) {
        echo "Registration successful. Test passed.\n";
    } else {
        echo "Validation failed. Test failed.\n";
    }
}

// Run tests
//echo "Test Case 1: Valid Input\n";
//testRegistration('user123', 'Password1!', 'user@example.com', false);

//echo "Test Case 2: Invalid Input (Empty Fields)\n";
//testRegistration('', '', '', false);

//echo "Test Case 3: Invalid Input (Bad Format)\n";
//testRegistration('user123', 'pass', 'user', false);

//echo "Test Case 4: Session Exists\n";
//testRegistration('user123', 'Password1!', 'user@example.com', true);

echo "Test Case 5: UsernameToolong\n";
testRegistration('useriswaytoolong12', 'Password1!!', 'user1@example.com', false);

?>