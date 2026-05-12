
<?php
include '../config.php';

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM products WHERE id=?");
$stmt->execute([$id]);

$product = $stmt->fetch();

if(isset($_POST['update'])){

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$image = $_POST['image'];
$category = $_POST['category'];

$update = $conn->prepare("UPDATE products SET name=?,description=?,price=?,image=?,category=? WHERE id=?");

$update->execute([$name,$description,$price,$image,$category,$id]);

header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Product</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow border-0">

<div class="card-body p-5">

<h2 class="mb-4">Edit Product</h2>

<form method="POST">

<input type="text" name="name" class="form-control mb-3" value="<?php echo $product['name']; ?>">

<textarea name="description" class="form-control mb-3"><?php echo $product['description']; ?></textarea>

<input type="text" name="price" class="form-control mb-3" value="<?php echo $product['price']; ?>">

<input type="text" name="image" class="form-control mb-3" value="<?php echo $product['image']; ?>">

<input type="text" name="category" class="form-control mb-3" value="<?php echo $product['category']; ?>">

<button type="submit" name="update" class="btn btn-primary">
Update Product
</button>

</form>

</div>
</div>

</div>

</body>
</html>
