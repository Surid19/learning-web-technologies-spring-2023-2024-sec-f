<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = " ";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$edit_product_id = $_POST['edit_product_id'];
$edit_quantity = $_POST['edit_quantity'];
$edit_price = $_POST['edit_price'];

$sql = "UPDATE products SET quantity='$edit_quantity', price='$edit_price' WHERE id=$edit_product_id";

if ($conn->query($sql) === TRUE) {
    echo "Product edited successfully";
} else {
    echo "Error editing product: " . $conn->error;
}

$conn->close();
?>
