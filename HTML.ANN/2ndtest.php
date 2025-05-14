<?php
// bmi.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect input data and sanitize
    $weight = isset($_POST['weight']) ? floatval($_POST['weight']) : 0;
    $height = isset($_POST['height']) ? floatval($_POST['height']) : 0;

    if ($weight > 0 && $height > 0) {
        // Calculate BMI
        $bmi = $weight / ($height * $height);

        echo "<h2>Your BMI is: " . number_format($bmi, 2) . "</h2>";

        // Optional: Add BMI categories
        if ($bmi < 18.5) {
            echo "<p>You are underweight.</p>";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            echo "<p>You have a normal weight.</p>";
        } elseif ($bmi >= 25 && $bmi < 29.9) {
            echo "<p>You are overweight.</p>";
        } else {
            echo "<p>You are obese.</p>";
        }
    } else {
        echo "<p>Please enter valid positive numbers for weight and height.</p>";
    }
} else {
    echo "<p>No data submitted.</p>";
}
?>
