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

// Rest of your page content goes here
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
                <h1>Receipt</h1>

                <div class="receipt">

                <?php
                  
                    if (isset($_GET) && !empty($_GET)) {
                        $transactions = array();

                        foreach ($_GET as $key => $value) {
                            if (strpos($key, 'gameName') !== false) {
                                $index = substr($key, 8);
                                $gameName = $_GET['gameName' . $index];
                                $gamePrice = $_GET['gamePrice' . $index];

                                // Create a transaction array
                                $transaction = array(
                                    'gameName' => $gameName,
                                    'gamePrice' => $gamePrice
                                );

                                // Add the transaction to the array
                                $transactions[] = $transaction;
                            }
                        }

                        // Store transaction data in session variable for user_transact.php
                        $_SESSION['transactions'] = $transactions;
                    }

                    $totalPrice = 0;

                    if (isset($_GET['gameName']) && isset($_GET['gamePrice'])) {
                        $gameName = $_GET['gameName'];
                        $gamePrice = $_GET['gamePrice'];

                        // Here you can display the receipt or perform any necessary actions with the game details
                        echo "<p>Game Name: " . $gameName . "</p>";
                        echo "<h2>Game Price: $" . $gamePrice . "</h2>";

                        // Button to view user transaction history
                        echo '<a href="user_transact.php" class="button">View Transaction History</a>';
                        // Additional receipt details or actions can be added here
                    } 

                    else if (isset($_GET)) {
                        foreach ($_GET as $key => $value) {
                            if (strpos($key, 'gameName') !== false) {
                                $index = substr($key, 8);
                                $gameName = $_GET['gameName' . $index];
                                $gamePrice = $_GET['gamePrice' . $index];
                    
                                // Display each game's name and price
                          
                                echo "<p>Game Name: " . $gameName . ", Price: $" . $gamePrice . "</p>";
            
                                // Calculate total price
                                $totalPrice += floatval($gamePrice);
                            }
                            $transactions[] = $transaction;
                        }

                        // Display total price
                        echo "<h2>Total Price: $" . $totalPrice . "</h2>";
                        // Link to user_transact.php passing total price
                         echo '<a href="user_transact.php?totalPrice=' . $totalPrice . '">View Transaction History</a>';

                            } else {
                                echo "No games selected";
                            }
                        $_SESSION['transactions'] = $transactions;
                    ?>

                </div>
            </div>
        </div>

<script>
    function viewTransaction() {
        // Redirect to user_transact.php to view user's transaction
        window.location.href = "user_transact.php";
    }
</script>
