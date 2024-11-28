function addToWishlist(name, price) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "wishlist.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log("Game added to wishlist!");
                // Optionally, you could redirect to the wishlist page after adding the game
                window.location.href = "whishlist.php";
            } else {
                console.error("Error adding game to wishlist");
            }
        }
    };
    xhr.send("addToWishlist=true&gameName=" + name + "&gamePrice=" + price);
}

// Remove item

function removeFromWishlist(index) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "wishlist.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log("Game removed from wishlist!");
                // Reload the page after removing the game
                window.location.reload();
            } else {
                console.error("Error removing game from wishlist");
            }
        }
    };
    xhr.send("removeFromWishlist=true&removeIndex=" + index);
} 

// Single Item
function buyItem(name, price) {
    window.location.href = "receipt.php?gameName=" + encodeURIComponent(name) + "&gamePrice=" + encodeURIComponent(price);
}




