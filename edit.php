<?php include 'db.php'; session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

$username = $_SESSION['username'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE username='$username'");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $father = $_POST['father'];
    $mother = $_POST['mother'];
    $dob = $_POST['dob'];
    $college = $_POST['college'];
    $year = $_POST['year'];
    $department = $_POST['department'];
    $branch = $_POST['branch'];

    $update = "UPDATE students SET 
        name='$name', father_name='$father', mother_name='$mother', dob='$dob',
        college='$college', year='$year', department='$department', branch='$branch'
        WHERE username='$username'";
if (mysqli_query($conn, $update)) {
        echo "<script>alert('Profile Updated'); window.location='dashbroad.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Profile</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="POST">
<h2>Edit Profile</h2>

<input type="text" name="name" value="<?php echo $data['name']; ?>" required>
<input type="text" name="father" value="<?php echo $data['father_name']; ?>" required>
<input type="text" name="mother" value="<?php echo $data['mother_name']; ?>" required>
<input type="date" name="dob" value="<?php echo $data['dob']; ?>" required>
<input type="text" name="college" value="<?php echo $data['college']; ?>" required>
<input type="text" name="year" value="<?php echo $data['year']; ?>" required>
<input type="text" name="department" value="<?php echo $data['department']; ?>" required>
<input type="text" name="branch" value="<?php echo $data['branch']; ?>" required>

<button type="submit" name="update">Update</button>
</form>

</body>
</html>