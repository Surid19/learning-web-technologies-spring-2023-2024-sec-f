<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = " ";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$delete_employee_id = $_POST['delete_employee_id'];

$sql = "DELETE FROM employees WHERE id=$delete_employee_id";

if ($conn->query($sql) === TRUE) {
    echo "Employee deleted successfully";
} else {
    echo "Error deleting employee: " . $conn->error;
}

$conn->close();
?>
