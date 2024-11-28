<?php
session_start();

// List of restricted pages
$restrictedPages = ['game.php', 'index.php', 'user_transact.php', 'wishlist.php', 'receipt.php']; // Add more pages as needed

// Check if the current page is in the restricted list
if (in_array(basename($_SERVER['PHP_SELF']), $restrictedPages)) {
    // If the user is not logged in, redirect to the login page
    if (!isset($_SESSION['user_id'])) {
        header("Location: index.php");
        exit;
    }
}

?>


<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games Galore</title>
<!-- Css Link -->
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<!-- Navbar code -->

    <div class="wrapper">  
    
        <div class="sidebar">
        <h2>Games Galore</h2>
         <hr>
            <ul>
                <li><a href="#"><i class="fa-regular fa-user"></i> User <i class="fa-solid fa-caret-down"></i></a>
                    <ul>
                    <?php if (isset($_SESSION['user_id'])) { ?>
                        <li><a href="user_transact.php"><i class="fa-solid fa-pen-to-square"></i> Transaction History</a></li>
                        <li><a href=""><i class="fa-solid fa-gear"></i> Setting</a></li>
                        <li><a href="sign_out.php">Sign out</a></li>

                    <?php } else { ?>    
                        <li><a href="log.php"><i class="fa-solid fa-right-to-bracket"></i> Log In</a></li>
                    <?php } ?>    
                    </ul>

                </li>
                <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
                <li><a href="game.php"><i class="fa-solid fa-gamepad"></i> Games</a></li>
                <li><a href="wishlist.php"><i class="fa-regular fa-heart"></i> Whislist</a></li>
                <li><a href="contact.php"><i class="fa-solid fa-phone"></i> Contact Us</a></li>
            </ul>
        </div>

        <div class="main-content">
            <div class="head">
                <h1>Transaction History</h1>

                <div class="transact">


                <?php

                if (isset($_SESSION['transactions']) && !empty($_SESSION['transactions'])) {
                    
                    foreach ($_SESSION['transactions'] as $transaction) {
                        echo "<p>Game Name: " . $transaction['gameName'] . ", Price: $" . $transaction['gamePrice'] . "</p>";
                        // Display other transaction details as needed
                    }
                    
                    // Button to delete all transactions
                    echo '<form method="post" action="user_transact.php">';
                    echo '<input type="hidden" name="delete_transactions" value="true">';
                    echo '<button type="submit">Delete All Transactions</button>';
                    echo '</form>';
                }

                // Check if delete transactions button is clicked
                if (isset($_POST['delete_transactions'])) {
                    // Unset the session variable to clear transactions
                    unset($_SESSION['transactions']);
                    echo "All transactions deleted successfully.";
                }
                ?>

        </div>
    </div>
</div>