<?php
include '../dbcon.php';

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values from the POST request
    $rollNo = $_POST["roll_no"];
    $acc_fees = $_POST["acc_fees"];
    $acc_bal = $_POST["acc_bal"];
    $acc_remark = $_POST["acc_remark"];
    $table_nm = $_POST["table_nm"];
    // Update the database table
    $sql = "UPDATE $table_nm SET acc_fees = '$acc_fees', acc_bal = '$acc_bal', acc_remark = '$acc_remark' WHERE roll_no = '$rollNo'";

    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $con->error;
    }
}

// Close the database connection
$con->close();
?>
