<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>View Suppliers</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<header>
<h1>Inventory Control & Stock Tracking System</h1>
</header>



<div class="container">

<h2>Supplier List</h2>

<table class="product-table">
<tr>
<th>ID</th>
<th>Supplier Name</th>
<th>Phone</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM suppliers");

while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
        <td>{$row['supplier_id']}</td>
        <td>{$row['supplier_name']}</td>
        <td>{$row['phone']}</td>
    </tr>";
}
?>

</table>

</div>
<div class="back-container">
    <a href="index.html" class="back-btn">Back to Home</a>
</div>
<footer>
<p>Inventory System Project | 2026</p>
</footer>

</body>
</html>