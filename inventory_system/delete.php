<?php include 'db.php';

$id = $_GET['id'];

if(isset($_POST['confirm'])){
    mysqli_query($conn,"DELETE FROM products WHERE product_id='$id'");
    header("Location: view_products.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Delete Product</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<header>
<h1>Inventory Control & Stock Tracking System</h1>
</header>

<nav>
<a href="index.html">Home</a>
<a href="view_products.php">View Products</a>
</nav>

<div class="product-box">

<h2>Confirm Delete</h2>

<p>Are you sure you want to delete this product?</p>

<form method="POST">
<button type="submit" name="confirm">Yes, Delete</button>
</form>

<div class="back-container">
<a href="view_products.php" class="back-btn">Cancel</a>
</div>

</div>

<footer>
<p>Inventory System Project | 2026</p>
</footer>

</body>
</html>