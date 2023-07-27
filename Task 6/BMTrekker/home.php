<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Home Page</title>
  <link rel="stylesheet" href="homestyles.css">
</head>
 <?php include 'header.php'; ?>
<style type="text/css">
  
 .container1 {
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 20px;
      background-color: #B5ABA7;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 400px;
    }

    h1 {
      color: black;
      text-align: center;
    }

    form {
      color: black;
     
      flex-direction: column;
    }

    label {
      margin-bottom: 5px;
    }

    input {
      background-color:#f2d996;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 10px;
    }

    button {
      padding: 10px 15px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }

    #result {
      margin-top: 20px;
      text-align: center;
    }
</style>

<body style="background-image: url('two.jpg');
  background-size: cover;
  background-position: center;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: #fff;
" 
>
 

    <div class="container1">
        <h1>BMI CALCULATOR</h1>
        
        <form id="bmiForm">
            <label for="weight">Weight (kg):</label>
            <input type="number" id="weight" step="0.1" placeholder="please enter weight in kg" required>
            <label for="height">Height (cm):</label>
            <input type="number" id="height" placeholder="please enter height in cm" required>
            <button type="submit">Calculate BMI</button>
        </form>
        <div id="result"></div>
    </div>

  <div class="background-image">
    <!-- Your content goes here -->
  
  </div>
   <script src="homescript.js"></script>
</body>
</html>
