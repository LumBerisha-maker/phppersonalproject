
<?php
include '../config.php';

if(!isset($_SESSION['user']) || $_SESSION['role'] != 'admin'){
header("Location: ../login.php");
}

$stmt = $conn->prepare("SELECT * FROM products");
$stmt->execute();

$products = $stmt->fetchAll();

$count = $conn->query("SELECT COUNT(*) FROM products")->fetchColumn();
?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="d-flex justify-content-between align-items-center mb-4">
<h1>Admin Dashboard</h1>

<a href="../logout.php" class="btn btn-danger">
Logout
</a>
</div>

<div class="row">

<div class="col-md-4">

<div class="card bg-dark text-white shadow-lg dashboard-card">

<div class="card-body">

<h4>Total Products</h4>

<h1><?php echo $count; ?></h1>

</div>
</div>
</div>

</div>

<a href="add_product.php" class="btn btn-success mt-4 mb-4">
Add Product
</a>

<div class="card shadow border-0">

<div class="card-body">

<table class="table table-hover">

<tr>
<th>ID</th>
<th>Name</th>
<th>Price</th>
<th>Category</th>
<th>Edit</th>
<th>Delete</th>
</tr>

<?php foreach($products as $product){ ?>

<tr>

<td><?php echo $product['id']; ?></td>
<td><?php echo $product['name']; ?></td>
<td><?php echo $product['price']; ?> €</td>
<td><?php echo $product['category']; ?></td>

<td>
<a href="edit_product.php?id=<?php echo $product['id']; ?>" class="btn btn-primary btn-sm">
Edit
</a>
</td>

<td>
<a href="delete_product.php?id=<?php echo $product['id']; ?>" class="btn btn-danger btn-sm">
Delete
</a>
</td>

</tr>

<?php } ?>

</table>

</div>
</div>

</div>

</body>
</html>
