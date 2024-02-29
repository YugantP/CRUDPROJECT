<?php
   
	
   include("connection.php");
   $query = "SELECT * FROM users";
   $data = mysqli_query($conn, $query);
   $result = mysqli_fetch_array($data)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <link rel="stylesheet" href="style_reg.css">
</head>
<body>
    <div class="container">
        <div class="form">
            <form action="updatephp.php" method="POST">
                <h1>Update Record</h1>
                <div class="updating-for">* Can't change the phone number because it is the primary key</div>
                <input type="text" placeholder="First Name" name="first_name" class="inp" value="<?php echo $result['first_name']; ?>"required>
                <input type="text" placeholder="Middle Name" name="middle_name" value="<?php echo $result['middle_name']; ?>" class="inp">
                <input type="text" placeholder="Last Name" name="last_name" class="inp" value="<?php echo $result['last_name']; ?>" required>
                <input type="email" placeholder="Email" name="email" class="inp" value="<?php echo $result['email']; ?>" required>
                <input type="tel" placeholder="Phone" name="phone" class="inp" value="<?php echo $result['phone']; ?>" readonly>
                <select name="gender" id="gender" class="inp genderopt"  required>
                    <option value="<?php echo $result['gender']; ?>"><?php echo $result['gender'];?></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <input type="text" placeholder="Address" value="<?php echo $result['address']; ?>" name="address" class="inp" required>
                <div class="dateofbirth">
                    <input type="number" id="dob_d" name="dob_d" min="01" max="31" step="1" value="<?php echo $result['dob_day']; ?>" value="01">
                    <select name="dob_m" id="dob_m" class="inp dob_m">
                        <option value="<?php echo $result['dob_month']; ?>"><?php echo $result['dob_month'];?></option>
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
                    <input type="number" id="dob_y" name="dob_y" min="1900" max="2099" value="<?php echo $result['dob_year']; ?>" step="1" value="2024">
                </div>
                <input type="submit" value="Update" name="update">
            </form>

            
        </div>
        
    </div>
    <a class="back_button" href="http://localhost/CRUD/display.php">Go Back</a>
</body>
</html>
