<?php
require "./config/db.php";
require "./products.php";
require "./functions.php";

$product = new Product($pdo);
$products = $product->getAll();

include "./header.php";
?>

<a href="./admin/dashboard.php">Admin Dashboard</a>

<?php foreach($products as $p): ?>
    <?php if($p['price'] > 0): ?>
        <div class="card">
            <img src="../images/<?php echo $p['image']; ?>" width="150">
            <h3><?php echo $p['name']; ?></h3>
            <p><?php echo formatPrice($p['price']); ?></p>
        </div>
    <?php endif; ?>
<?php endforeach; ?>

<?php include "./footer.php"; ?>