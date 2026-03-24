<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Supplier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="supplier-box">
    <h2>Add Supplier</h2>

    <form method="POST">
        Supplier Name: <input type="text" name="name"><br>
        Phone: <input type="text" name="phone"><br>
        <button type="submit" name="submit">Add</button>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $phone=$_POST['phone'];

        mysqli_query($conn,"INSERT INTO suppliers (supplier_name,phone)
        VALUES ('$name','$phone')");

        echo "<p class='success-msg'>Supplier Added!</p>";
    }
    ?>

    <div class="back-container">
    <a href="index.html" class="back-btn">Back to Home</a>
</div>
</div>

</body>
</html>