<?php include 'db.php';

$id = $_GET['id'];

if(isset($_POST['update'])){
    $stock = $_POST['stock'];
    mysqli_query($conn,"UPDATE products SET stock='$stock' WHERE product_id='$id'");
    header("Location: view_products.php");
}

$result = mysqli_query($conn,"SELECT * FROM products WHERE product_id='$id'");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>Update Product</title>
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

<h2>Update Stock</h2>

<form method="POST">
<input type="number" name="stock" value="<?php echo $row['stock']; ?>" required>
<button type="submit" name="update">Update</button>
</form>

<div class="back-container">
<a href="index.html" class="back-btn">Back to Home</a>
</div>

</div>

<footer>
<p>Inventory System Project | 2026</p>
</footer>

</body>
</html>