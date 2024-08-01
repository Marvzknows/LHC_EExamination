<?php

require_once '../config/post.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $method = new Post();
    
    $name = $_POST['name'];
    $password = $_POST['password'];

    $signup = $method->signup($name, $password);
    echo json_encode($signup);

    
}else {
    echo json_encode([
        "status" => 405,
        "message" => "Invalid Request Method"
    ]);
}

?>