<?php
session_start();
include 'config/db.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users
            WHERE email='$email'
            AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){

        $row = mysqli_fetch_assoc($result);

        $_SESSION['user'] = $row;

        header("Location: dashboard.php");

    }else{
        echo "Invalid Login";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>

<h2>User Login</h2>

<form method="POST">

Email:<br>
<input type="email" name="email" required>
<br><br>

Password:<br>
<input type="password" name="password" required>
<br><br>

<button type="submit" name="login">
Login
</button>

</form>

<br>

<a href="register.php">Register</a>

</body>
</html>