<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculation Data</title>
</head>
<body>
    <h1>BMI CALCULATION DATA</h1>
    
    <!-- Table to display the data -->
    <table>
        <tr>
            <th>Weight (kg)</th>
            <th>Height (cm)</th>
            <th>BMI</th>
            <th>Date</th>
        </tr>
        <?php foreach ($calculationData as $data) { ?>
            <tr>
                <td><?php echo $data['weight']; ?></td>
                <td><?php echo $data['height']; ?></td>
                <td><?php echo $data['bmi']; ?></td>
                <td><?php echo $data['date']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
