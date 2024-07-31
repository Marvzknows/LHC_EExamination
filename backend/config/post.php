<?php
session_start();
require_once '../config/db.php';
class Post extends Config
{

    public function login($username, $password)
    {
        $conn = $this->conn();
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam("username", $username);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify password
        if ($user && password_verify($password, $user['password'])) {

            $_SESSION['is_loggedIn'] = true;
            $_SESSION['username'] = $username;

            return [
                "status" => 200,
                "is_valid" => true,
                "data" => $user
            ];
        } else {
            return [
                "status" => 401,
                "is_valid" => false,
                "data" => []
            ];
        }
    }
}
