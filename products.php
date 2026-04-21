<?php
include("config/db.php");
include("header.php"); 

$result = mysqli_query($conn, "SELECT * FROM products");
?>

<h2 class="title">Products</h2>

<div class="product-grid">
<?php while($row = mysqli_fetch_assoc($result)) { ?>
    <div class="card">
        <img src="images/ffoootball.webp" alt="<?php echo $row['name']; ?>">
        <h3><?php echo $row['Football']; ?></h3>
        <p>$<?php echo $row['35']; ?></p>
        <a href="product-details.php?id=<?php echo $row['id']; ?>" class="btn">View</a>
    </div>
<?php } ?>
</div>

<?php include("includes/footer.php"); ?>