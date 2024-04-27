<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <h1>Admin Panel</h1>
    <form action="register_employee.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="contact_no">Contact No:</label>
        <input type="text" id="contact_no" name="contact_no" required><br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Register Employee">
    </form>
    
    <h2>Employee Management</h2>
    <form action="update_employee.php" method="post">
        <label for="employee_id">Employee ID:</label>
        <input type="number" id="employee_id" name="employee_id" required><br>
        <label for="new_username">New Username:</label>
        <input type="text" id="new_username" name="new_username" required><br>
        <input type="submit" value="Update Username">
    </form>
    

    <form action="search_employee.php" method="post">
        <label for="search_keyword">Search Employee:</label>
        <input type="text" id="search_keyword" name="search_keyword" required>
        <input type="submit" value="Search">
    </form>


    <form action="delete_employee.php" method="post">
        <label for="delete_employee_id">Delete Employee ID:</label>
        <input type="number" id="delete_employee_id" name="delete_employee_id" required><br>
        <input type="submit" value="Delete Employee">
    </form>

    
    
</body>
</html>
