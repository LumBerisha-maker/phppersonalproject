<?php
require "../config/db.php";
require "../classes/Product.php";

$product = new Product($pdo);

if($_POST){
    $product->create($_POST);
    header("Location: dashboard.php");
}
?>

<form method="POST">
<input name="name" placeholder="Name">
<input name="price" placeholder="Price">
<input name="category" placeholder="Category">
<input name="image" placeholder="Image">
<textarea name="description"></textarea>
<button>Add</button>
</form>