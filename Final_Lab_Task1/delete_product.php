<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = " ";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$delete_product_id = $_POST['delete_product_id'];

$sql = "DELETE FROM products WHERE id=$delete_product_id";

if ($conn->query($sql) === TRUE) {
    echo "Product deleted successfully";
} else {
    echo "Error deleting product: " . $conn->error;
}

$conn->close();
?>
