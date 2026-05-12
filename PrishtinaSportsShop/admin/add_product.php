
<?php
include '../config.php';

if(isset($_POST['submit'])){

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$image = $_POST['image'];
$category = $_POST['category'];

$stmt = $conn->prepare("INSERT INTO products(name,description,price,image,category)
VALUES(?,?,?,?,?)");

$stmt->execute([$name,$description,$price,$image,$category]);

header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow border-0">
<div class="card-body p-5">

<h2 class="mb-4">Add Product</h2>

<form method="POST">

<input type="text" name="name" class="form-control mb-3" placeholder="Product Name">

<textarea name="description" class="form-control mb-3" placeholder="Description"></textarea>

<input type="text" name="price" class="form-control mb-3" placeholder="Price">

<input type="text" name="image" class="form-control mb-3" placeholder="Image Name">

<input type="text" name="category" class="form-control mb-3" placeholder="Category">

<button type="submit" name="submit" class="btn btn-success">
Add Product
</button>

</form>

</div>
</div>

</div>

</body>
</html>
