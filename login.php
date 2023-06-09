<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
  $username = $_POST['username'];
  $password = $_POST['password'];


  $query = "SELECT * FROM t_login WHERE username='$username' AND password='$password'";
  $result = mysqli_query($koneksi, $query);

  if (mysqli_num_rows($result) > 0) {

    header("Location: tampilan.php");
    exit;
  } else {
    
    $error_message = "Username atau password salah!";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="Images/attachment_22860590.png" type="image/png">
  <title>Rental PSCOY - Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('Images/wp.jpg'); 
      background-size: cover;
      background-position: center;
    }
    
    .container {
      max-width: 800px;
      margin: 0 auto;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    
    .login-form {
      padding: 20px;
      background-color: transparent;
      width: 400px;
    }
    
    h2 {
      text-align: center;
    }
    
    .form-group {
      margin-bottom: 15px;
    }
    
    .form-group label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }
    
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    
    .form-group .btn {
      width: 100%;
      padding: 10px;
      background-color: steelblue;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    
    .form-group .btn:hover {
      background-color: steelblue;
    }
    
    .rental-info {
      margin-top: 30px;
      text-align: center;
      color: #fff;
    }

    .alert {
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid transparent;
      border-radius: 5px;
      color: #721c24;
      background-color: #f8d7da;
      border-color: #f5c6cb;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-form">
      <h2>LOGIN COY</h2>
      <?php if (isset($error_message)): ?>
        <div class="alert" role="alert"><?php echo $error_message; ?></div>
      <?php endif; ?>
      <form method="POST">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
          <input type="submit" value="Login" class="btn">
        </div>
        <div class="form-group">
          <p><b>Belum punya akun COY? </b><a href="daftar.php">Daftar</a></p>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
