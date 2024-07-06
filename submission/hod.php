<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOD Login</title>
    <link rel="stylesheet" href="css/table.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">


</head>

<body>
    <main class="table">
        <section class="table__header">
            <h2>Students List</h2>
			 <div class="container">
			 
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="table_nm">Select a class:</label>
        <select name="table_nm" class="custom-select" type="submit" value="Fetch Data">
            <option value="sycse">sycse</option>
            <option value="tycse">tycse</option>           
        </select>
        <button type="submit" class="btn btn-primary"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
  Submit
</button>
        
    </div>
            
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File" ><img style="width:3rem;" src="img/export.png" alt=""></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    
                    <label for="export-file" id="toEXCEL" onclick="downloadDatabase()" title="Document">EXCEL <img src="img/exel icon.png" alt=""></label>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table id="data">
                <thead>
                    <tr>
                     
                        <th> Roll No. </th>
                        <th> Student Name </th>
                        <th> Submission Status </th>
                        <th> Remark</th>
                    </tr>
                </thead>
<?php
include 'dbcon.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected table name from the form
    $table_nm = $_POST["table_nm"];
    
    // Prepare and execute the SQL query
    $sql = "SELECT * FROM $table_nm";
    $result = $con->query($sql);

    // Check if there are any records
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['roll_no'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            if($row['account']==0) {
                echo "<td> <input type='checkbox' checked> </td>";
            } else {
                echo "<td> <input type='checkbox'> </td>";
            }
            echo "<td><input type='text' name='remark' value='". $row['remark'] ."'></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
}
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