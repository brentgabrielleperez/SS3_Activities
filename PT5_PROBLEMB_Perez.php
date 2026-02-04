<!DOCTYPE html>
<html>
<head>
    <title>BMI Checker</title>
    <link rel="stylesheet" href="PT5.css">
</head>
<body>

<div class="card">
    <h1>BMI Checker</h1>
    <p class="subtitle">Check your Body Mass Index</p>

    <form method="POST">
        <label>Weight (kg)</label>
        <input type="number" step="0.01" name="weight" required>

        <label>Height (meters)</label>
        <input type="number" step="0.01" name="height" required>

        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {

        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $bmi = $weight / ($height * $height);

        if ($bmi < 18.5) {
            $status = "Underweight";
            $color = "blue";
        } elseif ($bmi <= 24.9) {
            $status = "Normal";
            $color = "green";
        } elseif ($bmi <= 29.9) {
            $status = "Overweight";
            $color = "orange";
        } else {
            $status = "Obese";
            $color = "red";
        }

        echo "<div class='result $color'>";
        echo "<h2>Your BMI</h2>";
        echo "<p class='bmi'>" . round($bmi, 2) . "</p>";
        echo "<p class='status'>$status</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
