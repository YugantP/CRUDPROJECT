<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable</title>
    <link rel="stylesheet" href="display.css">
</head>
<body>
    <?php include("header.php");?>
    <h1>Checked In Guests:</h1>

    <?php
    include("connection.php");
    $query = "SELECT * FROM users";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);

    if ($total != 0) {
    ?>
    <table>
        <tr>
            <td>First Name</td>
            <td>Middle Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Phone Number</td>
            <td>Gender</td>
            <td>Address</td>
            <td>Date</td>
            <td>Month</td>
            <td>Year</td>
            <td>Action</td>
        </tr>
        <?php
            while ($result = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $result['first_name']?></td>
                    <td><?php echo $result['middle_name']?></td>
                    <td><?php echo $result['last_name']?></td>
                    <td><?php echo $result['email']?></td>
                    <td><?php echo $result['phone']?></td>
                    <td><?php echo $result['gender']?></td>
                    <td><?php echo $result['address']?></td>
                    <td><?php echo $result['dob_day']?></td>
                    <td><?php echo $result['dob_month']?></td>
                    <td><?php echo $result['dob_year']?></td>
                    <td><a class="update" href=update.php?id=<?=$result['phone']?>>Update</a><a class="delete" href=delete.php?id=<?=$result['phone']?>>Delete</a></td>
                </tr>
                <?php
            }
        ?>
    </table>

    

    <?php
    }
    else {
        ?>
        <div class="norecords">The table does not have any records.</div>
        <?php
    }
    ?>
    <a href="http://localhost/CRUD/index_reg.php" class="add_new_student">New Check In</a>
    <?php
    include("footer.php");
    ?>

</body>
</html>
