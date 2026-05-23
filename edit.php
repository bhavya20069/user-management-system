<?php
include 'config/db.php';

$id=$_GET['id'];

$sql="SELECT * FROM users WHERE id='$id'";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

$username=$_POST['username'];
$email=$_POST['email'];
$role=$_POST['role'];

$update="UPDATE users SET
username='$username',
email='$email',
role='$role'
WHERE id='$id'";

mysqli_query($conn,$update);

header("Location: users.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit User</title>
</head>
<body>

<h2>Edit User</h2>

<form method="POST">

Username:<br>
<input type="text" name="username"
value="<?php echo $row['username']; ?>">
<br><br>

Email:<br>
<input type="email" name="email"
value="<?php echo $row['email']; ?>">
<br><br>

Role:<br>
<input type="text" name="role"
value="<?php echo $row['role']; ?>">
<br><br>

<button name="update">
Update
</button>

</form>

</body>
</html>