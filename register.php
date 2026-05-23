<?php
include 'config/db.php';

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "INSERT INTO users(username,email,password,role)
            VALUES('$username','$email','$password','$role')";

    mysqli_query($conn,$sql);

    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
</head>
<body>

<h2>User Registration</h2>

<form method="POST">

Username:<br>
<input type="text" name="username" required>
<br><br>

Email:<br>
<input type="email" name="email" required>
<br><br>

Password:<br>
<input type="password" name="password" required>
<br><br>

Role:<br>
<input type="text" name="role" required>
<br><br>

<button type="submit" name="register">
Register
</button>

</form>

<br>

<a href="login.php">Login</a>

</body>
</html>