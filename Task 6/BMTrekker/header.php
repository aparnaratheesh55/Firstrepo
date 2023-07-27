<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Scrolling Header</title>
  <!-- Add Bootstrap CSS link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    /* Customize the header style here */
    /* Example styles below */
    body {
      margin: 0;
      padding: 0;
    }

    .header {
      background-color: white;
      color: #333;
      border-radius: 0 0 50% 50%;
      overflow: hidden;
      text-align: center;
      padding: 20px;
      position:fixed;

      top: 0;
      width: 100%;
      z-index: 999;
    }

    .navbar-brand {
      font-size: 24px;
      font-weight: bold;
      color: #333;
    }

    .navbar-brand img {
      max-height: 40px;
      margin-right: 10px;
    }

    .nav-link {
      color: #333;
      font-size: 18px;
    }

    .btn-signup {
      background-color: aqua;
      border: none;
      color: #fff;
      padding: 10px 20px;
      border-radius: 25px;
      font-size: 18px;
    }

    .btn-signup:hover {
      background-color: #00ced1; /* Lighter shade of aqua on hover */
    }
  </style>
</head>
<body>
  <!-- Header with round-shaped corners -->
  <div class="header">
    <!-- Bootstrap navigation bar -->
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
          <img src="logo.png" alt="Logo">BODY MASS TREKKER
        </a>
        <!-- Navigation links -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li>
          
          <li class="nav-item">
            <!-- Login/Sign Up button -->
            <button class="btn btn-signup"><a href="login.php">Login / Sign up </a></button>

          </li>
        </ul>
      </div>
    </nav>
  </div>

  <!-- Add Bootstrap JS script link -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
