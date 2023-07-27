<?php
if (!empty($_POST)) {
    // Retrieve form inputs
    $weight = floatval($_POST['weight']);
    $height = floatval($_POST['height']);

    // Check for valid values
    if (empty($weight) || empty($height) || !is_numeric($weight) || !is_numeric($height)) {
        echo "Please enter valid values for weight and height.";
        exit();
    }

    // Calculate BMI
    $heightInMeters = $height / 100;
    $bmi = $weight / ($heightInMeters * $heightInMeters);
    $bmi = round($bmi, 2); // Round BMI to 2 decimal places

    // Insert the data into the 'calculation' table
    require('connection.php'); // Include your database connection file

    // Replace 'calculation' with your actual table name
    $insertQuery = "INSERT INTO calculation (weight, height, bmi)
                    VALUES ('$weight', '$height', '$bmi')";

    if (mysqli_query($conn, $insertQuery)) {
        // Data inserted successfully
        echo "BMI data inserted into the 'calculation' table.";
    } else {
        // Error occurred while inserting data
        echo "Error: " . mysqli_error($conn);
    }
}

?>

