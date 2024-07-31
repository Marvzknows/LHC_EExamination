<?php

session_start();

require_once '../config/post.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $conn = new Config();
    

    
}else {
    echo json_encode([
        "status" => 405,
        "message" => "Invalid Request Method"
    ]);
}

?>