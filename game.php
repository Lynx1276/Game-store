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
                <h1>Gaming Hub</h1>
                
            </div>
        </div>
    </div>

    <!-- Section -->

    <section class="recommend">

        <div class="slider">
            <div class="slider-track">
                <div class="slide">
                    <img src="Item/Slide/g1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Item/Slide/g2.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Item/Slide/g3.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Item/Slide/g4.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Item/Slide/g5.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Item/Slide/g6.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Item/Slide/g7.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Item/Slide/g8.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Item/Slide/g9.jpg" alt="">
                </div>


                <div class="slide">
                    <img src="Item/Slide/g1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Item/Slide/g2.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Item/Slide/g3.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Item/Slide/g4.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Item/Slide/g5.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Item/Slide/g6.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Item/Slide/g7.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Item/Slide/g8.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Item/Slide/g9.jpg" alt="">
                </div>
            </div>
        </div>     
    </section>

    <section class="recommend-game">
    <div class="header">
            <h1>Recommend Games for you</h1>
        </div>

            <div class="container">
                <div class="box">
                    <img src="Item/Games/r1.jpg" alt="" srcset="">
                    <h2>ROBLOX</h2>
                    <h4>$14</h4>
                    <p>Genres: First-person shooter, Simulation video game, MORE </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <hr>
                    <div class="button">
                        <button onclick="buyItem('ROBLOX', 14)">Buy</button>
                        <button onclick="addToWishlist('ROBLOX', 14, 'Item/Game/r1.jpg')"><i class="fa-regular fa-heart"></i> Add</button>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <img src="Item/Games/r3.jpg" alt="" srcset="">
                    <h2>World of Tanks</h2>
                    <h4>$10</h4>
                    <p>Genres: Massively multiplayer online game, MORE </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <hr>
                    <div class="button">
                        <button onclick="buyItem('World of Tanks', 10)">Buy</button>
                        <button onclick="addToWishlist('World of Tanks', 10)"><i class="fa-regular fa-heart"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <img src="Item/Games/r4.jpg" alt="" srcset="">
                    <h2>Call of Duty: Modern Warfare III</h2>
                    <h4>$24</h4>
                    <p>Genres: first-person shooter  </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <hr>
                    <div class="button">
                        <button onclick="buyItem('Call of Duty: Modern Warfare III', 24)">Buy</button>
                        <button onclick="addToWishlist('Call of Duty: Modern Warfare III', 24)"><i class="fa-regular fa-heart"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <img src="Item/Games/r5.jpg" alt="" srcset="">
                    <h2>Armored Core VI: Fires of Rubicon</h2>
                    <h4>$15</h4>
                    <p>Genre: Action & Mecha </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <hr>
                    <div class="button">
                        <button onclick="buyItem('Armored Core VI: Fires of Rubicon', 15)">Buy</button>
                        <button onclick="addToWishlist('Armored Core VI: Fires of Rubicon', 15)"><i class="fa-regular fa-heart"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <img src="Item/Games/r2.jpg" alt="" srcset="">
                    <h2>Minecraft</h2>
                    <h4>$13</h4>
                    <p>Genre: 3D sandbox game </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <hr>
                    <div class="button">
                        <button onclick="buyItem('Minecraft', 13)">Buy</button>
                        <button onclick="addToWishlist('Minecraft', 13)"><i class="fa-regular fa-heart"></i> Add</button>
                    </div>
                </div>
            </div>
    
    </section>


    <!-- SHOOTER -->

    <section class="shooter">
    <div class="header">
            <h1>Shooter Games</h1>
        </div>

            <div class="container">
                <div class="box">
                    <img src="Item/Games/s1.jpg" alt="" srcset="">
                    <h2>Counter-Strike: Global Offensive</h2>
                    <h4>$20</h4>
                    <p>Genre:Tactical shooter </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <hr>
                    <div class="button">
                        <button onclick="buyItem('Counter-Strike: Global Offensive', 20)">Buy</button>
                        <button onclick="addToWishlist('Counter-Strike: Global Offensive', 20)"><i class="fa-regular fa-heart"></i> Add</button>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <img src="Item/Games/s2.jpg" alt="" srcset="">
                    <h2>Battlefield 2042</h2>
                    <h4>$17</h4>
                    <p>Genre:Multiplayer-focused first-person shooter </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <hr>
                    <div class="button">
                        <button onclick="buyItem('Battlefield 2042', 17)">Buy</button>
                        <button onclick="addToWishlist('Battlefield 2042', 17)"><i class="fa-regular fa-heart"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <img src="Item/Games/s3.jpg" alt="" srcset="">
                    <h2>Call of Duty: Modern Warfare</h2>
                    <h4>$23</h4>
                    <p>Genre:first-person shooter video game </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <hr>
                    <div class="button">
                        <button onclick="buyItem('Call of Duty: Modern Warfare', 23)">Buy</button>
                        <button onclick="addToWishlist('Call of Duty: Modern Warfare', 23)"><i class="fa-regular fa-heart"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <img src="Item/Games/s4.jpg" alt="" srcset="">
                    <h2>Overwatch 2</h2>
                    <h4>$20</h4>
                    <p>Genre:first-person shooter </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <hr>
                    <div class="button">
                        <button onclick="buyItem('Overwatch 2', 20)">Buy</button>
                        <button onclick="addToWishlist('Overwatch 2', 20)"><i class="fa-regular fa-heart"></i> Add</button>
                    </div>
                </div>
            </div>
    </section>

    <!-- MMORPG -->

    <section class="mmorpg">
    <div class="header">
            <h1>MMORPG Games</h1>
        </div>

            <div class="container">
                <div class="box">
                    <img src="Item/Games/m1.jpg" alt="" srcset="">
                    <h2>Guild Wars 2</h2>
                    <h4>$25</h4>
                    <p>Genres: Massively multiplayer online role-playing game, Fighting game, Shooter game, Massively Multiplayer, Adventure </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <hr>
                    <div class="button">
                        <button onclick="buyItem('Guild Wars 2', 25)">Buy</button>
                        <button onclick="addToWishlist('Guild Wars 2', 25)"><i class="fa-regular fa-heart"></i> Add</button>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <img src="Item/Games/m2.jpg" alt="" srcset="">
                    <h2>Black Desert Online</h2>
                    <h4>$23</h4>
                    <p>Genres: sandbox-oriented fantasy massively multiplayer online role-playing game </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <hr>
                    <div class="button">
                        <button onclick="buyItem('Black Desert Online', 23)">Buy</button>
                        <button onclick="addToWishlist('Black Desert Online', 23)"><i class="fa-regular fa-heart"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <img src="Item/Games/m3.jpg" alt="" srcset="">
                    <h2>World of Warcraft</h2>
                    <h4>$20</h4>
                    <p>Genres: massively multiplayer online role-playing game  </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <hr>
                    <div class="button">
                        <button onclick="buyItem('World of Warcraft', 20)">Buy</button>
                        <button onclick="addToWishlist('World of Warcraft', 20)"><i class="fa-regular fa-heart"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <img src="Item/Games/m4.jpg" alt="" srcset="">
                    <h2>EVE Online</h2>
                    <h4>$20</h4>
                    <p>Genres: massively multiplayer online role-playing game </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <hr>
                    <div class="button">
                        <button onclick="buyItem('EVE Online', 20)">Buy</button>
                        <button onclick="addToWishlist('EVE Online', 20)"><i class="fa-regular fa-heart"></i> Add</button>
                    </div>
                </div>
            </div>
    </section>

    <!-- ADVENTURE GAME -->

    <section class="adventure">
    <div class="header">
            <h1>Adventure Games</h1>
        </div>

            <div class="container">
                <div class="box">
                    <img src="Item/Games/a1.jpg" alt="" srcset="">
                    <h2>God of War</h2>
                    <h4>$21</h4>
                    <p>Genre: Action-adventure game </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <hr>
                    <div class="button">
                        <button onclick="buyItem('God of War', 21)">Buy</button>
                        <button onclick="addToWishlist('God of War', 21)"><i class="fa-regular fa-heart"></i> Add</button>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <img src="Item/Games/a2.jpg" alt="" srcset="">
                    <h2>Assassin's Creed</h2>
                    <h4>$20</h4>
                    <p>Genres: Action-adventure games </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <hr>
                    <div class="button">
                        <button onclick="buyItem('Assassins Creed', 20)">Buy</button>
                        <button onclick="addToWishlist('Assassins Creed', 20)"><i class="fa-regular fa-heart"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <img src="Item/Games/a3.jpg" alt="" srcset="">
                    <h2>The Witcher 3: Wild Hunt</h2>
                    <h4>$23</h4>
                    <p>Genre: Action, Horror, Adventure </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <hr>
                    <div class="button">
                        <button onclick="buyItem('The Witcher 3: Wild Hunt', 23)">Buy</button>
                        <button onclick="addToWishlist('The Witcher 3: Wild Hunt', 23)"><i class="fa-regular fa-heart"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <img src="Item/Games/a4.jpg" alt="" srcset="">
                    <h2>The Last of Us</h2>
                    <h4>$23</h4>
                    <p>Genres: Action-adventure </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <hr>
                    <div class="button">
                        <button onclick="buyItem('The Last of Us', 23)">Buy</button>
                        <button onclick="addToWishlist('The Last of Us', 23)"><i class="fa-regular fa-heart"></i> Add</button>
                    </div>
                </div>
            </div>
    </section>

    <!-- RACING -->

    <section class="racing">
    <div class="header">
            <h1>Racing Games</h1>
        </div>

            <div class="container">
                <div class="box">
                    <img src="Item/Games/k1.jpg" alt="" srcset="">
                    <h2>Asphalt 9: Legends</h2>
                    <h4>$15</h4>
                    <p>Genres: Racing games </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <hr>
                    <div class="button">
                        <button onclick="buyItem('Asphalt 9: Legends', 15)">Buy</button>
                        <button onclick="addToWishlist('Asphalt 9: Legends', 15)"><i class="fa-regular fa-heart"></i> Add</button>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <img src="Item/Games/k2.jpg" alt="" srcset="">
                    <h2>Gran Turismo Sport</h2>
                    <h4>$18</h4>
                    <p>Genres: Racing games </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <hr>
                    <div class="button">
                        <button onclick="buyItem('Gran Turismo Sport', 18)">Buy</button>
                        <button onclick="addToWishlist('Gran Turismo Sport', 18)"><i class="fa-regular fa-heart"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <img src="Item/Games/k3.jpg" alt="" srcset="">
                    <h2>Need for Speed: Hot Pursuit</h2>
                    <h4>$20</h4>
                    <p>Genres: Racing games </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <hr>
                    <div class="button">
                        <button onclick="buyItem('Need for Speed: Hot Pursuit', 20)">Buy</button>
                        <button onclick="addToWishlist('Need for Speed: Hot Pursuit', 20)"><i class="fa-regular fa-heart"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <img src="Item/Games/k4.jpg" alt="" srcset="">
                    <h2>F1 22</h2>
                    <h4>&23</h4>
                    <p>Genres: Racing game </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <hr>
                    <div class="button">
                        <button onclick="buyItem('F1 22', 23)">Buy</button>
                        <button onclick="addToWishlist('F1 22', 23)"><i class="fa-regular fa-heart"></i> Add</button>
                    </div>
                </div>
            </div>
    </section>

    <script src="Js/game.js"></script>
</body>
</html>