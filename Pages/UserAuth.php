<?php
class UserAuth {
    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function checkLoggedIn() {
        if (isset($_SESSION['Username'])) {
            echo 'You are already logged in as ' . $_SESSION['Username'];
            exit;
        }
    }

    public function registerUser() {
        if (isset($_POST['submit'])) {
            try {
                $new_user = array(
                    "username" => $this->escape($_POST['username']),
                    "password" => $this->escape($_POST['password']),
                    "email" => $this->escape($_POST['email']),
                    "date" => date("Y-m-d")
                );
                $sql = sprintf(
                    "INSERT INTO %s (%s) values (%s)",
                    "users",
                    implode(", ", array_keys($new_user)),
                    ":" . implode(", :", array_keys($new_user))
                );
                $statement = $this->connection->prepare($sql);
                $statement->execute($new_user);
                if ($statement) {
                    header("location: Login.php");
                    exit;
                }
            } catch(PDOException $error) {
                echo $sql . "<br>" . $error->getMessage();
            }
        }
    }

    private function escape($input) {
        // Assuming you have a real escaping method here
        return htmlspecialchars($input);
    }
}
?>
