<?php
include("connection.php");

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

    $query = "UPDATE users SET first_name='$fname',middle_name='$mname',last_name='$lname', email = '$email', address = '$address', gender = '$gender', dob_day = $dob_d, dob_month = $dob_m, dob_year = $dob_y  WHERE phone='$phone'";
    mysqli_query($conn, $query);

    $data = mysqli_query($conn, $query);

    if($data) {
        header("location: display.php");
    } 
    else {
        echo '<div class="alert">Data was not added</div>';
    }


?>