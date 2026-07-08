<?php
include("config.php");

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    $sql = "UPDATE students SET 
            name='$name',
            email='$email',
            mobile='$mobile',
            age='$age',
            gender='$gender',
            address='$address'
            WHERE id='$id'";

    if(mysqli_query($conn, $sql))
    {
        echo "<script>
                alert('Record Updated Successfully');
                window.location='view.php';
              </script>";
    }
    else
    {
        echo "Error: " . mysqli_error($conn);
    }
}
?>