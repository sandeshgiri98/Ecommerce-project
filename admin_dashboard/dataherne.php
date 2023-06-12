<?php
include_once('../register/connection.php');
$selectQuery = "SELECT name,email,phone,dob FROM register";
$selectExe = mysqli_query($con,$selectQuery);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>User Details</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #555;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        td:first-child {
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }

        td:last-child {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        
        .delete-btn, .update-btn {
            padding: 5px 10px;
            border-radius: 3px;
            border: none;
            cursor: pointer;
        }

        .delete-btn {
            background-color: #e74c3c;
            color: #fff;
            margin-right: 5px;
        }

        .update-btn {
            background-color: #3498db;
            color: #fff;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>DOB</th>
        </tr>
        <?php
                  while($row=mysqli_fetch_assoc($selectExe))
                  {
                ?>
        <tr>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['phone']?></td>
            <td><?php echo $row['dob']?></td>
        </tr>
        
        <?php
                  }
                ?>
    </table>
</body>

</html>