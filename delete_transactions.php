<?php
session_start();

if (isset($_POST['deleteTransactions'])) {
    // Remove all transactions from the session
    unset($_SESSION['transactions']);
    // Optionally, unset the total price too
    unset($_SESSION['totalPrice']);
    // Redirect back to user_transact.php or any other page as needed
    header("Location: user_transact.php");
    exit;
}
?>
