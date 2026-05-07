<?php
include '../config.php';

$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM products WHERE id = :id");
$stmt->execute([':id' => $id]);

$product = $stmt->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['update_product'])) {

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $sql = "UPDATE products
            SET
                name = :name,
                description = :description,
                price = :price,
                image = :image
            WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':name' => $name,
        ':description' => $description,
        ':price' => $price,
        ':image' => $image,
        ':id' => $id
    ]);

    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Edit Product</h2>

    <form method="POST">

        <div class="mb-3">
            <label>Name</label>

            <input type="text"
                   name="name"
                   class="form-control"
                   value="<?php echo $product['name']; ?>"
                   required>
        </div>

        <div class="mb-3">
            <label>Description</label>

            <textarea name="description"
                      class="form-control"
                      required><?php echo $product['description']; ?></textarea>
        </div>

        <div class="mb-3">
            <label>Price</label>

            <input type="number"
                   step="0.01"
                   name="price"
                   class="form-control"
                   value="<?php echo $product['price']; ?>"
                   required>
        </div>

        <div class="mb-3">
            <label>Image Name</label>

            <input type="text"
                   name="image"
                   class="form-control"
                   value="<?php echo $product['image']; ?>"
                   required>
        </div>

        <button type="submit"
                name="update_product"
                class="btn btn-primary">
            Update Product
        </button>

    </form>

</div>

</body>
</html>