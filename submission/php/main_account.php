<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Account Section Data Management</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  #container {
    width: 600px;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  h1 {
    text-align: center;
  }
  
  label {
    display: block;
    margin-top: 16px;
    margin-bottom: 8px;
  }
  
  select, input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }
  
  button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #a4d1ff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.3s;
  }
  
  button:hover {
    background-color: #0056b3;
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
  }
  
  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  
  th {
    background-color: #007bff;
    color: #fff;
  }
  
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  
  tr:hover {
    background-color: #ddd;
  }
</style>
</head>
<body>

<div id="container">
  <h1>Account Section Data Management</h1>

  <!-- Dropdown for selecting class -->
  <form method="POST" enctype="multipart/form-data">
    <label for="classSelect">Select Class:</label>
    <select name="classSelect" id="classSelect">
      <option value="syacc">Sycse</option>
      <option value="tyacc">Tycse</option>
    </select>

    <!-- Button to show previous records -->
    <div>
      <button class="button" type="submit" name="showData"><a href="../php/show_record.php">Show Previous Data</a></button>
      <button class="button" type="submit" name="deleteData">Delete Previous Data</button>
    </div>

    <!-- Upload CSV file functionality -->
    <label for="csvFile">Upload CSV File:</label>
    <input type="file" id="csvFile" name="csvFile" accept=".csv">
    <button class="button" type="submit" name="updateData">Update</button>
  </form>

  <?php
  include '../dbcon.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['classSelect'])) {
      $tableName = $_POST['classSelect'];


      if (isset($_POST['deleteData'])) {
        deletePreviousData($con, $tableName);
      }

      if (isset($_POST['updateData']) && isset($_FILES['csvFile'])) {
        $csvFile = $_FILES['csvFile']['tmp_name'];
        $csvData = file_get_contents($csvFile);
        $lines = explode(PHP_EOL, $csvData);
        $data = array();
        foreach ($lines as $line) {
          $data[] = str_getcsv($line);
        }
        foreach ($data as $row) {
          
          try {
            // Code that might throw an exception
            $sql = "INSERT INTO $tableName (prn, name, acc_status, acc_bal) VALUES (?, ?, ?, ?)";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("ssss", $row[0], $row[1], $row[2], $row[3]);
            
            // Execute the prepared statement
            $stmt->execute();
            if($tableName=='syacc')
            {
               $another_table='sycse';
            }
            elseif($tableName='tyacc')
            {
              $another_table='tycse';
            }

            $updateSql = "UPDATE $another_table SET acc_fees = ?, acc_bal = ? WHERE prn = ?";
                    $updateStmt = $con->prepare($updateSql);
                    $updateStmt->bind_param("sss", $row[2], $row[3], $row[0]);
                    $updateStmt->execute();
            
            // Check if the query was successful
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

</div>

</body>
</html>
