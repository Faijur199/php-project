<?php
session_start();
include 'db.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $_SESSION['email'] = $email;
    header("Location: index.php");
} else {
    echo "<script>alert('Invalid credentials!'); window.location.href='login.html';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page</title>
  <link rel="stylesheet" href="./src/output.css"> 
</head>
<body class="bg-emerald-400 h-screen flex items-center justify-center">

  <div class="bg-white w-[400px] p-8 rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold text-center text-emerald-600 mb-6">Login Page</h1>

    <form action="login.php" method="post">
      <!-- <label for="username" class="block font-semibold mb-1 text-gray-700">Username:</label>
      <input type="text" id="username" name="username" required
             class="w-full border border-gray-300 rounded-md px-4 py-2 mb-4" /> -->
             <label for="email" class="block text-gray-700 font-semibold mb-1">Email:</label>
      <input type="email" id="email" name="email" required
             class="w-full border border-gray-300 rounded-md px-4 py-2 mb-4" />

      <label for="password" class="block font-semibold mb-1 text-gray-700">Password:</label>
      <input type="password" id="password" name="password" required
             class="w-full border border-gray-300 rounded-md px-4 py-2 mb-4" />

      <input type="submit" value="Login"
             class="w-full bg-emerald-500 text-white font-semibold py-2 rounded-md hover:bg-emerald-600 cursor-pointer" />
    </form>

    <p class="text-sm text-center text-gray-600 mt-4">
      Don't have an account?
      <a href="register.html" class="text-emerald-700 font-medium hover:underline">Sign Up</a>
    </p>
  </div>

</body>
</html>
