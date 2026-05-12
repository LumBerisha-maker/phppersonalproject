
<?php
include 'config.php';

if(isset($_GET['id'])){

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM products WHERE id=?");
$stmt->execute([$id]);

$product = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Product Details</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">

</head>

<body>

<?php include 'navbar.php'; ?>

<div class="container mt-5">

<?php if($product){ ?>

<div class="row bg-white p-4 rounded shadow">

<div class="col-md-6">
<img src="images/<?php echo $product['image']; ?>" class="img-fluid rounded">
</div>

<div class="col-md-6">

<h1><?php echo $product['name']; ?></h1>

<p class="mt-4"><?php echo $product['description']; ?></p>

<h2 class="text-success"><?php echo $product['price']; ?> €</h2>

<p>
Category:
<span class="badge bg-dark">
<?php echo $product['category']; ?>
</span>
</p>

<button class="btn btn-warning btn-lg">
Buy Now
</button>

</div>
</div>

<?php } else { ?>

<div class="alert alert-danger">
Product not found
</div>

<?php } ?>

</div>

<?php include 'footer.php'; ?>

</body>
</html>
