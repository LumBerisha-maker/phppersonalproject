<?php
require "../config/db.php";
require "../classes/Product.php";

$product = new Product($pdo);
$product->delete($_GET['id']);

header("Location: dashboard.php");