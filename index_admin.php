<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log In</title>
    <link rel="stylesheet" href="style_admin.css">
    <script type="text/javascript">
        function validate(){
            // Retrieve the values of username and password when the form is submitted
            let uname = document.getElementById("user").value;
            let key = document.getElementById("pass").value;
            
            // Check if the username and password are correct
            if (uname === "admin" && key === "admin"){
                window.location.href = "http://localhost/CRUD/display.php";
                return false; // Prevent form submission
            }
            else{
                // Display error message if the credentials are incorrect
                document.getElementById("alert").innerText = "* Invalid Username or Password";
                return false; // Prevent form submission
            }
        }
    </script>
</head>
<body>
    
    <div class="container">
        <div class="form">
            <form onsubmit="return validate()">
                <h1>Administrator Log In</h1>
                <p id="alert"></p>
                <input type="text" placeholder="Username" id="user" class="inp" required>
                <input type="password" placeholder="Password" id="pass" class="inp" required>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
