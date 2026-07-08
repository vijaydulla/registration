<?php
include("config.php");

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id='$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Edit Student</h2>

<form action="update.php" method="POST">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<label>Full Name</label>
<input type="text" name="name" value="<?php echo $row['name']; ?>" required>

<label>Email</label>
<input type="email" name="email" value="<?php echo $row['email']; ?>" required>

<label>Mobile</label>
<input type="text" name="mobile" value="<?php echo $row['mobile']; ?>" required>

<label>Age</label>
<input type="number" name="age" value="<?php echo $row['age']; ?>" required>

<label>Gender</label>
<select name="gender" required>
    <option value="Male" <?php if($row['gender']=="Male") echo "selected"; ?>>Male</option>
    <option value="Female" <?php if($row['gender']=="Female") echo "selected"; ?>>Female</option>
    <option value="Other" <?php if($row['gender']=="Other") echo "selected"; ?>>Other</option>
</select>

<label>Address</label>
<textarea name="address" required><?php echo $row['address']; ?></textarea>

<br><br>

<button type="submit" name="update">Update</button>

</form>

</div>

</body>
</html>