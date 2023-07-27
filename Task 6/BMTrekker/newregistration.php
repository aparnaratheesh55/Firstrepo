<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Registration</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <style >
  body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background-image: url('two.jpg');
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
}

header {
  background-color: #007bff;
  color: #fff;
  padding: 20px;
  text-align: center;
}

.container6 {
  position: absolute;
  top:12%;
  left: 38%;
  max-width: 400px;
  margin: 50px auto;
  padding: 20px;
  background-color: #f9f9f9;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.container6 h2 {
  text-align: center;
  color: #007bff;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  margin-bottom: 5px;
}

input {
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
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
/* CSS for pop-up boxes */
/* CSS for pop-up box with animation */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.4);
  animation: fadeIn 0.3s ease-in-out;
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 60%;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

/* Animation keyframes */
@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}



</style>
  <?php include 'header.php'; ?>

  <div class="container6">
    <h2>Customer Registration</h2>
    <form method="POST" action="process_newregistration.php">
      <label for="username">username:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="age">Age:</label>
      <input type="number" id="age" name="age" required>

      <label for="weight">Weight (kg):</label>
      <input type="number" id="weight" step="0.1" name="weight" required>

      <label for="height">Height (cm):</label>
      <input type="number" id="height" name="height" required><br>

      <button type="submit">Register</button><br>
      <button type="reset">Cancel</button>
   
    
  </form>
  </div>
  <div id="successModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <p>Registration successful!</p>
    </div>
  </div>

  <div id="failureModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <p>Registration failed. Please try again.</p>
    </div>
  </div>

  <!-- JavaScript for pop-up boxes -->
  <script>
    function showModal(modalId) {
      var modal = document.getElementById(modalId);
      modal.style.display = "block";
    }

    function closeModal() {
      var modals = document.getElementsByClassName("modal");
      for (var i = 0; i < modals.length; i++) {
        modals[i].style.display = "none";
      }
    }

    <?php
      if (isset($_GET['success']) && $_GET['success'] == 1) {
        echo "showModal('successModal');";
      } elseif (isset($_GET['fail']) && $_GET['fail'] == 1) {
        echo "showModal('failureModal');";
      }
    ?>
  </script>

</body>
</html>
