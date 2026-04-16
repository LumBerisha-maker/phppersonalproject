<?php
include "db.php";

$id = $_GET['id'];

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];

    $sql = "UPDATE products SET name='$name', price='$price' WHERE id=$id";
    $conn->query($sql);

    header("Location: dashboard.php");
}

$result = $conn->query("SELECT * FROM products WHERE id=$id");
$row = $result->fetch_assoc();
?>

<form method="POST">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
    Price: <input type="number" name="price" value="<?php echo $row['price']; ?>"><br>
    <button name="update">Update</button>
</form>