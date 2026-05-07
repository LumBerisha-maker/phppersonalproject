<?php
include '../config.php';

$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM products WHERE id = :id");
$stmt->execute([':id' => $id]);

header("Location: dashboard.php");
?>