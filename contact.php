<?php
session_start();

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
                        <li><a href="user_transact.php"><i class="fa-solid fa-pen-to-square"></i> History receipt</a></li>
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
                <h1>Contact Us</h1>
                
                    <div class="contact">
                    <div class="container">
                           
                            <p>Have questions or feedback? Reach out to us!</p>
                            
                            <form action="#" method="post">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required>
                            
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                            
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="6" required></textarea>
                            <br>
                            <input type="submit" value="Submit">
                            </form>
                        </div>

                       

                        <footer>
                            <p class="game">Games Galore</p>
                            <p>All Rights Reserved|2023</p>

                            <div class="content">
                            <h3>Contact Information</h3s>
                            <div class="icons">
                                <i class="fas fa-map-marker-alt"></i> Iba, Zambales
                            </div>
                            <div class="icons">
                                <i class="fas fa-globe"></i> www.exampleweb.com
                            </div>
                            <div class="icons">
                                <i class="fas fa-phone"></i> +123-456-7890
                            </div>
                        </div>
                        </footer>
                    </div>
                    </div>
                </div>
             </div>
    


