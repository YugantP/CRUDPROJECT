<?php
include("connection.php");

if(isset($_GET["id"])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "DELETE FROM users WHERE phone='".$id."'";
    
    if($conn->query($sql) === TRUE) {
?>
        <script type="text/javascript">
            window.alert("Record deleted successfully.");
            window.location.href = "display.php";
        </script>
<?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
// Redirect to the display page
header("location: display.php");
?>
