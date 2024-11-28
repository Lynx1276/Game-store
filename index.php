<?php
session_start();

// List of restricted pages
$restrictedPages = ['game.php', 'index.php']; 

// Check if the current page is in the restricted list
if (in_array(basename($_SERVER['PHP_SELF']), $restrictedPages)) {
    // If the user is not logged in, redirect to the login page
    if (!isset($_SESSION['user_id'])) {
        header("Location: index.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games Galore</title>

    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <header>
      <img src="Item/logo.png" alt="Gaming Hub" id="logo">
      <a href="#" class="logo">Games Galore</a>
        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="game.php">Games</a></li>
            <li><a href="contact.php">Contact Us</a></li>
   
        </ul>
        <div class="icon">
          <a href="log.php"><i class="fa fa-user-circle" aria-hidden="true" ></i></a>
        </div>
    </header>


    <div class="home-page">
      <div class="content">
        <h1>Welcome to Gaming Hub, your gateway to a world of <br>
        thrilling gaming adventures! </h1>
        <h2>Let's play the latest games</h2>
        <p>Dive into a universe where imagination meets innovation, and excitement knows no bounds. <br>
        Whether you're a seasoned gamer seeking challenges or a newcomer eager for immersive experiences, <br>
        our curated collection of games awaits</p>

       <button><a href="game.php"><span></span>Let's Play</a></button>
      </div>
    </div>
  

</body>
</html>