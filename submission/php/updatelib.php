<?php
include '../dbcon.php';

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values from the POST request
    $rollNo = $_POST["roll_no"];
    $library_dues = $_POST["library_dues"];
   
    $library_remark = $_POST["library_remark"];
    $table_nm = $_POST["table_nm"];
    // Update the database table
    $sql = "UPDATE $table_nm SET library_dues = '$library_dues', library_remark = '$library_remark' WHERE roll_no = '$rollNo'";

    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $con->error;
    }
}

// Close the database connection
$con->close();
?>
