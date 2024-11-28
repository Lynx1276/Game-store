<?php
session_start();

$valid_username = "user";
$valid_password = "password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['user_id'] = $username; // Set user ID in session
    header("Location: index.php"); // Redirect to games page after signup
    exit();
}
?>

<head>
    <title>Games Galore</title>
</head>

<!-- Css link -->
<link rel="stylesheet" href="Css/log.css">

<!-- Signup form -->

<div class="sign">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <h1>Sign Up</h1>
        <input type="text" id="username" name="username" placeholder="User name" required><br>
        <input type="email" id="email" name="email" placeholder="Email" required><br>
        <input type="password" id="password" name="password" placeholder="Your Password" required><br>
        <hr>
        <p>Do you have account? <a href="log.php">Log In</a></p>
        <button type="submit">Sign Up</button>
    </form>
</div>
