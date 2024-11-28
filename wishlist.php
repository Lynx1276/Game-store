<?php
session_start();

// List of restricted pages
$restrictedPages = ['game.php', 'index.php', 'user_transact.php', 'wishlist.php', 'receipt.php']; 

// Check if the current page is in the restricted list
if (in_array(basename($_SERVER['PHP_SELF']), $restrictedPages)) {
    // If the user is not logged in, redirect to the login page
    if (!isset($_SESSION['user_id'])) {
        header("Location: index.php");
        exit;
    }
}

// Logic to add items to wishlist
if (isset($_POST['addToWishlist'])) {
    $gameName = $_POST['gameName'];
    $gamePrice = $_POST['gamePrice'];
    $gameImage = $_POST['gameImage']; 

    $gameDetails = array(
        'name' => $gameName,
        'price' => $gamePrice,
        'image' => $gameImage 
    );

    // Initialize wishlist session if not set
    if (!isset($_SESSION['wishlist'])) {
        $_SESSION['wishlist'] = array();
    }

    // Add the game details to the wishlist session
    $_SESSION['wishlist'][] = $gameDetails;
}

// Logic to remove items from wishlist
if (isset($_POST['removeFromWishlist'])) {
    if (isset($_POST['removeIndex'])) {
        $index = $_POST['removeIndex'];
        if (isset($_SESSION['wishlist'][$index])) {
            unset($_SESSION['wishlist'][$index]);
            $_SESSION['wishlist'] = array_values($_SESSION['wishlist']); 
        }
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

<script>
    
    // JavaScript code in wish.js or included in wishlist.php
function buyAll() {
    var games = <?php echo json_encode($_SESSION['wishlist'] ?? []); ?>;

    if (games.length > 0) {
        var urlParams = "";
        games.forEach(function (game, index) {
            urlParams += "gameName" + index + "=" + encodeURIComponent(game.name) +
                "&gamePrice" + index + "=" + encodeURIComponent(game.price);
            if (index < games.length - 1) {
                urlParams += "&";
            }
        });

        window.location.href = "receipt.php?" + urlParams;
    } else {
        // Handle case when wishlist is empty
        console.log("Wishlist is empty");
    }
}

</script>

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
                <h1>Wishlist</h1>
            

<!-- Wishlist -->

        <div class="wishlist">

            <ul>
                <?php if (isset($_SESSION['wishlist'])): ?>
                    <?php $totalPrice = 0; ?>
                    <?php foreach ($_SESSION['wishlist'] as $key => $game): ?>
                        <li class="list">
                            <img src="Item/Games/ .jpg<?php echo $game['image']; ?>" alt="Game Image" class="img">
                            <span><?php echo $game['name']; ?> - $<?php echo $game['price']; ?></span>
                            <button onclick="removeFromWishlist(<?php echo $key; ?>)" class="remove">Remove</button>
                        </li>
                        <?php $totalPrice += $game['price']; ?>
                    <?php endforeach; ?>
                    <br><br>
                    <li>
                    <button onclick="buyItem('<?php echo $game['name']; ?>', <?php echo $game['price']; ?>)" class="buy">Buy</button>
                    <button onclick="buyAll()" class="click">Buy All</button>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
 </div>

<!--  JavaScript code for removing items -->
<script src="Js/wish.js"></script>
