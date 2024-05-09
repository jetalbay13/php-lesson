<?php
require('dbconfig.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Delete user from the database
    $stmt = $conn->prepare("DELETE FROM users WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    
    header("Location: ../index.php");
    exit;
} else {
    echo "User ID not provided";
    exit;
}
?>
