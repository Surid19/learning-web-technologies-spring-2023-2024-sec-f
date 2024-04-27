<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = " ";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$search_keyword = $_POST['search_keyword'];

$sql = "SELECT * FROM employees WHERE name LIKE '%$search_keyword%' OR contact_no LIKE '%$search_keyword%' OR username LIKE '%$search_keyword%'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "<h3>Search Results:</h3>";
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>Name: " . $row["name"]. " - Contact No: " . $row["contact_no"]. " - Username: " . $row["username"]. "</li>";
    }
    echo "</ul>";
} else {
    echo "No results found";
}

$conn->close();
?>
