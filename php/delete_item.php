<?php
require_once 'fruitkha_connect.php';

if (isset($_GET['name'])) {
    $name = $_GET['name'];
    try {
        $pdo = new PDO($attr, $user, $pass, $opts);
        $query = "DELETE FROM cart WHERE name = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$name]);
        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Name parameter is missing']);
}
?>