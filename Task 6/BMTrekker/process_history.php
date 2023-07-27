<?php
// ... (Existing code to calculate BMI and insert data into the 'calculation' table)

// Fetch BMI data from the 'calculation' table
require('connection.php'); // Include your database connection file

// Replace 'calculation' with your actual table name
$query = "SELECT bmi, date FROM calculation";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit();
}

// Fetch data into an array
$chartData = array();
while ($row = mysqli_fetch_assoc($result)) {
    $chartData[] = $row;
}

// Encode the data to JSON format
$chartDataJson = json_encode($chartData);

mysqli_close($conn);
?>
