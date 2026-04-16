<?php
include "db.php";
include "functions.php";

$products = getProducts($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Admin Dashboard</h1>
    <a href="add_product.php">Add Product</a>
</header>

<div class="container">

<table border="1" width="100%">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Actions</th>
</tr>

<?php while($row = $products->fetch_assoc()): ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td>
        <a href="edit_product.php?id=<?php echo $row['id']; ?>">Edit</a>
        <a href="delete_product.php?id=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>
<?php endwhile; ?>

</table>

</div>
</body>
</html>