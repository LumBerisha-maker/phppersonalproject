<?php
require "../config/db.php";
require "../classes/Product.php";

$product = new Product($pdo);
$item = $product->getById($_GET['id']);

if($_POST){
    $product->update($_GET['id'], $_POST);
    header("Location: dashboard.php");
}
?>

<form method="POST">
<input name="name" value="<?php echo $item['name']; ?>">
<input name="price" value="<?php echo $item['price']; ?>">
<button>Update</button>
</form>