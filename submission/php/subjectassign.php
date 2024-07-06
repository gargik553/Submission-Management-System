<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Assign Subject </title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
  }
  .container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  h1 {
    text-align: center;
    color: #333;
  }
  label {
    font-weight: bold;
    color: #555;
  }
  select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
  }
  input[type="submit"] {
    width: 100%;
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
  <h1>Assign Subject</h1>

  <form action="#" method="post">
    
    <label for="teacher">Select Teacher:</label>
    <select id="teacher" name="teacher">
      <option value="teacher1">Teacher 1</option>
      <option value="teacher2">Teacher 2</option>
      <option value="teacher3">Teacher 3</option>
      <!-- Add more options as needed -->
    </select>
    
    <label for="class">Select Class:</label>
    <select id="class" name="class">
      <option value="class1">Class 1</option>
      <option value="class2">Class 2</option>
      <option value="class3">Class 3</option>
      <!-- Add more options as needed -->
    </select>
    
    <label for="subject">Select Subject:</label>
    <select id="subject" name="subject">
      <option value="subject1">Subject 1</option>
      <option value="subject2">Subject 2</option>
      <option value="subject3">Subject 3</option>
      <!-- Add more options as needed -->
    </select>
    
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>

<?php
include '../dbcon.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve values from the form
  $teacher = $_POST["teacher"];
  $class = $_POST["class"];
  $subject = $_POST["subject"];
  $sql = "INSERT INTO subject_assign (teacher, class, subject) VALUES ('$teacher', '$class', '$subject')";
    
    if ($con->query($sql) === TRUE) {
      echo "<script>alert('New record created successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    $con->close();
}
?>