<?php 
require_once 'fruitkha_connect.php'; 
session_start();
include "../view/shop.html";

try {
    $pdo = new PDO($attr, $user, $pass, $opts); 
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int) $e->getCode()); 
}


$user_id = $_SESSION['user_id']; 


if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['image'])) {
    $name = $_POST['name']; 
    $price = $_POST['price'];
    $image = $_POST['image']; 

    $query = "INSERT INTO cart (user_id, name, price, image) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$user_id, $name, $price, $image]);
}

$pdo = null; 
?>