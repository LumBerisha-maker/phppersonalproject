<?php
include("config/db.php");
include("includes/header.php");

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM products WHERE id=$id");
$product = mysqli_fetch_assoc($query);
?>

<div class="details">
    <img src="images/<?php echo $product['image']; ?>">
    <div>
        <h2><?php echo $product['name']; ?></h2>
        <p><?php echo $product['description']; ?></p>
        <h3>$<?php echo $product['price']; ?></h3>
        <button class="btn">Add to Cart</button>
    </div>
</div>

<?php include("includes/footer.php"); ?>