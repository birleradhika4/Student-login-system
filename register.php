<?php include 'db.php'; $msg=""; ?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>


<body>
<form method="POST">

<h2><i class="fa fa-user-plus"></i> Register</h2>

<?php if($msg) echo "<div class='msg'>$msg</div>"; ?>

  <input type="text" name="name" placeholder="Name" required>
<input type="text" name="father" placeholder="Father Name" required>
<input type="text" name="mother" placeholder="Mother Name" required>
<input type="date" name="dob" required>
<input type="text" name="college" placeholder="College Name" required>
<input type="text" name="year" placeholder="Year" required>
<input type="text" name="department" placeholder="Department" required>
<input type="text" name="branch" placeholder="Branch" required>
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit" name="register">Register</button>
<a href="login.php">Already Registered? Login</a>
</form>

</body>
</html>

<?php
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $father = $_POST['father'];
    $mother = $_POST['mother'];
    $dob = $_POST['dob'];
    $college = $_POST['college'];
    $year = $_POST['year'];
    $department = $_POST['department'];
    $branch = $_POST['branch'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO students(name,father_name,mother_name,dob,college,year,department,branch,username,password)
            VALUES('$name','$father','$mother','$dob','$college','$year','$department','$branch','$username','$password')";

  if(mysqli_query($conn,$sql)) $msg="Registered Successfully";
else $msg="Error! Try again";

}
?>