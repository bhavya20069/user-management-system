<?php
include 'config/db.php';

if(isset($_POST['add'])){

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$role=$_POST['role'];

$sql="INSERT INTO users(username,email,password,role)
VALUES('$username','$email','$password','$role')";

mysqli_query($conn,$sql);

header("Location: users.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add User</title>
</head>
<body>

<h2>Add User</h2>

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

<button name="add">
Add User
</button>

</form>

</body>
</html>