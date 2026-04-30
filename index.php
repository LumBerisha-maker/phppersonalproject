<?php
require "./config/db.php";
require "./products.php";
require "./functions.php";

$product = new Product($pdo);
$products = $product->getAll();

include "./header.php";
?>

<a href="./admin/dashboard.php">Admin Dashboard</a>

<?php foreach($products as $p): ?>
    <?php if($p['price'] > 0): ?>
        <div class="card">
            <img src="../images/<?php echo $p['image']; ?>" width="150">
            <h3><?php echo $p['name']; ?></h3>
            <p><?php echo formatPrice($p['price']); ?></p>
        </div>
    <?php endif; ?>
<?php endforeach; ?>

<?php include "./footer.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>