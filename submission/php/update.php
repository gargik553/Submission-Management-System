<?php
include '../dbcon.php';

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values from the POST request
    $rollNo = $_POST["roll_no"];
    $hodStatus = $_POST["hod_status"];
    $remark = $_POST["remark"];
    $table_nm = $_POST["table_nm"];
    // Update the database table
    $sql = "UPDATE $table_nm SET hod_status = '$hodStatus', hod_remark = '$remark' WHERE roll_no = '$rollNo'";

    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $con->error;
    }
}

// Close the database connection
$con->close();
?>
