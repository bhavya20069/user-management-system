<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
</head>
<body>

<h2>Dashboard</h2>

<h3>
Welcome <?php echo $_SESSION['user']['username']; ?>
</h3>

<br>

<a href="users.php">Users Table</a>

<br><br>

<a href="profile.php">My Profile</a>

<br><br>

<a href="logout.php">Logout</a>

</body>
</html>