<?php
session_start();
require_once '../config/db.php';
class Post extends Config
{

    public function login($name, $password)
    {
        $conn = $this->conn();
        $stmt = $conn->prepare("SELECT * FROM users WHERE name = :name");
        $stmt->bindParam("name", $name);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify password
        if ($user && password_verify($password, $user['password'])) {

            $_SESSION['is_loggedIn'] = true;
            $_SESSION['name'] = $name;

            return [
                "status" => 200,
                "is_valid" => true,
                "message" => "Successfully Logged in"
            ];
        } else {
            return [
                "status" => 401,
                "is_valid" => false,
                "message" => "Login Failed"
            ];
        }
    }

    public function signup($name, $password) {

        $conn = $this->conn();
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);  // Hash the password first
        $stmt = $conn->prepare("INSERT INTO users (name, password) VALUES (:name, :password)");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":password", $hashedPassword);  // Bind the hashed password
        $stmt->execute();
    
        if($stmt->rowCount() > 0) {
            return [
                "status" => 200,
                "message" => "Successfully Registered"
            ];
        } else {
            return [
                "status" => 401,
                "message" => "Registration Failed"
            ];
        }
    }
    
}
