<?php
session_start();

// Check if the user is already logged in, redirect to home/dashboard if true
if (isset($_SESSION['user_id'])) {
    header("Location: index.php"); // Redirect to the desired page after login
    exit;
}

// Check if the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Perform your login authentication here (e.g., check credentials)

    // For example purposes, let's assume a simple check with hardcoded credentials
    $username = "user";
    $password = "password";

    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['user_id'] = 1; // Set the user ID upon successful login
        header("Location: index.php"); // Redirect to the desired page after login
        exit;
    } else {
        $loginError = "Invalid username or password";
    }
}
?>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games Galore</title>
    
<!-- Css link -->
    <link rel="stylesheet" href="Css/log.css">
</head>

<!-- HTML login form -->
<div class="log">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <h1>Log In</h1>
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <hr>
        <p>Don't have account? <a href="sign.php">Sign up</a></p>
        <button type="submit">Log in</button>
  
    </form>
</div>

<?php if (isset($loginError)) echo "<p>$loginError</p>"; ?>
