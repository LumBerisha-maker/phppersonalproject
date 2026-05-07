<?php
include '../config.php';

if(isset($_POST['add_product'])) {

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $sql = "INSERT INTO products(name, description, price, image)
            VALUES(:name, :description, :price, :image)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':name' => $name,
        ':description' => $description,
        ':price' => $price,
        ':image' => $image
    ]);

    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Add Product</h2>

    <form method="POST">

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label>Price</label>
            <input type="number" step="0.01" name="price" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Image Name</label>
            <input type="text" name="image" class="form-control" placeholder="football.jpg" required>
        </div>

        <button type="submit" name="add_product" class="btn btn-success">
            Add Product
        </button>

    </form>

</div>

</body>
</html>