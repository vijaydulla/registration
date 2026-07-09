<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("config.php");

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    $sql = "INSERT INTO students(name,email,mobile,age,gender,address)
            VALUES('$name','$email','$mobile','$age','$gender','$address')";

    if(mysqli_query($conn,$sql))
{
    echo "<script>
    alert('Registration Successful');
    window.location='insert.php';
    </script>";
}
    else
    {
        echo "Insert Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Student Registration Form</h2>

    <form action="insert.php" method="POST">

    <label>Full Name</label>
    <input type="text" name="name" required>

    <label>Email</label>
    <input type="email" name="email" required>

    <label>Mobile Number</label>
    <input type="text" name="mobile" maxlength="10" required>

    <label>Age</label>
    <input type="number" name="age" required>

    <label>Gender</label>
    <select name="gender" required>
        <option value="">Select Gender</option>
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
    </select>

    <label>Address</label>
    <textarea name="address" required></textarea>

    <button type="submit" name="submit">Register</button>

</form>

</div>

<script src="script.js"></script>

</body>
</html>