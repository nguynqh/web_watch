function valid() {
    var username = document.getElementById("username").value;
    var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$|^\d{10}$/;

    if (regex.test(username)) {
        // Valid username
        // alert("Username is valid");
        return true;
    } else {
        // Invalid username
        // alert("Username is invalid");
        window.location.href = "./login1.php?error=invalidusername";
        return false;
    }
}