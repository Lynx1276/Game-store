//Whislist Button//
function addToWishlist() {
    // Send AJAX request to add game to wishlist
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "wishlist.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Success - handle response if needed
                console.log("Game added to wishlist!");
            } else {
                // Error - handle accordingly
                console.error("Error adding game to wishlist");
            }
        }
    };
    xhr.send("addToWishlist=true");
}
