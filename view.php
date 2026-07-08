<?php
include("config.php");

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <style>
        body{
            font-family: Arial;
            background:#f4f4f4;
            margin:30px;
        }

        h2{
            text-align:center;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
        }

        th,td{
            border:1px solid #ddd;
            padding:12px;
            text-align:center;
        }

        th{
            background:#007bff;
            color:white;
        }

        a{
            text-decoration:none;
            color:white;
            padding:8px 15px;
            border-radius:5px;
        }

        .edit{
            background:green;
        }

        .delete{
            background:red;
        }
    </style>
</head>

<body>

<h2>Student Records</h2>

<table>

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Mobile</th>
    <th>Action</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['age']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['mobile']; ?></td>

<td>
<a class="edit" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>

<a class="delete"
href="delete.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Are you sure you want to delete this record?');">
Delete
</a>
</td>

</tr>

<?php
}
?>

</table>

</body>
</html>