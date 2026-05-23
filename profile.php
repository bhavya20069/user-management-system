<?php
session_start();
include 'config/db.php';

$user=$_SESSION['user'];

$id=$user['id'];

$sql="SELECT * FROM users WHERE id='$id'";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);

if(isset($_POST['upload'])){

$image=$_FILES['image']['name'];

$tmp=$_FILES['image']['tmp_name'];

move_uploaded_file($tmp,"uploads/".$image);

$update="UPDATE users
SET image='$image'
WHERE id='$id'";

mysqli_query($conn,$update);

header("Location: profile.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
</head>
<body>

<h2>My Profile</h2>

<?php if($row['image']!=""){ ?>

<img src="uploads/<?php echo $row['image']; ?>"
width="150">

<?php } ?>

<form method="POST"
enctype="multipart/form-data">

<br>

<input type="file" name="image">

<br><br>

<button name="upload">
Upload
</button>

</form>

<br><br>

Username:
<?php echo $row['username']; ?>

<br><br>

Email:
<?php echo $row['email']; ?>

</body>
</html>