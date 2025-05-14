<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BMI Calculator</title>
</head>
<body>
    <h1>Patient BMI Calculator</h1>
    <form action="bmi.php" method="POST">
        <label for="weight">Weight (kg):</label>
        <input type="number" step="0.01" id="weight" name="weight" required><br><br>

        <label for="height">Height (meters):</label>
        <input type="number" step="0.01" id="height" name="height" required><br><br>

        <button type="submit">Calculate BMI</button>
    </form>
</body>
</html>
