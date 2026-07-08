<?php
include("config.php");

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "DELETE FROM students WHERE id='$id'";

    if(mysqli_query($conn, $sql))
    {
        echo "<script>
                alert('Record Deleted Successfully');
                window.location='view.php';
              </script>";
    }
    else
    {
        echo "Error: " . mysqli_error($conn);
    }
}
?>