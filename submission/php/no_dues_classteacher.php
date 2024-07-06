<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>No dues Status</title>
  <link rel="stylesheet" href="../css/table.css">
  <link rel="stylesheet" href="../css/style1.css">
 
</head>

<body>
  <main class="table">
    <section class="table__header">
      <h2>Class teacher</h2>
      <div class="container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <label for="table_nm">Select a class:</label>
          <select name="table_nm" class="custom-select"  data-select2-id="1" tabindex="-1" aria-hidden="true">
          <option selected="selected" data-select2-id="3">select class</option>
            <option value="sycse">Sycse</option>
            <option value="tycse">Tycse</option>
          </select>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div>
          <button type="button" onclick="sendEmail()" class="btn btn-submit">Send Email</button>
        </div>
      </div>
      
      <div class="export__file">
        <label for="export-file" class="export__file-btn" title="Export File"><img style="width: 3rem" src="../img/export.png" alt=""></label>
        <input type="checkbox" id="export-file">
        <div class="export__file-options">
          <label>Export As &nbsp; &#10140;</label>
          <label for="export-file" id="toEXCEL" onclick="downloadDatabase()" title="Document">EXCEL <img src="../img/exel icon.png" alt=""></label>
        </div>
      </div>
    </section>
    <section class="table__body">
      <table id="data">
        
          <tr style="background-color: #d5d1defe;">
            <th>Roll No.</th>
            <th>Student Name</th>
            <th>HOD status</th>
            <th>Remark</th>
           
          </tr>
         
     
<?php
include '../dbcon.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected table name from the form
    $table_nm = isset($_POST["table_nm"]) ? $_POST["table_nm"] : "";
    // Sanitize the table name
    $table_nm = mysqli_real_escape_string($con, $table_nm);

    // Prepare and execute the SQL query
    $sql = "SELECT * FROM $table_nm";
    $result = $con->query($sql);

    // Check if there are any records
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td id='roll_no'>" . $row['roll_no'] ."</td>";
            echo "<td id='name'>" . $row['name'] ."</td>";
            
            echo "<td id='hod_status'><select name='hod_status[]' id='hod_status" . $row['hod_status'] . "'>";

            // Display the fetched value from the database
           // echo "<option value='" . $row['hod_status'] . "'>" . $row['hod_status'] . "</option>";
            
            // Display other options
            echo "<option value='Permitted'>Permitted</option>";
            echo "<option value='Not permitted'>Not permitted</option>";
            echo "<option value='Partially permitted'>Partially permitted</option>";
            
            echo "</select></td>";
            



            echo "<td id='hod_remark'><input type='text' name='remark[]' value='". $row['hod_remark'] ."'></td>";
            
        }
    } else {
        echo "<tr><td colspan='8'>0 results</td></tr>";
    }
}
$con->close();
?>

  
      
      </table>
    </section>
  </main>

<script>



function downloadDatabase() {
  // Get the table content
  var table = document.getElementById("data");

  // Create a CSV data string
  var csv = [];
  for (var i = 0; i < table.rows.length; i++) {
    var row = [];
    for (var j = 0; j < table.rows[i].cells.length; j++) {
      row.push(table.rows[i].cells[j].innerText);
    }
    csv.push(row.join(","));
  }
  var csvContent = "data:text/csv;charset=utf-8," + csv.join("\n");

  // Create a download link and trigger a click event
  var encodedUri = encodeURI(csvContent);
  var link = document.createElement("a");
  link.setAttribute("href", encodedUri);
  link.setAttribute("download", "account.csv");
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
}

</script>


</body>

</html>
