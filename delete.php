<?php
include("connection.php");
if(isset($_GET['id'])) {

    $id = mysqli_real_escape_string($conn, $_GET['id']);
    
    $query = "DELETE FROM users WHERE phone='$id'";
    
    if(mysqli_query($conn, $query)) {
        header("Location: display.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "No ID specified for deletion.";
}
?>
