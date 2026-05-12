
<?php
include 'config.php';

$stmt = $conn->prepare("SELECT * FROM products");
$stmt->execute();

$products = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>

<title>Products</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">

</head>

<body>

<?php include 'navbar.php'; ?>

<div class="container mt-5">

<h1 class="text-center mb-5">All Products</h1>

<div class="row">

<?php foreach($products as $product){ ?>

<div class="col-md-4 mb-4">

<div class="card shadow border-0 product-card h-100">

<img src="images/<?php echo $product['image']; ?>" class="card-img-top">

<div class="card-body">

<h4><?php echo $product['name']; ?></h4>

<p><?php echo $product['description']; ?></p>

<h5 class="text-primary"><?php echo $product['price']; ?> €</h5>

<p>
<span class="badge bg-dark">
<?php echo $product['category']; ?>
</span>
</p>

<a href="product.php?id=<?php echo $product['id']; ?>" class="btn btn-primary w-100">
View Product
</a>

</div>
</div>
</div>

<?php } ?>

</div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
