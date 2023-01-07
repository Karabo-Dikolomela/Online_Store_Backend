<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

include __DIR__ . "/databaseConfig.php"; 

class UserDAO {

    // ========================= DB CRUD METHODS =========================


    public static function fetchUser($id) {
        global $connect;

        // Begin prepare statement
        $sql = $connect->prepare("SELECT * FROM user WHERE id = ?");

        // Bind passed variable to prepare statement
        $sql->bind_param("i", $id);
        $sql->execute();
        $result = $sql->get_result();
        $user = $result->fetch_assoc();
        return $user;
    }

    public static function fetchLogin() {
        global $connect;

        // Grab login form POST inputs
        $password = trim($_POST['LoginPassword']);

        // Begin prepare statement
        $sql = "SELECT * FROM user WHERE password = ?";
        $stmt = $connect->prepare($sql);

        // Bind passed variable to prepare statement
        $stmt->bind_param("s", $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $userLogin = $result->fetch_assoc();
        
        // Close connection
        mysqli_close($connect);
        
        return $userLogin;
    }

    public static function createUser() {
        global $connect;

        // Grab register form POST inputs
        $fname = trim($_POST['RegInputName']);
        $lname = trim($_POST['RegInputSurname']);
        $email = trim($_POST['RegInputEmail']);
        $password = trim($_POST['RegInputPassword']);

        // Begin prepare statement
        $sql = "INSERT INTO user (fname, lname, email, password) VALUES (?, ?, ?, ?)";
        $stmt = $connect->prepare($sql);

        // Bind passed variable to prepare statement
        $stmt->bind_param("ssss", $fname, $lname, $email, $password);
        
        // Check if user was added to table and then redirect appropriately
        if ($stmt->execute() === TRUE){

            $sql = "SELECT * FROM user WHERE password = '" . $password . "'";
            $result = $connect->query($sql);

            if ($result->num_rows == 1) {
                $user = $result->fetch_assoc();

                // Close connection
                mysqli_close($connect);
                
                return $user;
            } 

        }
        
    }

}