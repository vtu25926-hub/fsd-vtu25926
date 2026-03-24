<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="product-box">
<h2>Add Product</h2>

<form method="POST">
Product Name: <input type="text" name="name"><br>
Price: <input type="text" name="price"><br>
Stock: <input type="number" name="stock"><br>

Supplier:
<select name="supplier">
<?php
$result=mysqli_query($conn,"SELECT * FROM suppliers");
while($row=mysqli_fetch_assoc($result)){
    echo "<option value='{$row['supplier_id']}'>{$row['supplier_name']}</option>";
}
?>
</select><br>

<button type="submit" name="submit">Add Product</button>
</form>

<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $price=$_POST['price'];
    $stock=$_POST['stock'];
    $supplier=$_POST['supplier'];

    mysqli_query($conn,"INSERT INTO products
    (product_name,price,stock,supplier_id)
    VALUES('$name','$price','$stock','$supplier')");

    echo "<p class='success-msg'>Product Added!</p>";
}
?>

<div class="back-container">
    <a href="index.html" class="back-btn">Back to Home</a>
</div>

</div>

</body>
</html>