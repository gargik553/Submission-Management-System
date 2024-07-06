<?php
include '../dbcon.php';

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values from the POST request
    $rollNo = $_POST["roll_no"];
    $stud_sec_status = $_POST["stud_sec_status"];
   
    $stud_sec_remark = $_POST["stud_sec_remark"];
    $table_nm = $_POST["table_nm"];
    // Update the database table
    $sql = "UPDATE $table_nm SET stud_sec_status = '$stud_sec_status', stud_sec_remark = '$stud_sec_remark' WHERE roll_no = '$rollNo'";

    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $con->error;
    }
}

// Close the database connection
$con->close();
?>
