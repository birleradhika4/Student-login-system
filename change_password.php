<?php include 'db.php'; session_start(); $msg="";
if(!isset($_SESSION['username'])) header("Location: login.php");

if(isset($_POST['change'])){
$q=mysqli_query($conn,"SELECT * FROM students WHERE username='{$_SESSION['username']}' AND password='{$_POST['old']}'");
if(mysqli_num_rows($q)){
mysqli_query($conn,"UPDATE students SET password='{$_POST['new']}' WHERE username='{$_SESSION['username']}'");
$msg="Password changed";
}else $msg="Wrong old password";
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="POST">
<h2>Change Password</h2>
<input type="password" name="old" placeholder="Old Password" required>
<input type="password" name="new" placeholder="New Password" required>
<button type="submit" name="change">Change Password</button>
</form>

</body>
</html>