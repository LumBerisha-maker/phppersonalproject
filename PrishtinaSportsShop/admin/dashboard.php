<?php
include '../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1 class="mb-4">Admin Dashboard</h1>

    <a href="add_product.php" class="btn btn-success mb-3">
        Add Product
    </a>

    <table class="table table-bordered table-striped">

        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>

        <?php
        $stmt = $pdo->query("SELECT * FROM products");

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>

        <tr>
            <td><?php echo $row['id']; ?></td>

            <td>
                <img src="../images/<?php echo $row['image']; ?>" width="80">
            </td>

            <td><?php echo $row['name']; ?></td>

            <td>$<?php echo $row['price']; ?></td>

            <td>
                <a href="edit_product.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">
                    Edit
                </a>

                <a href="delete_product.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">
                    Delete
                </a>
            </td>
        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>