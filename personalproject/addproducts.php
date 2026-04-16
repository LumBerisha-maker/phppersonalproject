<?php
include "db.php";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $sql = "INSERT INTO products (name, price, image)
            VALUES ('$name', '$price', '$image')";

    $conn->query($sql);

    header("Location: dashboard.php");
}
?>

<form method="POST">
    Name: <input type="text" name="name"><br>
    Price: <input type="number" name="price"><br>
    Image URL: <input type="text" name="image"><br>
    <button name="submit">Add</button>
</form>