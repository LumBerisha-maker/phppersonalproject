<?php
$conn = mysqli_connect("localhost", "root", "", "sports-shop");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>