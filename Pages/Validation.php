<!---Code based on Seasonal Validation that we used--->
<?php
// Season will appear based on the current month.
$month = date('n');

// Uncomment for our guidance testing
// $month = 4; // Spring: April
// $month = 7; // Summer: July
// $month = 10; // Autumn: October
// $month = 1; // Winter: January

// Determines each season by the month starting with winter.
$season = 'Winter';
if ($month >= 3 && $month <= 5) {
    $season = 'Spring';
} elseif ($month >= 6 && $month <= 8) {
    $season = 'Summer';
} elseif ($month >= 9 && $month <= 11) {
    $season = 'Autumn';
}

// Seasonal image change.
$backgroundImage = strtolower($season) . "-header.jpg";

?>


<!-- Code we use for User Validation-->
<?php
// function used to clean and secure form
function test_input($data) {
    $data = trim($data); //gets rid of whitespace
    $data = stripslashes($data); //removes backslashes
    $data = htmlspecialchars($data); //specialchars to html
    return $data;
}

//validating our form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $email = $_POST['email'] ?? '';

//checks data requirements
    $usernameValidation = validateUsername($username);
    $passwordValidation = validatePassword($password);
    $emailValidation = validateEmail($email);


//checks if conditions are true
    if ($usernameValidation === "" && $passwordValidation === "Password validation passed." && $emailValidation === "") {
        try {
            $new_user = array(
                "username" => escape($_POST['username']),
                "password" => escape($_POST['password']),
                "email" => escape($_POST['email']),
                "date" => date("Y-m-d")
            );
            $sql = sprintf("INSERT INTO %s (%s) values (%s)", "users",
                implode(", ", array_keys($new_user)),
                ":" . implode(", :", array_keys($new_user)));
            $statement = $connection->prepare($sql);
            $statement->execute($new_user);
            if ($statement) {
                header("location: Login.php");
                exit;
            }
        } catch (PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
    }
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

$usernameError = $passwordError = $emailError = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $email = $_POST['email'] ?? '';

    $usernameError = validateUsername($username);
    $passwordError = validatePassword($password);
    $emailError = validateEmail($email);

    if (!$usernameError && !$passwordError && !$emailError) {
        //save to database
        echo '<p class="success">Form submitted successfully!</p>';
    }
}
?>

