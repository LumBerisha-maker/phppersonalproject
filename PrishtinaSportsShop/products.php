<?php
include 'config.php';
include 'header.php';

function formatPrice($price) {
    return "$" . number_format((float)$price, 2);
}

// Use try-catch for safer DB handling
try {
    $stmt = $pdo->prepare("SELECT id, name, description, price, image FROM products ORDER BY id DESC");
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}
?>

<!-- Hero Section -->
<div class="bg-dark text-white p-5 rounded-4 mb-5 shadow-lg text-center">

    <h1 class="display-4 fw-bold">Prishtina Sports Collection</h1>

    <p class="lead mt-3">
        Premium sports gear, shoes, gym equipment and accessories.
    </p>

</div>

<!-- Products Title -->
<div class="d-flex justify-content-between align-items-center mb-4">

    <h2 class="fw-bold">Our Products</h2>

    <span class="badge bg-primary fs-6 p-2">
        <?= count($products) ?> Products
    </span>

</div>

<!-- Products Grid -->
<div class="row g-4">

<?php if (!empty($products)): ?>

    <?php foreach ($products as $product): ?>

        <?php
            // Safe fallbacks (IMPORTANT so page never breaks)
            $name = htmlspecialchars($product['name'] ?? 'No Name');
            $desc = htmlspecialchars($product['description'] ?? 'No description available');
            $price = $product['price'] ?? 0;
            $image = !empty($product['image']) ? $product['image'] : 'default.png';

            $imagePath = "images/" . $image;
        ?>

        <div class="col-lg-4 col-md-6">

            <div class="card border-0 shadow-lg h-100 product-card">

                <!-- Product Image -->
                <div class="overflow-hidden">

                    <img src="<?= $imagePath ?>"
                         onerror="this.src='images/default.png'"
                         class="card-img-top product-image"
                         alt="<?= $name ?>">

                </div>

                <!-- Card Body -->
                <div class="card-body d-flex flex-column">

                    <!-- Product Name -->
                    <h3 class="card-title fw-bold mb-3">
                        <?= $name ?>
                    </h3>

                    <!-- Product Description -->
                    <p class="card-text text-muted flex-grow-1">
                        <?= $desc ?>
                    </p>

                    <!-- Price + Button -->
                    <div class="d-flex justify-content-between align-items-center mt-4">

                        <h4 class="text-primary fw-bold m-0">
                            <?= formatPrice($price) ?>
                        </h4>

                        <button class="btn btn-dark px-4 rounded-pill">
                            Buy Now
                        </button>

                    </div>

                </div>

            </div>

        </div>

    <?php endforeach; ?>

<?php else: ?>

    <div class="col-12 text-center text-muted">
        <h4>No products found in database.</h4>
    </div>

<?php endif; ?>

</div>

<!-- Styling -->
<style>

.product-card{
    border-radius: 25px;
    overflow: hidden;
    transition: 0.4s;
    background: white;
}

.product-card:hover{
    transform: translateY(-12px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.2) !important;
}

.product-image{
    height: 320px;
    width: 100%;
    object-fit: cover;
    transition: 0.4s;
}

.product-card:hover .product-image{
    transform: scale(1.08);
}

.btn-dark{
    background: linear-gradient(45deg, #111827, #374151);
    border: none;
    transition: 0.3s;
}

.btn-dark:hover{
    transform: scale(1.05);
}

.badge{
    border-radius: 12px;
}

</style>

<?php include 'footer.php'; ?>