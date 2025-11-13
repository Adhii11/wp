

<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill</title>
</head>
<body>
    <h1>Electricity Bill</h1>

    <form method="post" action="#">
        Consumer ID: <input type="number" name="id" required><br><br>
        Name: <input type="text" name="name" required><br><br>
        Previous Reading: <input type="number" name="prev" required><br><br>
        Present Reading: <input type="number" name="pres" required><br><br>
        <input type="submit" value="Generate Bill">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id   = $_POST['id'];
        $name = $_POST['name'];
        $prev = $_POST['prev'];
        $pres = $_POST['pres'];

        // Calculate units consumed
        $units = $pres - $prev;

        echo "<hr>";
        echo "<h3>Kerala State Electricity Board (KSEB)</h3>";
        echo "<p><strong>Consumer ID:</strong> $id<br>";
        echo "<strong>Consumer Name:</strong> $name<br>";
        echo "<strong>Units Consumed:</strong> $units</p>";

        // Tariff calculation
        if ($units <= 100) {
            $amt = $units * 3;
        } elseif ($units <= 200) {
            $amt = $units * 4;
        } elseif ($units <= 300) {
            $amt = $units * 5;
        } else {
            $amt = $units * 6;
        }

        echo "<h4>Total Amount: ₹" . $amt . "</h4>";
        echo "<hr>";
    }
    ?>
</body>
</html>














































<?php
