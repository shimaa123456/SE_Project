<?php 
require_once 'fruitkha_connect.php'; 
include "../view/shop.html";

try {
    $pdo = new PDO($attr, $user, $pass, $opts); 
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int) $e->getCode()); 
}

if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['image'])) {
    $name = $_POST['name']; 
    $price = $_POST['price'];
    $image = $_POST['image']; 

    $query = "INSERT INTO cart (name, price, image) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$name, $price, $image]);
}

$pdo = null; 
?>