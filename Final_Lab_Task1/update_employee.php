<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = " ";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$employee_id = $_POST['employee_id'];
$new_username = $_POST['new_username'];

$sql = "UPDATE employees SET username='$new_username' WHERE id=$employee_id";

if ($conn->query($sql) === TRUE) {
    echo "Employee username updated successfully";
} else {
    echo "Error updating username: " . $conn->error;
}

$conn->close();
?>
