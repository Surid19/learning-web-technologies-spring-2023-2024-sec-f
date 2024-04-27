<!-- employee.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Panel</title>
</head>
<body>
    <h1>Employee Panel</h1>
    <form action="add_product.php" method="post">
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required><br>
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" required><br>
        <input type="submit" value="Add Product">
    </form>
    
    <h2>Product Management</h2>

    <form action="search_product.php" method="post">
        <label for="search_keyword">Search Product:</label>
        <input type="text" id="search_keyword" name="search_keyword" required>
        <input type="submit" value="Search">
    </form>
    
    <form action="edit_product.php" method="post">
        <label for="edit_product_id">Edit Product ID:</label>
        <input type="number" id="edit_product_id" name="edit_product_id" required><br>
        <label for="edit_quantity">New Quantity:</label>
        <input type="number" id="edit_quantity" name="edit_quantity" required><br>
        <label for="edit_price">New Price:</label>
        <input type="text" id="edit_price" name="edit_price" required><br>
        <input type="submit" value="Edit Product">
    </form>
    
    <form action="delete_product.php" method="post">
        <label for="delete_product_id">Delete Product ID:</label>
        <input type="number" id="delete_product_id" name="delete_product_id" required><br>
        <input type="submit" value="Delete Product">
    </form>
</body>
</html>
