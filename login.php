<?php include 'db.php'; session_start(); $msg=""; ?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<form method="POST">
<h2><i class="fa fa-lock"></i> Login</h2>
<?php if($msg) echo "<div class='msg'>$msg</div>"; ?>
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit" name="login">Login</button>
<a href="register.php">New User? Register</a>
</form>

</body>
</html>

<?php
if(isset($_POST['login'])){
$q=mysqli_query($conn,"SELECT * FROM students WHERE username='{$_POST['username']}' AND password='{$_POST['password']}'");
if(mysqli_num_rows($q)){
$_SESSION['username']=$_POST['username'];
header("Location: dashbroad.php");
}else $msg="Invalid login or register first";
}
?>