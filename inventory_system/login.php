<?php include 'db.php'; session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="login-page">

<div class="login-box">
    <h2>Login</h2>

    <form method="POST">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <button type="submit" name="login">Login</button>
    </form>

<?php
if(isset($_POST['login'])){
    $u = $_POST['username'];
    $p = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$u' AND password='$p'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['user']=$u;
        header("Location: dashboard.php");
    } else {
        echo "<p class='error-msg'>Invalid Login!</p>";
    }
}
?>

</div>

</body>
</html>