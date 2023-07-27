<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Body Mass Trekker - Services</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      background-image: url('two.jpg');
  background-size: cover;
  background-position: center;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: #fff;

    }

    /* Add your general styles here */

    .container4 {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    .service {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .service h2 {
      color: #007bff;
    }

    .service p {
      line-height: 1.6;
    }
  </style>
</head>
<body>
  <?php include 'header.php'; ?>

  <div class="container4">
    <h1>Our Services</h1>

    <div class="service">
      <h2>BMI Calculator</h2>
      <p>Our easy-to-use BMI calculator allows you to quickly assess your BMI based on your weight and height. Knowing your BMI is the first step in understanding your current health status and setting realistic health goals.</p>
    </div>

    <div class="service">
      <h2>BMI Health Recommendations</h2>
      <p>After calculating your BMI, our application provides personalized health recommendations based on your BMI category. Whether you fall under "underweight," "normal weight," "overweight," or "obese," we offer practical tips to help you make informed decisions about your well-being.</p>
    </div>

    <div class="service">
      <h2>BMI History Tracking</h2>
      <p>Keep track of your BMI progress over time with our BMI history tracking feature. Monitoring changes in your BMI can provide valuable insights into the effectiveness of your health and fitness efforts.</p>
    </div>

    <!-- Add more service sections as needed -->

  </div>
</body>
</html>
