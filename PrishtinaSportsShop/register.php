
<?php
include 'config.php';

$message = "";

if(isset($_POST['register'])){

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if(empty($username) || empty($email) || empty($password)){

$message = "Please fill all fields";

}else{

$role = "user";

$stmt = $conn->prepare("INSERT INTO users(username,email,password,role)
VALUES(?,?,?,?)");

$stmt->execute([$username,$email,$password,$role]);

$message = "Account created successfully";
}
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Register</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">

</head>

<body class="bg-light">

<?php include 'navbar.php'; ?>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-5">

<div class="card shadow-lg border-0 rounded-4">

<div class="card-body p-5">

<div class="text-center mb-4">
<img src="images/prlogo.png" width="90">
<h2 class="mt-3 fw-bold">Create Account</h2>
<p class="text-muted">Join Prishtina Sports Shop</p>
</div>

<?php if($message != ""){ ?>

<div class="alert alert-info">
<?php echo $message; ?>
</div>

<?php } ?>

<form method="POST">

<div class="mb-3">
<label>Username</label>
<input type="text" name="username" class="form-control form-control-lg">
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control form-control-lg">
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control form-control-lg">
</div>

<button type="submit" name="register" class="btn btn-primary btn-lg w-100">
Register
</button>

</form>

<div class="text-center mt-3">
<a href="login.php">
Already have an account?
</a>
</div>

</div>

</div>

</div>

</div>

</div>

<?php include 'footer.php'; ?>

</body>
</html>
