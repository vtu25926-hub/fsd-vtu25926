<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>View Products</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Product List</h2>

<table class="product-table">
<tr>
<th>ID</th>
<th>Name</th>
<th>Price</th>
<th>Stock</th>
<th>Supplier</th>
<th>Action</th>
</tr>

<?php
$sql="SELECT products.*, suppliers.supplier_name 
FROM products 
JOIN suppliers ON products.supplier_id = suppliers.supplier_id";

$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){
echo "<tr>
<td>{$row['product_id']}</td>
<td>{$row['product_name']}</td>
<td>{$row['price']}</td>
<td>{$row['stock']}</td>
<td>{$row['supplier_name']}</td>
<td>
<a href='update.php?id={$row['product_id']}'>Update</a>
<a href='delete.php?id={$row['product_id']}'>Delete</a>
</td>
</tr>";
}
?>
</table>

<div class="back-container">
    <a href="index.html" class="back-btn">Back to Home</a>
</div>

</body>
</html>