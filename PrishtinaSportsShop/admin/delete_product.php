
<?php
include '../config.php';

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM products WHERE id=?");
$stmt->execute([$id]);

header("Location: dashboard.php");
?>
