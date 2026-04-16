<?php
include "db.php";
include "functions.php";

$products = getProducts($conn);
$title = "Sports Shop";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1><?php echo $title; ?></h1>
</header>

<!-- Slider -->
<div class="slider">
    <div class="slides">
        <img src="https://via.placeholder.com/1200x300?text=Football">
        <img src="https://via.placeholder.com/1200x300?text=Basketball">
        <img src="https://via.placeholder.com/1200x300?text=Fitness">
    </div>
</div>

<div class="container">
    <h2>Products</h2>

    <?php
    // LOOP
    if ($products->num_rows > 0) {
        while($row = $products->fetch_assoc()) {
    ?>

        <div class="product">
            <img src="<?php echo $row['image']; ?>" width="100%">
            <h3><?php echo $row['name']; ?></h3>
            <p>$<?php echo $row['price']; ?></p>

            <!-- CONDITIONAL -->
            <?php if ($row['price'] > 50): ?>
                <p style="color:red;">Premium Product</p>
            <?php else: ?>
                <p style="color:green;">Budget Friendly</p>
            <?php endif; ?>
        </div>

    <?php
        }
    } else {
        echo "No products found";
    }
    ?>

</div>

</body>
</html>