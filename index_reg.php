
<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style_reg.css">
</head>
<body>
    <div class="container">
        <div class="form">
            <form action="#" method="POST">
                <h1>ENTER THE DETAILS</h1>
                <input type="text" placeholder="First Name" name="first_name" class="inp" required>
                <input type="text" placeholder="Middle Name" name="middle_name" class="inp">
                <input type="text" placeholder="Last Name" name="last_name" class="inp" required>
                <input type="email" placeholder="Email" name="email" class="inp" required>
                <input type="tel" placeholder="Phone" name="phone" class="inp" required>
                <select name="gender" id="gender" class="inp genderopt" required>
                    <option value="gender">Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <input type="text" placeholder="Address" name="address" class="inp" required>
                <div class="dateofbirth">
                    <input type="number" id="dob_d" name="dob_d" min="01" max="31" step="1" value="01">
                    <select name="dob_m" id="dob_m" class="inp dob_m">
                        <option value="0">Month</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    <input type="number" id="dob_y" name="dob_y" min="1900" max="2099" step="1" value="2024">
                </div>
                <input type="submit" value="Submit" name="register">
            </form>

            
        </div>
        
    </div>
    <a class="back_button" href="http://localhost/CRUD/display.php">Go Back</a>
</body>
</html>


<?php

if(isset($_POST['register'])) {
    $fname = $_POST['first_name'];
    $mname = $_POST['middle_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $dob_d = $_POST['dob_d'];
    $dob_m = $_POST['dob_m'];
    $dob_y = $_POST['dob_y'];

    $query = "INSERT INTO USERS VALUES ('$fname', '$mname', '$lname', '$email', '$phone', '$gender', '$address', '$dob_d', '$dob_m', '$dob_y')";
    $data = mysqli_query($conn, $query);

    if($data) {
        header("location: display.php");
    } 
    else {
        echo '<div class="alert">Data was not added</div>';
    }
}

?>