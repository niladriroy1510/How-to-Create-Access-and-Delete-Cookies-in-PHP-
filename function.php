<?php

//How to Create, Access and Delete Cookies in PHP?


setcookie(name, value, expire, path, domain, secure, httponly);

setcookie(name, value, expire, path, domain, secure, httponly);

////Retrieve cookie in PHP

if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
    echo "Welcome back, $username!";
} else {
    echo "Cookie not found.";
}



//Update Cookie in PHP


// Retrieve the existing value of the cookie
$existingValue = $_COOKIE['my_cookie'];

// Modify the value or any other parameters as needed
$newValue = $existingValue . " Updated";
$newExpiration = time() + 3600; // Add 1 hour to the current time

// Update the cookie using setcookie()
setcookie("my_cookie", $newValue, $newExpiration, "/");

// Display a message to confirm the update
echo "Cookie updated successfully.";


//Remove cookie in PHP

// Set the cookie expiration time to a past date
setcookie("my_cookie", "", time() - 3600, "/");

// Display a message to confirm the removal
echo "Cookie removed successfully.";


//Cookie Security

setcookie("cookie_name", "cookie_value", time()+3600, "/", "", true, true);
setcookie("cookie_name", "cookie_value", time()+3600, "/", "", false, true);
setcookie("cookie_name", "cookie_value", time()+3600, "/", "");




