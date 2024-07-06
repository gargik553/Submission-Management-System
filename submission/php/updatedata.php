<?php
include '../dbcon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['class'])) {
        $tableName = $_POST['class'];

        if (isset($_POST['updateData']) && isset($_FILES['csvFile'])) {
            $csvFile = $_FILES['csvFile']['tmp_name'];
            $csvData = file_get_contents($csvFile);
            $lines = explode(PHP_EOL, $csvData);
            foreach ($lines as $line) {
              try {
                $data = str_getcsv($line);
                $sql = "INSERT INTO $tableName (roll_no, prn, name, email, acc_fees, acc_bal, acc_remark, library_dues, library_remark, stud_sec_status, stud_sec_remark, hod_status, hod_remark) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $con->prepare($sql);
                $stmt->bind_param("sssssssssssss", $data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9], $data[10], $data[11], $data[12]);
                $stmt->execute();
              
                //echo "<script>alert('CSV data successfully imported into $tableName table.');</script>";
                if ($stmt->affected_rows > 0) {
                  $flag=0;
                    //echo "<script>alert('CSV data successfully imported into $tableName table.');</script>";
                } else {
                  $flag=1;
                    //echo "<script>alert('Failed to import CSV data into $tableName table.');</script>";
                }
                
                // Close the prepared statement
                $stmt->close();
                } catch (Exception $e) {
                // Handle the exception (you can log it or display a generic error message)
                $flag=2;
                // echo "<script>alert('An error occurred while processing your request. Please try again later.');</script>";
            }
            }
            if($flag==0)
            {
              echo "<script>alert('CSV data successfully imported into $tableName table.');</script>";
            }
            elseif($flag==1)
            {
              echo "<script>alert('Failed to import CSV data into $tableName table.');</script>";
            }
            elseif($flag==2)
            {
              echo "<script>alert('CSV data successfully imported into $tableName table.');</script>";
            }
          }
            
        

        if (isset($_POST['backupData'])) {
            // Backup the data of the selected table
            $backupFileName = "backup_" . $tableName . "_" . date("Y-m-d_H-i-s") . ".csv";
            $backupFilePath = "C:\\Users\\Gargi\\Downloads\\Backup\\" . $backupFileName; // Corrected path
            $backupFile = fopen($backupFilePath, "w");
            // Fetch data from the database table
            $sql = "SELECT * FROM $tableName";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                // Write CSV header
                $header = array("roll_no", "prn", "name", "email", "acc_fees", "acc_bal", "acc_remark", "library_dues", "library_remark", "stud_sec_status", "stud_sec_remark", "hod_status", "hod_remark"); // Corrected column names
                fputcsv($backupFile, $header);
                // Write data rows to CSV
                while ($row = $result->fetch_assoc()) {
                    fputcsv($backupFile, $row);
                }
                echo "<script>alert('Backup of $tableName table created successfully.');</script>";
            } else {
                echo "<script>alert('No data found in $tableName table.');</script>";
            }
            fclose($backupFile);
        }

        if (isset($_POST['deleteData'])) {
            deletePreviousData($con, $tableName);
        }
    }
}

function deletePreviousData($con, $tableName) {
    $sql = "DELETE FROM $tableName";
    if ($con->query($sql) === TRUE) {
        echo "<script>alert('Previous Data from $tableName table deleted successfully!.');</script>";
    } else {
        echo "Error deleting previous data: " . $con->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Class Selection and Actions</title>
<style>
  
  body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  .container {
    width: 80%;
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  }
  h1 {
    text-align: center;
    color: #333;
    margin-bottom: 30px;
  }
  label {
    font-weight: bold;
    color: #555;
  }
  select, input[type="file"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
    box-sizing: border-box;
  }
  .row {
    display: flex;
    justify-content: space-between;
  }
  .col {
    width: calc(50% - 10px);
  }
  .action-buttons {
    text-align: center;
    margin-top: 20px;
  }
  .action-buttons button {
    padding: 15px 30px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
  }
  .action-buttons button:hover {
    background-color: #007bff;
  }
  input[type="submit"] {
    width: 20%;
    padding: 15px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
  }
  input[type="submit"]:hover {
    background-color: #007bff;
  }

</style>
</head>
<body>

<div class="container">
    <h1>Update Database</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <label for="class">Select Class:</label>
                <select id="class" name="class">
                    <option value="sycse">Sycse</option>
                    <option value="tycse">Tycse</option>
                </select>
            </div>
            <div class="col">
                <label for="csvFile">Upload CSV File:</label>
                <input type="file" id="csvFile" name="csvFile" accept=".csv">
                <button type="submit" name="updateData">Update</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="action-buttons">
                    <label>Delete Previous Data:</label>
                    <button type="submit" name="deleteData">Delete</button>
                </div>
            </div>
            <div class="col">
                <div class="action-buttons">
                    <label>Take Backup:</label>
                    <button type="submit" name="backupData">Backup</button>
                </div>
            </div>
        </div>
    </form>
</div>

</body>
</html>
