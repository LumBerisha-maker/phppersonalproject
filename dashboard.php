<?php
require "../config/db.php";
require "../classes/Product.php";

$product = new Product($pdo);
$products = $product->getAll();
?>

<h2>Dashboard</h2>
<a href="add.php">Add Product</a>

<table border="1">
<?php foreach($products as $p): ?>
<tr>
<td><?php echo $p['name']; ?></td>
<td>
<a href="edit.php?id=<?php echo $p['id']; ?>">Edit</a>
<a href="delete.php?id=<?php echo $p['id']; ?>">Delete</a>
</td>
</tr>
<?php endforeach; ?>
</table>