
<?php
include 'config.php';

$stmt = $conn->prepare("SELECT * FROM products");
$stmt->execute();

$products = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>

<title>Prishtina Sports Shop</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">

</head>

<body>

<?php include 'navbar.php'; ?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

<div class="carousel-indicators">

<?php for($i = 0; $i < 3; $i++){ ?>

<button type="button"
data-bs-target="#carouselExampleCaptions"
data-bs-slide-to="<?php echo $i; ?>"
<?php if($i == 0){ ?> class="active" <?php } ?>>
</button>

<?php } ?>

</div>

<div class="carousel-inner">

<div class="carousel-item active">
<img src="images/shop1.jpg" class="d-block w-100" height="650">

<div class="carousel-caption d-none d-md-block">
<h1 class="fw-bold">Prishtina Sports Shop</h1>
<p>Best Sports Equipment in Kosovo</p>
</div>

</div>

<div class="carousel-item">
<img src="images/sport2.png" class="d-block w-100" height="650">

<div class="carousel-caption d-none d-md-block">
<h1>Football & Basketball Collection</h1>
<p>Professional products for training and matches</p>
</div>

</div>

<div class="carousel-item">
<img src="images/sport3.png" class="d-block w-100" height="650">

<div class="carousel-caption d-none d-md-block">
<h1>Fitness & Gym Products</h1>
<p>Everything you need for your workouts</p>
</div>

</div>

</div>

<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>

<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>

</div>

<div class="container mt-5">

<div class="row text-center mb-5">

<div class="col-md-4">
<div class="card shadow border-0 p-4 h-100">
<h3>High Quality</h3>
<p>Professional sports products with the best quality.</p>
</div>
</div>

<div class="col-md-4">
<div class="card shadow border-0 p-4 h-100">
<h3>Fast Delivery</h3>
<p>Fast and safe delivery all around Kosovo.</p>
</div>
</div>

<div class="col-md-4">
<div class="card shadow border-0 p-4 h-100">
<h3>Best Prices</h3>
<p>Affordable prices for students and athletes.</p>
</div>
</div>

</div>

<h2 class="text-center mb-5 fw-bold">Featured Products</h2>

<div class="row">

<?php foreach($products as $product){ ?>

<div class="col-md-4 mb-4">

<div class="card shadow-lg border-0 h-100 product-card">

<img src="images/<?php echo $product['image']; ?>" class="card-img-top">

<div class="card-body">

<h4><?php echo $product['name']; ?></h4>

<p><?php echo $product['description']; ?></p>

<h5 class="text-success"><?php echo $product['price']; ?> €</h5>

<p>
<span class="badge bg-dark">
<?php echo $product['category']; ?>
</span>
</p>

<a href="product.php?id=<?php echo $product['id']; ?>" class="btn btn-dark w-100">
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
