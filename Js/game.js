//Whislist Button//
function addToWishlist(name, price, image) {
    
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "wishlist.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log("Game added to wishlist!");
                // Redirect to the wishlist page after adding the game
                window.location.href = "wishlist.php"; 
            } else {
                console.error("Error adding game to wishlist");
            }
        }
    };
    xhr.send("addToWishlist=true&gameName=" + encodeURIComponent(name) + "&gamePrice=" + encodeURIComponent(price) + "&gameImage=" + encodeURIComponent(image));
}

// Buy Button
function buyItem(name, price) {
    window.location.href = "receipt.php?gameName=" + encodeURIComponent(name) + "&gamePrice=" + encodeURIComponent(price);
}