<?php
include('../includes/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="container">
        <div class="button-group">
            <button class="btn btn-primary"><a href="user.php" >Add User</a></button>
            <button class="btn btn-primary"><a href="../logout.php">Logout</a></button>
        </div>

        <table>
            <thead class="table-header">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>E-mail Address</th>
                    <th>Contact Number</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql);
                if($result) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>
                            <td>'.$row['Id'].'</td>
                            <td>'.$row['FirstName'].'</td>
                            <td>'.$row['LastName'].'</td>
                            <td>'.$row['email'].'</td>
                            <td>'.$row['PhoneNumber'].'</td>
                            <td>
                                <button class="btn btn-primary"><a href="update.php?updateid='.$row['Id'].'">Update</a></button>
                                <button class="btn btn-danger"><a href="delete.php?deleteid='.$row['Id'].'">Delete</a></button>
                            </td>
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>