<?php 
require_once 'fruitkha_connect.php'; 
include "../view/contact.html";

try {
    $pdo = new PDO($attr, $user, $pass, $opts); 
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int) $e->getCode()); 
}

// // Check if the form for deleting a contact message is submitted
// if (isset($_POST['delete']) && isset($_POST['name'])) {
//     $name = $_POST['name']; // Get the name of the contact message to be deleted
//     $query = "DELETE FROM contact WHERE name = ?";
//     $stmt = $pdo->prepare($query);
//     $stmt->execute([$name]);
// }

// Check if the form for adding a new contact message is submitted
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['subject']) && isset($_POST['message'])) {
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone'];
    $subject = $_POST['subject']; 
    $message = $_POST['message']; 

    $query = "INSERT INTO contact (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$name, $email, $phone, $subject, $message]);
}



// // Fetch and display existing contact messages
// $query = "SELECT * FROM contact";
// $stmt = $pdo->query($query);
// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//     echo "Name: " . htmlspecialchars($row['name']) . "<br>";
//     echo "Email: " . htmlspecialchars($row['email']) . "<br>";
//     echo "Phone: " . htmlspecialchars($row['phone']) . "<br>";
//     echo "Subject: " . htmlspecialchars($row['subject']) . "<br>";
//     echo "Message: " . htmlspecialchars($row['message']) . "<br>";
//     echo '<form action="contact_insert.php" method="post">';
//     echo '<input type="hidden" name="delete" value="yes">';
//     echo '<input type="hidden" name="name" value="' . $row['name'] . '">';
//     echo '<input type="submit" value="Delete">';
//     echo '</form><br>';
// }

$pdo = null; // Close the database connection
?>