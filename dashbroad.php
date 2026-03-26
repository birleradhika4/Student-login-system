<?php include 'db.php'; session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

$username = $_SESSION['username'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE username='$username'");
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<div class="profile">
<h2><i class="fa fa-user"></i> Profile</h2>
<div class="item"><i class="fa fa-user"></i> <?php echo $data['name']; ?></div>
<div class="item"><i class="fa fa-users"></i> <?php echo $data['father_name']; ?></div>
<div class="item"><i class="fa fa-users"></i> <?php echo $data['mother_name']; ?></div>
<div class="item"><i class="fa fa-calendar"></i> <?php echo $data['dob']; ?></div>
<div class="item"><i class="fa fa-building"></i> <?php echo $data['college']; ?></div>
<div class="item"><i class="fa fa-graduation-cap"></i> <?php echo $data['year']; ?></div>
<div class="item"> <?php echo $data['department']; ?></div>
<div class="item"> <?php echo $data['branch']; ?></div>
<a href="edit.php">Edit</a>
<a href="change_password.php">Change Password</a>
<a href="logout.php">Logout</a>
</div>
</body>
</html>