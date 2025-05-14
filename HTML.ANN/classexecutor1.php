<!DOCTYPE html>
<html lang="en">
<head>

  <title>Student Data Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 2rem;
      background-color: #f2f2f2;
    }
    .form-container {
      background-color: white;
      padding: 2rem;
      border-radius: 8px;
      max-width: 400px;
      margin: auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    input[type="text"], input[type="number"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      box-sizing: border-box;
    }
    button {
      background-color: #007bff;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      border-radius: 5px;
    }
    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

<div class="form-container">
  <h2>Enter Student Details</h2>
  <form action="classexecutor.php" method="POST">
    <label for="student_id">Student ID:</label>
    <input type="text" id="student_id" name="student_id" required>

    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="fullname" required>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required>

    <button type="submit">Submit</button>
  </form>
</div>

</body>
</html>
